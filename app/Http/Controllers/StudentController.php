<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
    {
        if(request()->ajax()){
            return view('students.partials.studentsaddform');
        }


        return view('students.addstudent');
    }

    public function view()
    {
        if (request()->ajax()) {
            return view('students.partials.studentslisttable'); 
        }

        return view('students.viewstudents'); 
    }
}
