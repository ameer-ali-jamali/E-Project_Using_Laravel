<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;



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
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/upload', function () {
    return view('uploadBook');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::any('/', [BooksController::class, 'all_books_home_page']);
Route::get('/admin', [indexController::class, 'get_all']);
Route::post('/registerUser', [UsersController::class, 'registerUser']);
Route::post('/uploadBook', [BooksController::class, 'upload_book']);
Route::get('/deleteBook/{id}', [BooksController::class, 'delete_book']);
Route::get('/deleteUser/{id}', [UsersController::class, 'delete_user_by_id']);
Route::get('/getUserInfoById/{id}', [UsersController::class, 'get_user_info_by_id']);
Route::get('/getBookInfoById/{id}', [BooksController::class, 'get_book_info_by_id']);
Route::post('/updateUser', [UsersController::class, 'update_user']);
Route::post('/updateBook', [BooksController::class, 'update_book']);
