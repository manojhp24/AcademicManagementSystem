<?php

namespace App\Http\Controllers;

use App\Models\Marks;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

use function Pest\Laravel\json;

class MarksController extends Controller
{
    

    public function entry_marks(){
        $courseData = Course::all();
        $studentData = Student::all();
        if(request()->ajax()){
            return view("marks_entry.partials.marks_entry_form",compact('courseData','studentData'));
        }
        return view("marks_entry.addmarks",compact('courseData', 'studentData'));

    }

    public function view($reg){

        $marks = Marks::where('reg_number',$reg)->get();
        $studentData = Student::where('roll_number', $reg)->first();

        if(request()->ajax()){
            return view('marks_entry.partials.view_marks_details',compact('marks','studentData'));
        }

        return view('marks_entry.view_marks',compact('marks', 'studentData'));
    }

    public function store(Request $request){
       foreach($request->course_code as $i => $code){
        Marks::create([
            'reg_number'=> $request->reg_number,
            'course_code'=> $code,
            'credits'=>$request->credits[$i],   
            'cie'=>$request->cie[$i],
            'see'=>$request->see[$i],
            'total_marks'=>$request->total_marks[$i],
            'grade'=>$request->grade[$i],
            'credits_earned'=>$request->credits_earned[$i],
            'grade_points'=>$request->grade_points[$i],
            'credits_points'=>$request->credit_points[$i],
        ]);
       }
        return response()->json(["message" => "Successfully added"]);
    }

    public function generateMarks(Request $request){
        
    }
}
