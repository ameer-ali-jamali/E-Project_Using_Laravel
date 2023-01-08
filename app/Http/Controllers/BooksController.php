<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function upload_book(Request $formData)
    {
        $formData->validate(
            [
                'bookName' => 'required',
                'bookIssueDate' => 'required|date',
                'bookAuthorName' => 'required',
                'bookAuthorEmail' => 'required|email',
                'bookDescription' => 'required',
                'bookImg' => 'required',
                'bookFile' => 'required',

            ]
        );
        $book = new Book();
        $book->name = $formData->bookName;
        $book->issueDate  = $formData->bookIssueDate;
        $book->authorName  = $formData->bookAuthorName;
        $book->authorEmail  = $formData->bookAuthorEmail;
        $book->description  = $formData->bookDescription;
        $img_name  = $formData->file('bookImg')->getClientOriginalName();
        $formData->file('bookImg')->move(public_path('book/images/'), $img_name);
        $book->image =  'book/images/' . $img_name;
        $file  = $formData->file('bookFile')->getClientOriginalName();
        $formData->file('bookFile')->move(public_path('assests/booksPdf/'), $file);
        $book->file =  'assests/booksPdf/' . $file;
        try {
            $book->save();
        } catch (\Throwable $th) {
            return redirect()->back()->with('errorMessage', 'Something Missing Please Check It Again !')->with('className', 'danger');
        }
        return redirect()->back();
    }

    public function all_books_home_page()
    {
        try {
            $books = DB::table('books')->orderBy("id", "DESC")->get();
        } catch (\Throwable $th) {
            try {
                return view('serverErrorMessage');
            } catch (\Throwable $th) {
                return $th;
            }
            return view('index');
        }
        return view('index', compact('books'));
    }
    public function delete_book(Request $request)
    {
        $getId = $request->bookId;
        $bookData = Book::find($getId);
        $bookData->delete();
        return redirect()->back();
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
                'updateBookName' => 'required',
                'updateIssueDate' => 'required|date',
                'updateAuthorName' => 'required',
                'updateAuthorEmail' => 'required|email',
                'updateDescription' => 'required'

            ]
        );
        $bookId = $request->bookIdForUpdate;
        $book = Book::find($bookId);
        $book->name = $request->updateBookName;
        $book->issueDate  = $request->updateIssueDate;
        $book->authorName  = $request->updateAuthorName;
        $book->authorEmail  = $request->updateAuthorEmail;
        $book->description  = $request->updateDescription;
        try {
            $book->update();
        } catch (\Throwable $th) {
            return redirect()->back()->with('errorMessage', 'DataBase Error! Please Wait Our Team Working on It')->with('className', 'secondery');
        }
        return redirect()->back();
    }
}