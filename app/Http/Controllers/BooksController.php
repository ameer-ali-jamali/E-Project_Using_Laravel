<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
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

        $book = new Book();
        $book->name = $formData->name;
        $book->issueDate  = $formData->issueDate;
        $book->authorName  = $formData->authorName;
        $book->authorEmail  = $formData->authorEmail;
        $book->description  = $formData->description;
        $img_name  = $formData->file('img')->getClientOriginalName();
        $formData->file('img')->move(public_path('book/images/'), $img_name);
        $book->image =  'book/images/' . $img_name;
        $file  = $formData->file('file')->getClientOriginalName();
        $formData->file('file')->move(public_path('assests/booksPdf/'), $file);
        $book->file =  'assests/booksPdf/' . $file;
        $book->save();
        return redirect()->back();
    }
    public function all_books_home_page()
    {
        $book = Book::all();
        return view('index', compact('book'));
    }
    public function get_all_books()
    {
        $book = Book::all();
        return view('admin', compact('book'));
    } public function get_books()
    {
        $book = Book::all();
        return view('getAllBooks', compact('book'));
    }
    public function delete_book($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('/books');
    }
    public function get_book_info_by_id($id)
    {
        $book = Book::find($id);
        if ($book) {
            return response()->json([
                "status" => 200,
                "getBookData" => $book,
            ]);
        } else {
            return response()->json([
                "status" => 404,
                "book" => "Book Record Not Found",
            ]);
        }
    }
    public function update_book(Request $request)

    {
        $request->validate(
            [
                'name' => 'required',
                'issueDate' => 'required|date',
                'authorName' => 'required',
                'authorEmail' => 'required|email',
                'description' => 'required'

            ]
        );
        $bookId = $request->bookIdForUpdate;
        $book = Book::find($bookId);
        if ($book == true) {
            $book->name = $request->name;
            $book->issueDate  = $request->issueDate;
            $book->authorName  = $request->authorName;
            $book->authorEmail  = $request->authorEmail;
            $book->description  = $request->description;
            $book->update();
            return redirect()->back();
        }
    }
}
