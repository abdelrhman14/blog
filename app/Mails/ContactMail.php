<?php

namespace App\Mails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * The UserSignUp Mail
 *
 * This email is sent to users when they register on the website
 */
class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $attributes;

    public function __construct($attributes)
    {
        $this->attributes = $attributes;
    }

    public function build()
    {
        return $this->subject('Contact Mail')->view('emails.contact-mail');
    }
}
