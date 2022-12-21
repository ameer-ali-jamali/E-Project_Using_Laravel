<?php

use App\Http\Controllers\Controller;
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

Route::any('/{home}', function ($name) {
    $data = compact('name');
    return view('home')->with($data);
});
Route::any('/{about}', function ($name) {
    $data = compact('name');
    return view('about')->with($data);
});

Route::any('/{admin}', function ($name) {
    $data = compact('name');
    return view('admin')->with($data);
});

Route::any('/{contact}', function ($name) {
    $data = compact('name');
    return view('contact')->with($data);
});

Route::any('/{blog}', function ($name) {
    $data = compact('name');
    return view('blog')->with($data);
});
Route::any('/{shop}', function ($name) {
    $data = compact('name');
    return view('shop')->with($data);
});
Route::any('/{single_post}', function ($name) {
    $data = compact('name');
    return view('single_post')->with($data);
});

Route::any('/{single_product}', function ($name) {
    $data = compact('name');
    return view('single_product')->with($data);
});

Route::any('/{styles}', function ($name) {
    $data = compact('name');
    return view('styles')->with($data);
});

Route::any('/{thankyou}', function ($name) {
    $data = compact('name');
    return view('thankyou')->with($data);
});