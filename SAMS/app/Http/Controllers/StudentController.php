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
            return view('admin.students.partials.viewstudents'); // without layout
        }

        return view('admin.students.viewstudents'); // full page with layout
    }
}
