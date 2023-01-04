<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\FlareClient\Http\Response;
use Illuminate\Support\Facades\Storage;

class PdfDownloader extends Controller
{
    public function download(Request $request)
    {
        $file = "file1.jpg";
        return response()->download(public_path('assests\booksPdf\book1.pdf'));
    }
}