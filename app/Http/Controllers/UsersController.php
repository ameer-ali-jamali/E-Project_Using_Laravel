<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Console\View\Components\Alert;
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
        $user = new Users();
        $user->firstName = $signupUser->firstName;
        $user->lastName = $signupUser->lastName;
        $user->email = $signupUser->email;
        $user->pass = $signupUser->password;
        try {
            $user->save();
        } catch (\Throwable $th) {
            return "<script>alert('Something Missing')</script>" . redirect()->back();
        }
        return "<script>alert('Your Data Submited Successfully')</script>" . redirect()->back();
    }
    public function delete_user(Request $request)
    {
        $getId = $request->userId;
        $userId = Users::find($getId);
        $userId->delete();
        return redirect()->back();
    }
    public function get_user_info_by_id($id)
    {
        $user = Users::find($id);
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
        $updateUser = Users::find($userid);
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