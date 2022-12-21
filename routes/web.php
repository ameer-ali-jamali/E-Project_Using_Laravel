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

Route::any('/{details}', function ($name) {
    $data = compact('name');
    return view('details')->with($data);
});

Route::any('/{contact_us}', function ($name) {
    $data = compact('name');
    return view('contavt_us')->with($data);
});

Route::any('/{admin}', function ($name) {
    $data = compact('name');
    return view('admin')->with($data);
});