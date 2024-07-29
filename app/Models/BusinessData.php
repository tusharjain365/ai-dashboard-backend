<?php
// app/Models/BusinessData.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessData extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','business_name', 'email', 'phone', 'name', 'status','call_id', 'country_code', 'call_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
