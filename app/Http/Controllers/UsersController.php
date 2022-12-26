<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
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

        $userModel = new UserModel();
        $userModel->firstName = $signupUser->firstName;
        $userModel->lastName = $signupUser->lastName;
        $userModel->email = $signupUser->email;
        $userModel->pass = $signupUser->password;
        $userModel->save();
        return redirect()->back();
    }

    public function get_all_users()
    {
        $user = UserModel::all();
        return view('getAllUsers', compact('user'));
    }
    public function delete_user($id)
    {
        $user = UserModel::find($id);
        $user->delete();
        return redirect('/users');
    }
}