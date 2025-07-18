<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        "student_id",
        "marksheet_10th",
        "register_number_10th",
        "marksheet_12th",
        "register_number_12th",
        "marksheet_degree",
        "register_number_degree",
        "migration",
        "migration_number",
        "caste_certificate",
        "caste_certificate_number",
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
