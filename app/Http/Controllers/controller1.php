<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\users;
use Illuminate\Cache\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Contracts\Service\Attribute\Required;

class controller1 extends Controller
{
    public function select()
    {
        $data = books::all();
        return view('index', compact('data'));
    }

    public function register(Request $obj)
    {
        $obj->validate(
            [
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required'
            ]
        );

        if ($obj == true) {
            $user = new users();
            $user->first_name = $obj->fname;
            $user->last_name = $obj->lname;
            $user->email = $obj->email;
            $user->pass = $obj->password;
            $user->save();
            return redirect('/register');
        } else {
            echo "<pre>";
            print_r($obj);
        }
    }
    public function upload_books(Request $obj)
    {
        $obj->validate(
            [
                'Name' => 'required',
                'Issue_Date' => 'required|date',
                'Author_Name' => 'required',
                'Author_Email' => 'required|email',
                'Description' => 'required',
                'Image' => 'required'

            ]
        );

        if ($obj == true) {
            $books = new books();
            $books->name = $obj->Name;
            $books->issue_date = $obj->Issue_Date;
            $books->author_name = $obj->Author_Name;
            $books->author_email = $obj->Author_Email;
            $books->description = $obj->Description;
            $img_name = $obj->file('Image')->getClientOriginalName();
            $obj->file('Image')->move(public_path('Images/books'), $img_name);
            $books->image =  'Images/books/' . $img_name;
            $books->save();
            return redirect('/upload_books');
        }
    }
    public function books_info()
    {
        $data = books::all();
        return view('books', compact('data'));
    }
    public function users_info()
    {
        $data = users::all();
        return view('all_users', compact('data'));
    }
}