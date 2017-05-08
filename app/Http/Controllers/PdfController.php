<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Institution;
use App\Sport;
use PDF;

class PdfController extends Controller
{
    public function pdf() {
        $colleges = Institution::all();
        $pdf = PDF::loadView('pdf', ['colleges' => $colleges]);
        return $pdf->stream('college_sports.pdf');
    }
}
