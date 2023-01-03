<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Console\View\Components\Alert;

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
        $user = new User();
        $user->firstName = $signupUser->firstName;
        $user->lastName = $signupUser->lastName;
        $user->email = $signupUser->email;
        $user->password = $signupUser->password;
        try {
            $user->save();
        } catch (\Throwable $th) {
            return "<script>alert('Email Already Exist Please Change Email')</script>" . redirect()->back();
        }
        return  "<script>alert('Your Data Submited')</script>" . redirect()->back();
    }
    public function delete_user(Request $request)
    {
        $getId = $request->userId;
        $userId = User::find($getId);
        $userId->delete();
        return redirect()->back();
    }
    public function get_user_info_by_id($id)
    {
        $user = User::find($id);
        if ($user) {
            return response()->json([
                "status" => 200,
                "user" => $user,
            ]);
        } else {
            return response()->json([
                "status" => 404,
                "user" => "User NOt Found",
            ]);
        }
    }
    public function update_user(Request $request)
    {
        $request->validate(
            [
                'firstName' => 'required',
                'lastName' => 'required'
            ]
        );

        $userid = $request->userIdForUpdate;
        $updateUser = User::find($userid);
        $updateUser->firstName = $request->firstName;
        $updateUser->lastName = $request->lastName;
        try {
            $updateUser->update();
        } catch (\Throwable $th) {
            return "<script>alert('Please Insert Name Correctly')</script>" . redirect()->back();
        }
        return "<script>alert('Your Data Updated Successfully')</script>" . redirect()->back();
    }
}