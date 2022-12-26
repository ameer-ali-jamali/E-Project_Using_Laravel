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
Route::get('/books', [BooksController::class, 'get_all_books']);
Route::get('/users', [UsersController::class, 'get_all_users']);
Route::post('/registerUser', [UsersController::class, 'registerUser']);
Route::post('/uploadBook', [BooksController::class, 'upload_book']);
Route::any('/download{filepath}', [IndexController::class, 'downloadBook']);
Route::get('/delete/{id}', [IndexController::class, 'delete_user']);