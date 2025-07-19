<?php

namespace App\Http\Controllers;

use App\Models\AcademicDetail;
use App\Models\Fee;
use App\Models\Student;
use App\Models\Document;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
    {
        if (request()->ajax()) {
            return view('students.partials.studentsaddform');
        }

        return view('students.addstudent');
    }

    public function view()
    {
        $studentData = Student::with('acdemicDetail','fee','document')->get();

        if (request()->ajax()) {
            return view('students.partials.studentslisttable',compact('studentData'));
        }

        return view('students.viewstudents',compact('studentData'));
    }

    public function store(Request $request)
    {

        $student = Student::create($request->only([
            'student_name',
            'roll_number',
            'place',
            'state',
            'dob',
            'phone_number',
            'alternative_phone_number',
            'email',
            'permanent_address',
        ]));

        AcademicDetail::create([
            "student_id"         => $student->id,
            "graduation"         => $request->graduation_background,
            "languages_known"    => $request->language,
            "ssc_percent"        => $request->ssc_percent,
            "hsc_percent"        => $request->hsc_percent,
            "graduation_percent" => $request->graduation_percent,
        ]);

        Fee::create([
            "student_id"        => $student->id,
            "actual_fee"       => $request->actual_fees,
            "discount"          => $request->discount,
            "registration_fee" => $request->registration_fees,
            "accommodation"     => $request->accommodation,
            "exam"              => $request->Exam,
        ]);

        Document::create([
            "student_id" => $student->id,
            "marksheet_10th"=>$request->doc_10th,
            "register_number_10th"=>$request->doc_10th_registerNumber,
            "marksheet_12th"=>$request->doc_12th,
            "register_number_12th"=>$request->doc_12th_registerNumber,
            "marksheet_degree"=>$request->doc_degree,
            "register_number_degree"=>$request->degree_marksheet_number,
            "migration"=>$request->doc_migration,
            "migration_number"=>$request->migration_certificate_number,
            "caste_certificate"=>$request->doc_caste,
            "caste_certificate_number"=>$request->caste_certificate_number,

        ]);

        return response()->json(['message' => 'Student data saved successfully.']);
    }
}
