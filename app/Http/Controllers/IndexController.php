<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;

class IndexController extends Controller
{
    public function get_all()
    {
        $users = User::all();
        $books = Book::all();
        return view('admin', compact('users'), compact('books'));
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
        return  "<script>alert('inCorrect Email Or  Password')</script>" . redirect()->back();
    }
    public function contactUs(Request $request)
    {
        return $request;
    }
}