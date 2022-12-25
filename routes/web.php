<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller1;


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
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/upload', function () {
    return view('upload');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/upload_books', function () {
    return view('upload_books');
});
Route::get('/success', function () {
    return view('success');
});
Route::any('/', [controller1::class, 'select']);
Route::any('/books', [controller1::class, 'books_info']);
Route::any('/all_users', [controller1::class, 'users_info']);
Route::any('/registration_done', [controller1::class, 'register']);
Route::any('/upload', [controller1::class, 'upload_books']);