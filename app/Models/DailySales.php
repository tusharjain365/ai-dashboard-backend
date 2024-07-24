<?php

// app/Models/DailySales.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailySales extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'number',
        'user_id'
    ];
}
