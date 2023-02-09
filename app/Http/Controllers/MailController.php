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
        // if (Auth::user()) {
        //     $user = new UserContactUsRequest();
        //     $user->userId = Auth::user()->id;
        //     $user->messageBox = $request->messageBox;
        //     $user->save();
        //     $name = $request->name;
        //     $email = $request->email;
        //     $messageBox = "<h4 style='color:red;'>Contact Us Request From User .</h4>" . "<hr>" . $request->messageBox;
        //     $mail = new contactRequest();
        //     $mail->name = $name;
        //     $mail->email = $email;

        //     Mail::to('khanhmdkhn13@gmail.com')->send(new contactRequest($mailData));
        //     Mail::to('khanhmdkhn13@gmail.com')->send(new contactRequest($mailData));
        //     $mail->Subject = "Conatact Us Request";
        //     $mail->Body = $messageBox;
        //     try {
        //         $mail->send();
        //     } catch (\Exception $ex) {
        //         return "Email Blocked Error Please Try Again Later ";
        //     }
        //     return redirect()->back()->with('errorMessage', 'Your Request Submited SuccessFully Our Team Will Contact You In 24 Hours')->with('className', 'success');
        // } else {
        // $guest = new GuestContactUsRequest();
        // $guest->name = $request->name;
        // $guest->email = $request->email;
        // $guest->messageBox = $request->messageBox;
        // $guest->save();
        $name = $request->name;
        $email = $request->email;
        $msgBox = $request->messageBox;
        $admin = "admin@tempMail.com";
        $mailData = [
            "name" => $name,
            "email" => $email,
            "msgBox" => $msgBox,
        ];
        try {
            Mail::to($admin)->send(new contctReqt($mailData));
        } catch (\Exception $ex) {
            return $ex;
            // return "Email Blocked Error Please Try Again Later ";
        }
        return redirect()->back()->with('errorMessage', 'Your Request Submited SuccessFully Our Team Will Contact You In 24 Hours')->with('className', 'success');
    }
}