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
                'name' => 'required',
                'issueDate' => 'required|date',
                'authorName' => 'required',
                'authorEmail' => 'required|email',
                'description' => 'required',
                'img' => 'required',
                'file' => 'required',

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
        try {
            $book->save();
        } catch (\Throwable $th) {
            return redirect('/')->with('errorMessage', 'Something Missing Please Check It Again !')->with('className', 'danger');
        }
        return redirect('/')->back();
    }

    public function all_books_home_page()
    {
        $books = DB::table('books')->orderBy("id", "DESC")->get();
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
            return redirect('/')->with('errorMessage', 'SomeThing Missing Please Check It Again !')->with('className', 'secondery');
        }
        return redirect('/')->back();
    }
}