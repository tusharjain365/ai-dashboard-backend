<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\BusinessData;

class RetrieveCallRecording implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $businessData;

    public function __construct(BusinessData $businessData)
    {
        $this->businessData = $businessData;
    }

    public function handle()
    {
        $businessData = $this->businessData;
        $callId = $businessData->call_id;

        if ($callId) {
            try {
                // Fetch call recording
                $response = Http::withHeaders([
                    'Content-Type' => 'application/json',
                    'authorization' => 'sk-it76y1ubaa6a5jjsbct515lbqdubtsu36srglilw55qdkrok5ssg5cl4h3lw03ac69',
                ])->get("https://api.bland.ai/v1/calls/{$callId}/recording");

                // Fetch call transcript
                $transcriptResponse = Http::withHeaders([
                    'Content-Type' => 'application/json',
                    'authorization' => 'sk-it76y1ubaa6a5jjsbct515lbqdubtsu36srglilw55qdkrok5ssg5cl4h3lw03ac69',
                ])->get("https://api.bland.ai/v1/calls/{$callId}/transcript");

                $recording = $response->json('recording');
                $transcript = $transcriptResponse->json('transcript');

                // Update the BusinessData record with the recording and transcript
                $businessData->update([
                    'recording' => $recording,
                    'transcript' => $transcript
                ]);

            } catch (\Exception $e) {
                Log::error("Failed to retrieve recording or transcript for call_id {$callId}: " . $e->getMessage());
            }
        } else {
            Log::warning("BusinessData does not have a call_id.");
        }
    }
}
