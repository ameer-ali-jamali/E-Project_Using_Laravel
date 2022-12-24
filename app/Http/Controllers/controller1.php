<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\users;
use Illuminate\Cache\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class controller1 extends Controller
{
    public function register(Request $obj)
    {
        $obj->validate(
            [
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'password_confirmation' => 'required|confirmed'
            ]
        );

        if ($obj == true) {
            $user = new users();
            $user->first_name = $obj->fname;
            $user->last_name = $obj->lname;
            $user->email = $obj->email;
            $user->pass = $obj->password;
            $user->save();
            return view('registration_done');
        } else {
            echo "<pre>";
            print_r($obj);
        }
    }
    public function upload_books(Request $obj)
    {
        $obj->validate(
            [
                'book_name' => 'required',
                'book_issue_date' => 'required|date',
                'author_name' => 'required',
                'author_email' => 'required|email',
                'book_description' => 'required',
                'book_img' => 'required'

            ]
        );

        if ($obj == true) {
            $books = new books();
            $books->book_name = $obj->book_name;
            $books->book_issue_date = $obj->book_issue_date;
            $books->author_name = $obj->author_name;
            $books->author_email = $obj->author_email;
            $books->book_description = $obj->book_description;
            $img_name = $obj->file('book_img')->getClientOriginalName();
            $obj->file('book_img')->store('public/books_images');
            $books->book_img = $img_name;
            $books->save();
        } else {
            echo "hello";
        }
    }
}