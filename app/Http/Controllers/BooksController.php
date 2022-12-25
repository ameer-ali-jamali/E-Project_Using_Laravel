<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{

    public function all_books_home_page()
    {
        $book = Books::all();
        return view('index', compact('book'));
    }
    public function get_all_books()
    {
        $book = Books::all();
        return view('getAllBooks', compact('book'));
    }
    public function upload_book(Request $formData)
    {
        $formData->validate(
            [
                'name' => 'required',
                'issueDate' => 'required|date',
                'authorName' => 'required',
                'authorEmail' => 'required|email',
                'description' => 'required',
                'img' => 'required',
                'file' => 'required'

            ]
        );

        $table = new Books();
        $table->name = $formData->name;
        $table->issuedate  = $formData->issueDate;
        $table->authorname  = $formData->authorName;
        $table->authoremail  = $formData->authorEmail;
        $table->description  = $formData->description;
        $file  = $formData->file('file')->getClientOriginalName();
        $formData->file('file')->move(public_path('assests/'), $file);
        $table->file =  'assests/' . $file;
        $img_name  = $formData->file('img')->getClientOriginalName();
        $formData->file('img')->move(public_path('images/books'), $img_name);
        $table->image =  'images/books/' . $img_name;
        $table->save();
        echo "hello";
    }
}