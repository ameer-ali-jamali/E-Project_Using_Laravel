<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function registerUser(Request $signupUser)
    {

        $signupUser->validate(
            [
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required'
            ]
        );

        $table = new Users();
        $table->firstName = $signupUser->firstName;
        $table->lastName = $signupUser->lastName;
        $table->email = $signupUser->email;
        $table->pass = $signupUser->password;
        $table->save();
        return redirect()->back();
    }

    public function get_all_users()
    {
        $user = Users::all();
        return view('getAllUsers', compact('user'));
    }
}