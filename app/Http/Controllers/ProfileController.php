<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = [
            'name'=> 'Thoyibatul Maulida',
            'email' => 'thoyibatulmaulidaaa@gmail.com',
            'bio' => 'we have hope but the world has reality',
            'profile_picture'=> 'profile1.jpg',
            'skills'=> ['Komunikasi','Desain Grafis','Manajemen Waktu']
        ];
        return view('profile', compact('profile'));
    }
}
