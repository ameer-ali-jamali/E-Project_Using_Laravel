<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Helper\TableRows;
use Symfony\Component\HttpFoundation\RedirectResponse;

class IndexController extends Controller
{
    public function get_all()
    {
        $usersCount = User::where('role', 'user')->count();
        $masterAdminCount = User::where('role', 'master_admin')->count();
        $miniAdminsCount = User::where('role', 'mini_admin')->count();
        $getMasterAdmins = User::all()->where('role', 'master_admin');
        $getMiniAdmins = User::all()->where('role', 'mini_admin');
        $booksCount = Book::where('id', '>', '0')->count();
        $users = User::all()->where('role', 'user');
        $books = Book::all();
        return view('admin', compact('users', 'books', 'usersCount', 'booksCount', 'masterAdminCount', 'miniAdminsCount', 'getMasterAdmins', 'getMiniAdmins'));
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