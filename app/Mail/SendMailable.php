<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;

    private $data;


    public $subject = "Mensaje de cliente";

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build(): SendMailable
    {
        return $this->view('email.sendEmail')->with(['data' => $this->data]);
    }

}
