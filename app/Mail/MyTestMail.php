<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MyTestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    
    public function __construct($details)
    {
        $this->details = $details;
    }

    
    public function build()
    {
        // dd($details);
        return $this->subject('Mail from MAWAIINFOTECH.com')->view('Admin.myTestMail');   

    }
}
