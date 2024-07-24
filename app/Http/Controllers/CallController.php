<?php

// app/Http/Controllers/CallController.php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\BusinessData;
use App\Models\CallStatistic;
use App\Models\DailySales;
use App\Models\DailyCalls;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

    // dd($request->all());

    // Get the currently authenticated user
    $user = Auth::user();

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
            $totalRecords += $this->processCsvData($csvData, $callStatistic, $user->id);
        }
    }

    // Update the total_users field for the user
    $user->total_users = $totalRecords;
    $user->save();

    return redirect('/')->with('success', 'Form submitted successfully!');
}

    protected function processCsvData($csvData, $callStatistic, $userId)
    {
        $csvFilePath = storage_path('app/temp.csv');
        file_put_contents($csvFilePath, $csvData);
        $csvFile = fopen($csvFilePath, 'r');
        $headers = fgetcsv($csvFile, 2000, ",");

        $totalRecords = 0;

        while (($data = fgetcsv($csvFile, 2000, ",")) !== false) {
            $row = array_combine($headers, $data);

            $businessData = BusinessData::create([
                'user_id' => $userId,
                'business_name' => $row['Business Name - Sales Agency'] ?? '',
                'email' => $row['Email ID'] ?? '',
                'phone' => $row['Phone'] ?? '',
                'website' => $row['Website'] ?? '',
                'name' => $row['Name'] ?? '',
                'status' => 'pending',
            ]);

            $totalRecords++;

            // Example logic for daily stats update
            $date = date('Y-m-d');
            // dd($date);
            $dailySales = DailySales::firstOrCreate(['day' => $date, 'number' => 0, 'user_id'=>$userId]);
            $dailyCalls = DailyCalls::firstOrCreate(['day' => $date, 'number' => 0, 'user_id'=>$userId]);

            // Update daily sales and calls here if needed
            // Example:
            // $dailySales->increment('number');
            // $dailyCalls->increment('number');
        }


        fclose($csvFile);
        Storage::delete($csvFilePath);

        return $totalRecords;
    }

    public function index() {
        // Get the currently authenticated user
        $user = Auth::user();

        $call_instructions=$user->call_instructions;
        $follow_up_instructions=$user->follow_up_instructions;

        return view('call', compact(
            'call_instructions',
            'follow_up_instructions'
        ));
    }

    public function submitFollow(Request $request) {
        $request->validate([
            'follow_up_instructions' => 'required|string|max:300',
        ]);

        $user = Auth::user();

        $user->follow_up_instructions = $request->input('follow_up_instructions');
        $user->save();

        return redirect()->back()->with('success', 'Follow up instructions updated');
    }

}
