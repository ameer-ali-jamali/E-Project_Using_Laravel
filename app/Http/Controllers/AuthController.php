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
        if (Auth::user()->role == 'master_admin') {
            $downloadBooksCount = Download::all()->count();
            $usersCount = User::all()->count();
            $booksCount = Book::all()->count();
            $downloadsInfo = Download::all();
            $users = User::all();
            $books = Book::all();
            return view('admin', compact('users', 'books', 'downloadsInfo', 'usersCount', 'booksCount', 'downloadBooksCount'));
        } else {
            return redirect('/')->with('errorMessage', 'Forbidden Error! Security Alert You havenot Admin Authorities')->with('className', 'danger');
        }
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $userEmail = $request->email;
            $data = User::firstOrNew(['email' => $userEmail]);
            $role = $data->role;
            if ($role == "user") {
                return redirect()->back();
            } else {
                return redirect("/adminDashBoard");
            }
        }
        return redirect('/')->with('errorMessage', 'Encorrect Email Or Password')->with('className', 'danger');
    }
}