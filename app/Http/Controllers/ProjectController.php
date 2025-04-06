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
                'title' => 'Task Management App',
                'description' => 'A simple task management application with user authentication.',
                'image' => 'images/project2.jpg',
                'technologies' => ['Laravel', 'MySQL', ],
                'github' => '#',
                'demo' => '#'
            ],
            [
                'title' => 'Blog Platform',
                'description' => 'A blog platform with admin panel and user comments.',
                'image' => 'images/project3.jpg',
                'technologies' => ['Laravel', 'MySQL', 'Bootstrap'],
                'github' => '#',
                'demo' => '#'
            ],
        ];

        return view('projects', compact('projects'));
    }
}