<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LecturersController extends Controller
{
    public function create(){

        if(request()->ajax()){
            return view('faculties.partials.addfacultiesform');
        }

        return view('faculties.addlecturers');

    }

    public function view(){
        if(request()->ajax()){
            return view('faculties.partials.facultiestablelist');
        }
        return view('faculties.viewlecturers');
    }
}
