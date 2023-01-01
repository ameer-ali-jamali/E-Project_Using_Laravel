<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\RedirectResponse;

class IndexController extends Controller
{
    public function get_all()
    {
        $users = Users::all();
        $books = Book::all();
        return view('admin', compact('users'), compact('books'));
    }
}