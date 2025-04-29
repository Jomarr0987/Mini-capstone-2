<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\User;
use App\Models\Resort;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BookingSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();
        $resort = Resort::first();

        if (!$user || !$resort) {
            $this->command->warn('⚠️ No user or resort found. Add some before seeding bookings.');
            return;
        }

        Booking::factory()->count(5)->create([
            'user_id' => $user->id,
            'resort_id' => $resort->id,
        ]);
    }
}
