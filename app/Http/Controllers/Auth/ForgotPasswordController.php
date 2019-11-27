<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Sentinel;
use Reminder;
use App\User;
use Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    public function forgot(){
        return view('site.forgot-password');
    }

    public function postForgot(Request $request){
       $user = User::whereEmail($request->email)->first();

       if($user == null){
           return redirect()->back()->with(['error' => 'Email không tồn tại']);
       }

       $user = Sentinel::findById($user->id);
       $reminder = Reminder::exists($user) ? : Reminder::create($user);
       $this->sendEmail($user, $reminder->code);

       return redirect()->back()->with(['success' => 'Reset code được gửi vào email của bạn']);
    }

    public function sendEMail($user, $code){
        Mail::send(
            'site.forgot-password',
            ['user' => $user, 'code' => $code],
            function($message) use ($user){
                $message->to($user->email);
                $message->subject("$user->name, reset your password");
            }
        );
    }

    use SendsPasswordResetEmails;
}
