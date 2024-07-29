<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\BusinessMail;
use App\Mail\AdminMail;
use App\Models\BusinessData;

class SendCallEmails implements ShouldQueue
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
        $user = $businessData->user;

        // Send email to businessData->email
        Mail::to($businessData->email)->send(new BusinessMail($businessData));

        // Send email to user->business_email
        Mail::to($user->business_email)->send(new AdminMail($user));
    }
}
