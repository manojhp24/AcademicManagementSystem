<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ImportExportController extends Controller
{
    public function exportView(){
        if(request()->ajax()){
            return view("export_import.partials.export-data-content");
        }

        return view("export_import.export-data");

    } 

    public function importView(){
        if(request()->ajax()){
            return view("export_import.partials.import-data-content");
        }
        return view("export_import.import-data");

    }
}
