<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class CallController extends Controller
{
    
    public function processCsv(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'files.*' => 'required|file|mimes:csv,txt|max:2048',
            'callInstructions' => 'required|string|max:300',
            'followUpInstructions' => 'required|string|max:300',
        ]);

        $files = $request->file('files');
        $callInstructions = $request->input('callInstructions');
        $followUpInstructions = $request->input('followUpInstructions');
        $pathwayId = 'd7da6177-f5ee-4103-bc45-d11f48add787';

        foreach ($files as $file) {
            // Store the uploaded file temporarily
            $filePath = $file->storeAs('temp', 'temp.csv');
            $csvFile = fopen(storage_path('app/' . $filePath), 'r');
            $headers = fgetcsv($csvFile, 2000, ",");

            while (($data = fgetcsv($csvFile, 2000, ",")) !== false) {
                $row = array_combine($headers, $data);

                $name = $row['name'] ?? '';
                $phoneNumber = '+91' . ($row['phone'] ?? '');
                $email = $row['useremail'] ?? '';
                $industry = $row['industry'] ?? '';

                // Make API call to Bland.ai
                $response = Http::withHeaders([
                    'Content-Type' => 'application/json',
                    'Authorization' => 'sk-it76y1ubaa6a5jjsbct515lbqdubtsu36srglilw55qdkrok5ssg5cl4h3lw03ac69',
                ])->post('https://api.bland.ai/v1/calls', [
                    'phone_number' => $phoneNumber, // Using phone number from CSV
                    'pathway_id' => $pathwayId, // Using pathway ID
                    'voice' => 'maya',
                    'task' => $callInstructions,
                    'transfer_phone_number' => "+919205299574", // This seems static; you might want to adjust or remove if necessary
                    'request_data' => [
                        'name' => $name,
                        'useremail' => $email,
                        'industry' => $industry
                    ],
                    'record' => true,
                ]);

                if ($response->failed()) {
                    // Return detailed error information for debugging
                    return response()->json([
                        'error' => 'API call failed',
                        'details' => $response->json()
                    ], 500);
                }

                // Optional: Log successful responses or data if needed
                // Log::info('API response:', $response->json());

                sleep(1); // To prevent hitting rate limits or to throttle requests
            }

            fclose($csvFile);
            Storage::delete($filePath); // Clean up the temporary file
        }

        return response()->json(['success' => 'Calls processed successfully']);
    }
}
