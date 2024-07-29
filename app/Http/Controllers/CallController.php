<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\BusinessData;
use App\Models\CallStatistic;
use App\Jobs\ProcessBusinessData;

class CallController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the request
        $request->validate([
            'call_instructions' => 'required|string|max:300',
            'follow_up_instructions' => 'required|string|max:300',
            'files.*' => 'nullable|file|mimes:csv,txt|max:2048',
        ]);

        DB::beginTransaction();

        try {
            // Get the currently authenticated user
            $user = Auth::user();

            // Update call instructions and follow-up instructions for the current user
            $call_instructions = $request->input('call_instructions');
            $user->call_instructions = $call_instructions;
            $user->follow_up_instructions = $request->input('follow_up_instructions');
            $user->save();

            // Create or update the call statistics record for the user
            $callStatistic = CallStatistic::updateOrCreate(
                ['user_id' => $user->id],
                ['user_id' => $user->id]
            );

            $totalRecords = 0;

            // Handle the CSV file uploads and process
            if ($request->hasFile('files')) {
                foreach ($request->file('files') as $file) {
                    $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                    $path = $file->storeAs('csv_files', $filename);

                    $totalRecords += $this->processCsvData($path, $user->id);
                }
            }

            // Update the total_users field for the user
            $user->total_users = $totalRecords;
            $user->save();

            DB::commit();

            return redirect('/')->with('success', 'Form submitted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Error submitting form.', [
                'error' => $e->getMessage(),
            ]);

            return redirect()->back()->with('error', 'An error occurred while processing your request.');
        }
    }

    protected function processCsvData($path, $userId)
    {
        try {
            $csvFile = fopen(storage_path('app/' . $path), 'r');
            if ($csvFile === false) {
                throw new \Exception('File could not be opened.');
            }

            $headers = fgetcsv($csvFile, 2000, ",");
            if ($headers === false) {
                throw new \Exception('Error reading CSV headers.');
            }

            $totalRecords = 0;

            while (($data = fgetcsv($csvFile, 2000, ",")) !== false) {
                $row = array_combine($headers, $data);
                if ($row === false) {
                    Log::warning('CSV row does not match headers.', ['row' => $data]);
                    continue;
                }

                $business_name = $row['business_name'] ?? '';
                $email = $row['email_id'] ?? '';
                $phone = $this->formatPhoneNumber($row['phone'] ?? '');
                $country_code = $row['country_code'] ?? '+1';
                $name = $row['name'] ?? '';

                // Skip the entire record if the phone number is not found
                if (empty($phone)) {
                    Log::info('Skipping record due to missing phone number.', ['row' => $row]);
                    continue;
                }

                $formattedPhone = $country_code . $phone;

                $totalRecords++;

                $businessData = BusinessData::create([
                    'user_id' => $userId,
                    'business_name' => $business_name,
                    'email' => $email,
                    'phone' => $formattedPhone,
                    'name' => $name,
                    'country_code' => $country_code,
                    'status' => 'call_not_done', // Default status
                    'call_id' => null
                ]);

                // Dispatch a job to process this record
                ProcessBusinessData::dispatch($businessData);
            }

            fclose($csvFile);

            return $totalRecords;
        } catch (\Exception $e) {
            Log::error('Error processing CSV file.', [
                'path' => $path,
                'userId' => $userId,
                'error' => $e->getMessage(),
            ]);

            throw $e; // Rethrow the exception to trigger the transaction rollback
        }
    }

    protected function mapStatus($response)
    {
        // Map the API response to ENUM values
        $statusMapping = [
            'not_done' => 'call_not_done',
            'not_connected' => 'call_not_connected',
            'connected' => 'call_connected',
            'user_not_interested' => 'user_not_interested',
            'connected_follow_up' => 'call_connected_follow_up',
            'user_interested' => 'call_connected_user_interested',
        ];

        return $statusMapping[$response['status']] ?? 'call_not_done';
    }

    public function index()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        $call_instructions = $user->call_instructions;
        $follow_up_instructions = $user->follow_up_instructions;

        return view('call', compact(
            'call_instructions',
            'follow_up_instructions'
        ));
    }

    public function submitFollow(Request $request)
{
    $request->validate([
        'follow_up_instructions' => 'required|string|max:300',
    ]);

    $user = Auth::user();

    // Update follow-up instructions for the current user
    $user->follow_up_instructions = $request->input('follow_up_instructions');
    $user->save();

    // Fetch all BusinessData records where status is 'call_connected_follow_up'
    $businessDataRecords = BusinessData::where('status', 'call_connected_follow_up')
        ->where('user_id', $user->id)
        ->get();

    // Dispatch ProcessBusinessData jobs for each record
    foreach ($businessDataRecords as $businessData) {
        // follow up job logic here
    }

    return redirect()->back()->with('success', 'Follow up instructions updated and jobs created for follow-up.');
}


    protected function formatPhoneNumber($phone)
    {
        // Remove any spaces, brackets, or other symbols from the phone number
        return preg_replace('/[^0-9]/', '', $phone);
    }
}
