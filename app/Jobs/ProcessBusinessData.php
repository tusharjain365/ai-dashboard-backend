<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\BusinessData;
use App\Models\DailyCalls;
use App\Models\DailySales;
use Illuminate\Support\Facades\Http;
use App\Jobs\RetrieveCallInfo;

class ProcessBusinessData implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $businessData;

    public function __construct(BusinessData $businessData)
    {
        $this->businessData = $businessData;
    }

    public function handle()
    {
        $user = $this->businessData->user;
        $response = $this->sendDataToApi(
            $user->id,
            $this->businessData->email,
            $user->business_email,
            $this->businessData->business_name,
            $this->businessData->phone,
            $this->businessData->name,
            $user->call_instructions
        );

        $status = $this->mapStatus($response);
        $this->businessData->update([
            'status' => $status,
            'call_id' => $response['call_id'] ?? null
        ]);

        $date = date('Y-m-d');

        // Update or create daily calls record
        if ($status !== 'call_not_connected') {
            DailyCalls::updateOrCreate(
                ['day' => $date, 'user_id' => $user->id],
                ['number' => DailyCalls::where('day', $date)->where('user_id', $user->id)->sum('number') + 1]
            );
        }

        // Update or create daily sales record
        $salesNumber = 0;
        if ($status === 'call_connected_user_interested') {
            $salesNumber = 1;
        }

        DailySales::updateOrCreate(
            ['day' => $date, 'user_id' => $user->id],
            ['number' => DailySales::where('day', $date)->where('user_id', $user->id)->sum('number') + $salesNumber]
        );

        // Update or create call statistics record
        CallStatistic::updateOrCreate(
            ['user_id' => $user->id],
            [
                'total_calls_connected' => CallStatistic::where('user_id', $user->id)->sum('total_calls_connected') + 
                    ($status === 'call_connected_user_not_interested' || $status === 'call_connected_follow_up' || $status === 'call_connected_user_interested' ? 1 : 0),
                'total_calls_not_connected' => CallStatistic::where('user_id', $user->id)->sum('total_calls_not_connected') + 
                    ($status === 'call_not_connected' ? 1 : 0),
                'total_leads_acquired' => CallStatistic::where('user_id', $user->id)->sum('total_leads_acquired') + 
                    ($status === 'call_connected_user_interested' ? 1 : 0),
            ]
        );

        // If call_id is present, dispatch the RetrieveCallRecording job after 15 minutes
        if ($this->businessData->call_id) {
            RetrieveCallInfo::dispatch($this->businessData)->delay(now()->addMinutes(15));
        }
    }

    protected function sendDataToApi($userId, $email, $user_business_email, $business_name, $phone, $name, $call_instructions)
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
                'call_instructions' => $call_instructions
            ],
            'record' => true,
        ]);

        return $response->json();
    }

    protected function mapStatus($response)
    {
        $statusMapping = [
            'not_done' => 'call_not_done',
            'not_connected' => 'call_not_connected',
            'connected' => 'call_connected_user_not_interested',
            'connected_follow_up' => 'call_connected_follow_up',
            'user_interested' => 'call_connected_user_interested',
        ];

        return $statusMapping[$response['status']] ?? 'call_not_done';
    }
}
