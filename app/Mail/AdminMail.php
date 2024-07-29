<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\BusinessData;

class BusinessFollowUpMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $businessData;

    public function __construct(BusinessData $businessData)
    {
        $this->businessData = $businessData;
    }

    public function build()
    {
        return $this->view('emails.admin_email')
                    ->with('businessData', $this->businessData);
    }
}
