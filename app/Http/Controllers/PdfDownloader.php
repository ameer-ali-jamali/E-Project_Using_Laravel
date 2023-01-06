<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\FlareClient\Http\Response;
use Illuminate\Support\Facades\Storage;

class PdfDownloader extends Controller
{
    public function download_pdf_funciton(Request $request)
    {
        // db call, add 1 row into table
        $getAll = $request->userInfo;

        $get_file_path = $request->fileLocation;
        return response()->download(public_path($get_file_path));
    }
}