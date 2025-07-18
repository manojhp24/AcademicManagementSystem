<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademicDetail extends Model
{
    protected $fillable = [
        "student_id",
        "graduation",
        "languages_known",
        "ssc_percent",
        "hsc_percent",
        "graduation_percent"
    ];

    public function studnet(){
        return $this->belongsTo(Student::class);
    }
}
