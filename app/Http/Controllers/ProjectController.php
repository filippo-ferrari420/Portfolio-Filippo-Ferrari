<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'title' => 'E-commerce Website',
                'description' => 'A fully functional e-commerce website built with Laravel and MySQL.',
                'image' => 'images/project1.jpg',
                'technologies' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript'],
                'github' => '#',
                'demo' => '#'
            ],
            [
                'title' => 'supercar showroom',
                'description' => 'supercar showroom website',
                'image' => 'images/project2.jpg',
                'technologies' => ['Laravel', 'MySQL', 'bootstrap' ],
                'github' => '#',
                'demo' => '#'
            ],
           
        ];

        return view('projects', compact('projects'));
    }
}