<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function skills()
    {
        $skills = [
            ['name' => 'PHP', 'percentage' => 75],
            ['name' => 'Laravel', 'percentage' => 70],
            ['name' => 'MySQL', 'percentage' => 65],
            ['name' => 'HTML/CSS', 'percentage' => 80],
            ['name' => 'JavaScript', 'percentage' => 60],
            ['name' => 'Bootstrap', 'percentage' => 85],
            ['name' => 'Git', 'percentage' => 70],
        ];

        return view('skills', compact('skills'));
    }
}