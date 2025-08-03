<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marks extends Model
{
    protected $fillable = [
        'student_id',
        'reg_number',
        'course_code',
        'credits',
        'cie',
        'see',
        'total_marks',
        'grade',
        'credits_earned',
        'grade_points',
        'credits_points',   
    ];
}
