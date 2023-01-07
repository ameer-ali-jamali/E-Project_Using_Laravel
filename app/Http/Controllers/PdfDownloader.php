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
        // db call, add 1 row into table

        $get_file_path = $request->fileLocation;
        $userId = $request->userInfo;
        $getAll = User::find($userId);
        $table = new Download();
        $table->userId = $userId;
        $table->name = $getAll->firstName;
        $table->bookName = $get_file_path;
        $table->save();
        $downlaodBook = response()->download(public_path($get_file_path));
        return $downlaodBook;
    }
}