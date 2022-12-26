<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{

    public function all_books_home_page()
    {
        $book = books::all();
        return view('index', compact('book'));
    }
    public function get_all_books()
    {
        $book = books::all();
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
                'file' => 'required',
                'img' => 'required'

            ]
        );

        $table = new books();
        $table->name = $formData->name;
        $table->issueDate  = $formData->issueDate;
        $table->authorName  = $formData->authorName;
        $table->authorEmail  = $formData->authorEmail;
        $table->description  = $formData->description;
        $file  = $formData->file('file')->getClientOriginalName();
        $formData->file('file')->move(public_path('assests/booksPdf/'), $file);
        $table->file =  'assests/booksPdf/' . $file;
        $img_name  = $formData->file('img')->getClientOriginalName();
        $formData->file('img')->move(public_path('book/images/'), $img_name);
        $table->image =  'book/images/' . $img_name;
        $table->save();
        return redirect()->back();
    }
}