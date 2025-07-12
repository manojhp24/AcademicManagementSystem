<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        if(request()->ajax()){
            return view('admin.partials.contents');
        }
        return view('admin.dashboard');
    }

    public function loginCheck(Request $request){
        $email = $request->email;
        $password = $request->password;

        if($email == 'manojhp584@gmail.com' && $password =="admin"){
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login.form')->with('error', 'Invalid Credentials');
        }
        
    }
}
