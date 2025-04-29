<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resorts')->insert([
            [
                'name' => 'Blue Water Beach Resort',
                'location' => 'Bohol',
                'address' => 'Danao, Panglao',
                'contact' => '09063544122',
                'email' => 'bluewater@gmail.com',
                'image' => '1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Thirsty Traveller',
                'location' => 'Bohol',
                'address' => 'Anos Fonacier Circumferential Rd, Panglao',
                'contact' => '09111111222',
                'email' => 'thirstytraveller@gmail.com',
                'image' => '2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'On Board Beach Resort',
                'location' => 'Bohol',
                'address' => 'Libaong, Panglao',
                'contact' => '09222231221',
                'email' => 'onboardbeach@gmail.com',
                'image' => '3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Anlio Resort',
                'location' => 'Bohol',
                'address' => 'Poblacion, Panglao',
                'contact' => '09444443211',
                'email' => 'anlioresort@gmail.com',
                'image' => '4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samadhi Resort',
                'location' => 'Bohol',
                'address' => 'Tawala, Panglao',
                'contact' => '09555555666',
                'email' => 'samadhiresort@gmail.com',
                'image' => '5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'OHANA Resort',
                'location' => 'Bohol',
                'address' => 'Tapayan, Panglao',
                'contact' => '09666666777',
                'email' => 'ohanaresort@gmail.com',
                'image' => '6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
