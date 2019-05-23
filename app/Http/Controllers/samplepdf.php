<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class samplepdf extends Controller
{
    public function index(){
       $pdf = PDF::loadView('samplepdf');
       return $pdf->stream('sample.pdf');
//        return $pdf->download('invoice.pdf');
    }
}
