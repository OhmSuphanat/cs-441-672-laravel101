<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $content2560 = Storage::json('2560.json');
        $content2565 = Storage::json('2565.json');

        foreach ($content2560 as $data) {
            $data['str'] = 2560;
            $engName = $data['eng_name'];
            $data['eng_name'] = substr($engName, 1, -1);
            Course::create($data);
        }

        foreach ($content2565 as $data) {
            $data['str'] = 2565;
            $engName = $data['eng_name'];
            $data['eng_name'] = substr($engName, 1, -1);
            Course::create($data);
        }
    }
}
