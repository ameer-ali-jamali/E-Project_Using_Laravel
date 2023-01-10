<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\VersionUpdater\Downloader;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Download as ModelsDownload;
use Symfony\Component\Console\Helper\TableRows;
use Symfony\Component\HttpFoundation\RedirectResponse;


class AuthController extends Controller
{
    public function get_all()
    {
        try {
            if (Auth::user()->role == 'master_admin') {
                $downloadBooksCount = Download::all()->count();
                $usersCount = User::all()->count();
                $booksCount = Book::all()->count();
                $downloadsInfo = Download::all();
                $users = User::all();
                $books = Book::all();
                return view('admin', compact('users', 'books', 'downloadsInfo', 'usersCount', 'booksCount', 'downloadBooksCount'));
            }
        } catch (\Throwable $th) {
            return redirect('/')->with('errorMessage', 'Admin Logged out')->with('className', 'danger');
        }
    }
    public function login(Request $request)
    {
        $email = $request->email;
        $pass = $request->pass;
        dd(Auth::attempt(['email' => $request->email]));
        // if (Auth::attempt($credentials)) {
        //     $userEmail = $request->email;
        //     $data = User::firstOrNew(['email' => $userEmail]);
        //     $role = $data->role;
        //     if ($role == "user") {
        //         return redirect()->back();
        //     } else {
        //         return redirect("/adminDashBoard");
        //     }
        // }
        // return redirect()->back()->with('errorMessage', 'Encorrect Email Or Password')->with('className', 'danger');

    }
}