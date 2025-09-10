<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Fee;
use App\Models\AcademicDetail;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->session()->has('is_admin_logged_in')) {
            return redirect()->route('admin.login.form')
                ->with('error', 'Please login first');
        }

        $totalStudents = Student::count();

        if ($request->ajax()) {
            return view('admin.partials.contents',compact("totalStudents"));
        }
        return view('admin.dashboard', compact("totalStudents"));
    }



    public function loginCheck(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if ($email == 'manojhp584@gmail.com' && $password == "admin") {
            $request->session()->put('is_admin_logged_in', true);
            $request->session()->put('admin_email', $email);

            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login.form')
                ->with('error', 'Invalid Credentials');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('admin.login.form');
    }
}
