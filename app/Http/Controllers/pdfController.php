<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pdfController extends Controller
{
    function pdf(){
        $data['namapdf']="LAPORAN PDF";
    $pdf = \PDF::loadView('pdf', $data);
    return $pdf->download('invoice.pdf');
    }
    
}