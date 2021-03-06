<?php

namespace App\Mail;
use App\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    // public $details;
    public $booking;

    /**
     * Create a new message instance.
     *
     * @return void
     */



    public function __construct($booking)
    {
        // $this->details = $details;
        $this->booking = $booking;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Xác nhận đặt lịch khám thành công')->view('site.sendmail');
    }
}
