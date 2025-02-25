<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to Laravel 11 PDF Generate',
            'date' => date('m/d/Y')
        ];
        $pdf = PDF::loadView('pdf.document', $data);
        return $pdf->download('myPDF.pdf');
    }
}
