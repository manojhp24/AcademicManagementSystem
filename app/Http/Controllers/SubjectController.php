<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

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

    public function store(Request $request){
        
        Course::create([
            "course_name" => $request->course_name,
            "course_code" => $request->course_code,
            "semester" => $request ->semester,
            "structure_code" => $request->structure_code,
            "elective_group" => $request ->elective_group,
            "lecture_credits" => $request ->lecture_credits, 
            "practical_credits" => $request ->practical_credits,
            "total_credits" => $request ->total_credits,
            "internal_marks" => $request ->internal_marks,
            "external_marks" => $request ->external_marks,
            "total_marks" => $request ->total_marks,
        ]);

        return response()->json(['message' => 'Student data saved successfully.']);
    }
}
