<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF(){

        $pdf = App::make('dompdf.wrapper');

        // $pdf->loadHTML('<h1>AUTO SCHED</h1>');
        // dd($pdf->stream());
        return Pdf::loadHTML("<div>test</div>")->stream();

    }
}
