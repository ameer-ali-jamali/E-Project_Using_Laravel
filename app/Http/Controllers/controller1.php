<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\users;
use Illuminate\Cache\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controller1 extends Controller
{
    public function register(Request $obj)
    {
        $user = new users();
        $user->first_name = $obj->fname;
        $user->last_name = $obj->lname;
        $user->email = $obj->email;
        $user->pass = $obj->pass;
        $user->save();
        return view('/thankyou');
    }

    // public function list()
    // {
    //     $data = books::all();
    //     return view('index', compact('data'));
    // }
};