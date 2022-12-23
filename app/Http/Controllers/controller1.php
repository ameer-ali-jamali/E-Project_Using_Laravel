<?php

namespace App\Http\Controllers;

use App\Models\books;
use App\Models\users;
use Illuminate\Cache\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class controller1 extends Controller
{
    public function register(Request $obj)
    {
        $obj->validate(
            [
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'password_confirmation' => 'required|confirmed'
            ]
        );

        if ($obj == true) {
            $user = new users();
            $user->first_name = $obj->fname;
            $user->last_name = $obj->lname;
            $user->email = $obj->email;
            $user->pass = $obj->pass;
            $user->save();
            return view('registration_done');
        } else {
            echo "<pre>";
            print_r($obj);
        }
    }

    public function list()
    {
        $data = books::all();
        return view('index', compact('data'));
    }
};