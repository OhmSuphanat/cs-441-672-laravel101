<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $profile = [
            'name' => 'Suphanat Sroyphet',
            'position' => 'Backend Developer',
            'aboutMe' => 'I am a Computer Science student at Kasetsart University with a strong foundation in
                        software development and problem-solving. I am skilled in programming, backend development,
                        and machine learning, with experience in designing efficient systems and improving processes.
                        Adaptable and eager to learn, I thrive in collaborative environments and enjoy tackling challenging problems.',
            'skills' => collect([
                'Python', 'C/C++', 'Java', 'Go', 'Image Processing', 'Machine Learning', 'Computer Vision',
                'NLP', 'Spring Boost', 'PostgreSQL', 'MySQL',
            ]),
            'email' => 'suphanat.sro@ku.th',
            'phoneNumber' => '0989411323',
            'address' => 'Bangkok, Thailand',
            'github' => [
                'name' => 'OhmSuphanat',
                'url' => 'https://github.com/OhmSuphanat',
            ]
        ];
        return view('about.index', [
            'profile' => $profile
        ]);
    }
}
