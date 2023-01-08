<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\download;
use App\Models\Download as ModelsDownload;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Psy\VersionUpdater\Downloader;
use Symfony\Component\Console\Helper\TableRows;
use Symfony\Component\HttpFoundation\RedirectResponse;

class IndexController extends Controller
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
        }
        return redirect('/')->with('errorMessage', 'Forbidden! you do not have admin rights')->with('className', 'danger');
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
        return redirect('/')->with('errorMessage', 'Email Or Password Wrong')->with('className', 'danger');
    }
    public function contactUs(Request $request)
    {
        return $request;
    }
}