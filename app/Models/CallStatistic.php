<?php

// app/Models/CallStatistic.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallStatistic extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_calls_connected',
        'total_calls_not_connected',
        'total_leads_acquired',
    ];
}
