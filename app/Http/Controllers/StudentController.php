<?php

namespace App\Http\Controllers;

use App\Models\AcademicDetail;
use App\Models\Fee;
use App\Models\Student;
use App\Models\Document;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

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

    

    public function show($id){

        $student = Student::with(['acdemicDetail', 'fee', 'document'])->findOrFail($id);

        if(request()->ajax())
            return view('students.partials.studentdetails',compact('student'));

        return view('students.details',compact('student'));
    }

    public function update($id){
        $student_details = Student::with(['acdemicDetail', 'fee', 'document'])->findOrFail($id);

        if(request()->ajax())
            return view('students.partials.student-edit',compact('student_details'));

        return view('students.editstudent',compact('student_details'));
    }

    public function delete($id)
    {
        $student = Student::find($id); 

        if (!$student) {
            return response()->json(['message' => 'Student already deleted or not found.'], 200);
        }

        $student->acdemicDetail()->delete();
        $student->fee()->delete();
        $student->document()->delete();

        $student->delete();

        return response()->json(['message' => 'Student deleted successfully.']);
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
            "mode_of_payment"   => $request->mode_of_payment,
            "actual_fee"       => $request->actual_fees,
            "discount"          => $request->discount,
            "registration_fee" => $request->registration_fees,
            "accommodation"     => $request->accommodation,
            "exam"              => $request->Exam,
        ]);

        Document::create([
            "student_id" => $student->id,
            "marksheet_10th"=>$request->doc_10th,
            "register_number_10th"=>$request->doc_10th_registerNumber ?? "Not Submitted",
            "marksheet_12th"=>$request->doc_12th,
            "register_number_12th"=>$request->doc_12th_registerNumber ?? "Not Submitted",
            "marksheet_degree"=>$request->doc_degree,
            "register_number_degree"=>$request->degree_marksheet_number ?? "Not Submitted",
            "migration"=>$request->doc_migration,
            "migration_number"=>$request->migration_certificate_number ?? "Not Submitted",
            "caste_certificate"=>$request->doc_caste,
            "caste_certificate_number"=>$request->caste_certificate_number ?? "Not Submitted",

        ]);

        return response()->json(['message' => 'Student data saved successfully.']);
    }

    public function updateStudent(Request $request, $id)
    {
        $student = Student::findOrFail($id);


        $student->update($request->only([
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


        $student->acdemicDetail()->update([
            "graduation"         => $request->graduation_background,
            "languages_known"    => $request->language,
            "ssc_percent"        => $request->ssc_percent,
            "hsc_percent"        => $request->hsc_percent,
            "graduation_percent" => $request->graduation_percent,
        ]);

        $student->fee()->update([
            "mode_of_payment"   => $request->mode_of_payment,
            "actual_fee"        => $request->actual_fees,
            "discount"          => $request->discount,
            "registration_fee"  => $request->registration_fees,
            "accommodation"     => $request->accommodation,
            "exam"              => $request->Exam,
        ]);


        $student->document()->update([
            "marksheet_10th"           => $request->doc_10th,
            "register_number_10th"     => $request->doc_10th_registerNumber ?? "Not Submitted",
            "marksheet_12th"           => $request->doc_12th,
            "register_number_12th"     => $request->doc_12th_registerNumber ?? "Not Submitted",
            "marksheet_degree"         => $request->doc_degree,
            "register_number_degree"   => $request->degree_marksheet_number ?? "Not Submitted",
            "migration"                => $request->doc_migration,
            "migration_number"         => $request->migration_certificate_number ?? "Not Submitted",
            "caste_certificate"        => $request->doc_caste,
            "caste_certificate_number" => $request->caste_certificate_number ?? "Not Submitted",
        ]);

        return response()->json(['success', 'Student data updated successfully.']);
    }
}
