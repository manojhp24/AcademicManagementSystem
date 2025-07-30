<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "course";
    protected $fillable = [
        "course_name",
        "course_code",
        "semester",
        "structure_code",
        "elective_group",
        "lecture_credits",
        "practical_credits",
        "total_credits",
        "internal_marks",
        "external_marks",
        "total_marks",
    ];

}
