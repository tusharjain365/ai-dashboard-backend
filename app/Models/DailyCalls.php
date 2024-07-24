<?php
// app/Models/DailyCalls.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyCalls extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'number',
        'user_id'
    ];

    public function callStatistics()
    {
        return $this->hasMany(CallStatistic::class, 'daily_calls_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
