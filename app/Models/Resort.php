<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resort extends Model
{
    use HasFactory;

    // Define the fillable fields
    protected $fillable = ['name', 'location', 'address', 'contact', 'email', 'image'];

    // Optional: You can set up a relationship with another model if needed.
}
