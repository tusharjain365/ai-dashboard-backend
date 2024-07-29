<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Models\BusinessData;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();


Schedule::call(function () {

    $user = Auth::user();

    $businessDataRecords = BusinessData::where('status', 'call_not_connected')
        ->where('user_id', $user->id)
        ->get();

    // Dispatch ProcessBusinessData jobs for each record
    foreach ($businessDataRecords as $businessData) {
        $job = new ProcessBusinessData($businessData);
        $job->handle();
    }
})->daily();
