<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
    {
        return view('students.addstudent');
    }

    public function view()
    {
        if (request()->ajax()) {
            return view('students.viewstudents'); // without layout
        }

        return view('students.viewstudents'); // full page with layout
    }
}
