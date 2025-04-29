<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'user_id',
        'resort_id',
        'full_name',
        'phone',
        'email',
        'room_type',
        'room_price',
        'guests',
        'check_in',
        'check_out',
        'gcash_number',
        'gcash_amount',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function resort()
    {
        return $this->belongsTo(Resort::class);
    }


}
