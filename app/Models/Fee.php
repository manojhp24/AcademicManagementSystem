<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    protected $table = 'fee';
    protected $fillable = [
        "student_id",
        "actual_fee",
        "discount",
        "registration_fee",
        "accommodation",
        "exam",
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
