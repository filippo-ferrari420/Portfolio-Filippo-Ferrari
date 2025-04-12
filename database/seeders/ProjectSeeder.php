<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $projects = [
            [
                'title' => 'E-commerce Website',
                'description' => 'A fully functional e-commerce website built with Laravel and MySQL.',
                'image' => 'images/project1.jpg',
                'technologies' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript'],
                'github' => '#',
                'demo' => '#',
                'featured' => true
            ],
            [
                'title' => 'supercar showroom',
                'description' => 'supercar showroom website',
                'image' => 'images/project2.jpg',
                'technologies' => ['Laravel', 'MySQL', 'bootstrap' ],
                'github' => '#',
                'demo' => '#',
                'featured' => true
            ],
        ];

        foreach ($projects as $project) {
            Project::create([
                'title' => $project['title'],
                'description' => $project['description'],
                'technologies' => json_encode($project['technologies']),
                'github' => $project['github'],
                'demo' => $project['demo'],
                'image' => $project['image'],
                'featured' => $project['featured']
            ]);
        }
    }
}
