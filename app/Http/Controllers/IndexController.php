<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\UserModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\RedirectResponse;

class IndexController extends Controller
{
    public function get_books_users()
    {
        $user = UserModel::all();
        $book = Book::all();
        return view('admin',compact('user'),compact('book'));

    }
}
