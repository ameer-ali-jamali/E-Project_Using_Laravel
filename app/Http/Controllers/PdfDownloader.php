<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Download;
use Spatie\FlareClient\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class PdfDownloader extends Controller
{
    public function download_pdf_funciton(Request $request)
    {

        $userId = $request->userId;
        $bookId = $request->bookId;
        $table = new Download();
        $table->userId = $userId;
        $table->bookId = $bookId;
        $table->save();
        $get_file_path = $request->fileLocation;
        $downlaod = response()->download(public_path($get_file_path));
        return $downlaod;
    }
}