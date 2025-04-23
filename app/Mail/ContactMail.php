<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $messageContent;

    public function __construct($name, $email, $messageContent)
    {
        $this->name = $name;
        $this->email = $email;
        $this->messageContent = $messageContent;
    }

    public function build()
    {
        return $this->from(config('mail.from.address'), config('mail.from.name'))
            ->subject('New Message from Contact Form')
            ->view('emails.contact');
    }
}
