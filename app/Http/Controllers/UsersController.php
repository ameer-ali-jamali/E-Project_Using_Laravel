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
                'userFirstName' => 'required',
                'userLastName' => 'required',
                'userEmail' => 'required|email',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required'
            ]
        );

        $user = new User();
        $user->firstName = $signupUser->userFirstName;
        $user->lastName = $signupUser->userLastName;
        $user->email = $signupUser->userEmail;
        $user->password = $signupUser->password;
        try {
            $user->save();
        } catch (\Throwable $th) {
            return redirect('/')->with('errorMessage', 'Email Already Used Please Change Email')->with('className', 'danger');;
        }
        return redirect('/')->with('errorMessage', 'Your Data Submited SuccessFully')->with('className', 'success');
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
                'updateUserFirstName' => 'required',
                'updateUserLastName' => 'required',
            ]
        );

        $userid = $request->userIdForUpdate;
        $updateUser = User::find($userid);
        $updateUser->firstName = $request->updateUserFirstName;
        $updateUser->lastName = $request->updateUserLastName;
        try {
            $updateUser->update();
        } catch (\Throwable $th) {
            return redirect('/adminDashBoard')->with('errorMessage', 'Error ! Please Wait Our Team Working On it')->with('className', 'danger');
        }
        return redirect()->back();
    }
}