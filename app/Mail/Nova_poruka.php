<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Nova_poruka extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $subject;
    public $mail;
    public $type;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name , $subject , $mail, $type)
    {
       $this->name = $name;
       $this->subject = $subject;
       $this->mail = $mail;
       $this->type = $type;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.nova_poruka');
    }
}
