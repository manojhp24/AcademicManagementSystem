<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function create(){

        if(request()->ajax()){
            return view('subject.partials.addsubjectsform');
        }


        return view('subject.addsubjects');
    }

    public function view(){
        
        if (request()->ajax()) {
            return view('subject.partials.subjectstablelist');
        }
        return view('subject.viewsubjects');
    }
}
