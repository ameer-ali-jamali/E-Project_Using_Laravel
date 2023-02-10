<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\contctReqt;
use Illuminate\Http\Request;
use App\Models\UserContactUsRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\GuestContactUsRequest;

class MailController extends Controller
{
    public function sendRequestToAdmin(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'msgBox' => 'required',

            ]
        );
        if (Auth::user()) {
            $user = new UserContactUsRequest();
            $user->userId = Auth::user()->id;
            $user->msgBox = $request->msgBox;
            $user->save();
            $name = $request->name;
            $email = $request->email;
            $msgBox = $request->msgBox;
            $admin = "admin@tempMail.com";
            $mailData = [
                "Role" => "User",
                "name" => $name,
                "email" => $email,
                "msgBox" => $msgBox,
            ];
            try {
                Mail::to($admin)->send(new contctReqt($mailData));
            } catch (\Exception $ex) {
                return "<h1>Email Limits Completed Please Try Again After 1 hour</h1>";
            }
            return redirect()->back()->with('errorMessage', 'Your Request Submited SuccessFully Our Team Will Contact You In 24 Hours')->with('className', 'success');
        } else {
            $guest = new GuestContactUsRequest();
            $guest->name = $request->name;
            $guest->email = $request->email;
            $guest->msgBox = $request->msgBox;
            $guest->save();
            $name = $request->name;
            $email = $request->email;
            $msgBox = $request->msgBox;
            $admin = "admin@tempMail.com";
            $mailData = [
                "Role" => "Guest",
                "name" => $name,
                "email" => $email,
                "msgBox" => $msgBox,
            ];
            try {
                Mail::to($admin)->send(new contctReqt($mailData));
            } catch (\Exception $ex) {
                return "<h1>Email Limits Completed Please Try Again 1 hour</h1>";
            }
            return redirect()->back()->with('errorMessage', 'Your Request Submited SuccessFully Our Team Will Contact You In 24 Hours')->with('className', 'success');
        }
    }
}
