<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PdfDownloader;
use App\Http\Controllers\UsersController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/userlogout', function () {
    \session_abort();
    Auth::logout();
    return redirect()->back();
});
Route::get('/adminlogout', function () {
    \session_abort();
    Auth::logout();
    return redirect()->back();
});

Route::any('/', [BooksController::class, 'all_books_home_page']);
Route::get('/adminDashBoard', [indexController::class, 'get_all']);
Route::post('/userLogin', [indexController::class, 'login']);
Route::post('/registerUser', [UsersController::class, 'registerUser']);
Route::post('/uploadBook', [BooksController::class, 'upload_book']);
Route::get('/deleteBook', [BooksController::class, 'delete_book']);
Route::get('/deleteUser', [UsersController::class, 'delete_user']);
Route::get('/getUserInfoById/{id}', [UsersController::class, 'get_user_info_by_id']);
Route::get('/getBookInfoById/{id}', [BooksController::class, 'get_book_info_by_id']);
Route::post('/updateUser', [UsersController::class, 'update_user']);
Route::post('/updateBook', [BooksController::class, 'update_book']);
Route::get('/pdfDownload', [PdfDownloader::class, 'download']);