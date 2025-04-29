<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resort extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'address', 'contact', 'email', 'image'];

    public function bookings() {
        return $this->hasMany(Booking::class);
    }
    
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
