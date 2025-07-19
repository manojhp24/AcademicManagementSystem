<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    protected $fillable = [
        'student_name','roll_number',
            'place',
            'state',
            'dob',
            'phone_number',
            'alternative_phone_number',
            'email',
            'permanent_address'
    ];

    public function acdemicDetail(){
        return $this->hasone(AcademicDetail::class);
    }

    public function fee(){
        return $this->hasOne(Fee::class);
    }

    public function document(){
        return $this->hasOne(Document::class);
    }
}
