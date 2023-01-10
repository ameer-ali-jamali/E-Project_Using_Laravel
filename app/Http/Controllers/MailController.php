<?php

namespace App\Http\Controllers;

use App\Models\GuestContactUsRequest;
use App\Models\User;
use App\Models\UserContactUsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

class MailController extends Controller
{
    public function sendRequestToAdmin(Request $request)
    {
        if (Auth::user()) {
            $user = new UserContactUsRequest();
            $user->userId = Auth::user()->id;
            $user->messageBox = $request->messageBox;
            $user->save();
            $name = $request->name;
            $email = $request->email;
            $messageBox = "<h4 style='color:red;'>Contact Us Request From User .</h4>" . "<hr>" . $request->messageBox;
            $adminEmail = env('MAIL_ADMIN_EMAIL_ADDRESS');
            $mail = new PHPMailer(true);
            $mail->IsSMTP();
            $mail->Host       = "smtp.gmail.com";
            $mail->SMTPAuth   = TRUE;
            $mail->Username   = env("MAIL_USERNAME");
            $mail->Password   = env("MAIL_PASSWORD");
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;
            $mail->setFrom($mail->Username);
            $mail->AddReplyTo($email, $name);
            $mail->AddAddress($adminEmail);
            $mail->IsHTML(true);
            $mail->Subject = "Conatact Us Request";
            $mail->Body = $messageBox;
            try {
                $mail->send();
            } catch (Exception $ex) {
                return "Email Blocked Error Please Try Again Later ";
            }
            return redirect()->back()->with('errorMessage', 'Your Request Submited SuccessFully Our Team Will Contact You In 24 Hours')->with('className', 'success');
        } else {
            $guest = new GuestContactUsRequest();
            $guest->name = $request->name;
            $guest->email = $request->email;
            $guest->messageBox = $request->messageBox;
            $guest->save();
            $name = $request->name;
            $email = $request->email;
            $messageBox = "<h4 style='color:red;'>Contact Us Request From User .</h4>" . "<hr>" . $request->messageBox;
            $adminEmail = env('MAIL_ADMIN_EMAIL_ADDRESS');
            $mail = new PHPMailer(true);
            $mail->IsSMTP();
            $mail->Host       = "smtp.gmail.com";
            $mail->SMTPAuth   = TRUE;
            $mail->Username   = env("MAIL_USERNAME");
            $mail->Password   = env("MAIL_PASSWORD");
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;
            $mail->setFrom($mail->Username);
            $mail->AddReplyTo($email, $name);
            $mail->AddAddress($adminEmail);
            $mail->IsHTML(true);
            $mail->Subject = "Conatact Us Request";
            $mail->Body = $messageBox;
            try {
                $mail->send();
            } catch (Exception $ex) {
                return "Email Blocked Error Please Try Again Later ";
            }
            return redirect()->back()->with('errorMessage', 'Your Request Submited SuccessFully Our Team Will Contact You In 24 Hours')->with('className', 'success');
        }
    }
}