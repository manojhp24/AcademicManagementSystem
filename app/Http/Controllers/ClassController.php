<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
   public function create(){
      
      if(request()->ajax()){
         return view('class.partials.classaddform');
      }
      
      return view('class.addclass');
   }

   public function view(){
      if(request()->ajax()){
         return view('class.partials.classtablelist');
      }

      return view('class.viewclass');
   }

}
