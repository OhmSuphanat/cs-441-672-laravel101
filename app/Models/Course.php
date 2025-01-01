<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_id', 'str', 'code', 'thai_name', 'eng_name', 'thai_description', 'eng_description', 'credit',
        'lecture_hours', 'practice_hours', 'self_study_hours', 'condition'
        ];
}