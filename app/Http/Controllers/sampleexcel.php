<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class sampleexcel extends Controller
{
    function index(){
        Excel::create('New file', function($excel) {

        $excel->sheet('New sheet', function($sheet) {

            $sheet->loadView('sampleexcel');

        });

    })->download('xlsx');;
    }
}
