<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resort;

class ResortController extends Controller
{
    public function index()
    {
        $resorts = [
            [
                'image' => '1.jpg',
                'name' => 'Blue Water Beach Resort',
                'location' => 'Bohol',
                'address' => 'Danao, Panglao',
                'contact' => '09063544122',
                'email' => 'bluewater@gmail.com'
            ],
            [
                'image' => '2.jpg',
                'name' => 'Thirsty Traveller',
                'location' => 'Bohol',
                'address' => 'Anos Fonacier Circumferential Rd, Panglao',
                'contact' => '09111111222',
                'email' => 'bluewater@gmail.com'
            ],
            [
                'image' => '3.jpg',
                'name' => 'On Board Beach Resort',
                'location' => 'Bohol',
                'address' => 'Libaong, Panglao',
                'contact' => '09222231221',
                'email' => 'bluewater@gmail.com'
            ],
            [
                'image' => '4.jpg',
                'name' => 'Anlio Resort',
                'location' => 'Bohol',
                'address' => 'Poblacion, Panglao',
                'contact' => '09444443211',
                'email' => 'bluewater@gmail.com'
            ],
            [
                'image' => '5.jpg',
                'name' => 'Samadhi Resort',
                'location' => 'Bohol',
                'address' => 'Tawala, Panglao',
                'contact' => '09555555666',
                'email' => 'bluewater@gmail.com'
            ],
            [
                'image' => '6.jpg',
                'name' => 'OHANA Resort',
                'location' => 'Bohol',
                'address' => 'Tapayan, Panglao',
                'contact' => '09666666777',
                'email' => 'bluewater@gmail.com'
            ],
        ];
    
        return view('resort.index', compact('resorts'));
    }
    
}
