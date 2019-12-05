<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\SendMail;
use App\Booking;
use App\User;
use App\Doctor;
use App\Service;
use Illuminate\Support\Facades\Auth;

class MailSend extends Controller
{
    public function mailsend(){
        // $user = User::all();
        $booking = Booking::all();
        // $booking->fill($request->all());
        // $booking->save();
        // $details = [
        //     'title' => 'Đặt lịch khám thành công.',
        //     'body' => 'Đây là thông tin đặt lịch khám của bạn:',
        // ];

        \Mail::to(Auth::user()->email)->send(new SendMail($booking));
        return view('site.thanks');
    }
}
