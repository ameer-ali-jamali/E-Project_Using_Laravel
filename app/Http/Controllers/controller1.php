<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\books;

class controller1 extends Controller
{
    public function list()
    {
        $data = books::all();
        return view('about', compact('data'));
    }
};