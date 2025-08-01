<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarksController extends Controller
{
    public function entry_marks(){
        if(request()->ajax()){
            return view("marks_entry.partials.marks_entry_form");
        }
        return view("marks_entry.addmarks");

    }
}
