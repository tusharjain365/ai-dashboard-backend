<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\BusinessData;
use App\Models\CallStatistic;
use App\Models\DailySales;
use App\Models\DailyCalls;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        // Get the currently authenticated user
        $user = Auth::user();
        $user_business_email = $user->business_email;

        // Update call instructions and follow-up instructions for the current user
        $user->call_instructions = $request->input('call_instructions');
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
                $path = $file->store('csv_files', 'public');
                $csvData = file_get_contents(storage_path('app/public/' . $path));
                $totalRecords += $this->processCsvData($csvData, $callStatistic, $user->id, $user_business_email, $request->input('call_instructions'));
            }
        }

        // Update the total_users field for the user
        $user->total_users = $totalRecords;
        $user->save();

        return redirect('/')->with('success', 'Form submitted successfully!');
    }

    protected function processCsvData($csvData, $callStatistic, $userId, $user_business_email, $call_instructions)
    {
        $csvFilePath = storage_path('app/temp.csv');
        file_put_contents($csvFilePath, $csvData);
        $csvFile = fopen($csvFilePath, 'r');
        $headers = fgetcsv($csvFile, 2000, ",");

        $totalRecords = 0;

        while (($data = fgetcsv($csvFile, 2000, ",")) !== false) {
            $row = array_combine($headers, $data);
            $business_name = $row['Business Name - Sales Agency'] ?? '';
            $email = $row['Email ID'] ?? '';
            $phone = "+1".$row['Phone'] ?? '';
            $website = $row['Website'] ?? '';
            $name = $row['Name'] ?? '';

            $totalRecords++;

            $response = $this->sendDataToApi($userId, $email, $user_business_email, $business_name, $phone, $website, $name, $call_instructions);

            $businessData = BusinessData::create([
                'user_id' => $userId,
                'business_name' => $business_name,
                'email' => $email,
                'phone' => $phone,
                'website' => $website,
                'name' => $name,
                'status' => $response['status'] ?? 'call_not_done', // Default status if not set
                'call_id' => $response['call_id'] ?? null, // Default to null if not set
            ]);

            // Example logic for daily stats update
            $date = date('Y-m-d');
            $dailyCalls = DailyCalls::firstOrCreate(['day' => $date, 'user_id' => $userId]);
            $salesNumber = 0;

            // Update daily sales if the call was successful and user agreed
            if ($response['status'] === 'call_connected_user_interested' && isset($response['agreed']) && $response['agreed'] === true) {
                $salesNumber = 1;
            }

            $dailySales = DailySales::firstOrCreate(['day' => $date, 'user_id' => $userId]);
            $dailySales->increment('number', $salesNumber);
        }

        fclose($csvFile);
        Storage::delete($csvFilePath);

        return $totalRecords;
    }

    protected function sendDataToApi($userId, $email, $user_business_email, $business_name, $phone, $website, $name, $call_instructions)
    {
        $pathway_id = 'd7da6177-f5ee-4103-bc45-d11f48add787';

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'authorization' => 'sk-it76y1ubaa6a5jjsbct515lbqdubtsu36srglilw55qdkrok5ssg5cl4h3lw03ac69',
        ])->post('https://api.bland.ai/v1/calls', [
            'phone_number' => $phone,
            'pathway_id' => $pathway_id,
            'voice' => 'maya',
            'request_data' => [
                'userId' => $userId,
                'name' => $name,
                'useremail' => $user_business_email,
                'email' => $email,
                'industry' => $business_name,
                'call_instructions' => $call_instructions,
            ],
            'record' => true,
        ]);

        $responseData = $response->json();

        return $responseData;
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

        $user->follow_up_instructions = $request->input('follow_up_instructions');
        $user->save();

        return redirect()->back()->with('success', 'Follow up instructions updated');
    }
}
