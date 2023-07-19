<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;
    public $detailMessage;
    /**
     * Create a new message instance.
     */
    public function __construct(Array $detailMessage)
    {
        $this->detailMessage = $detailMessage;
    }

   public function build(){
    return $this->subject('Message d\'un utilisateur depuis le site YouthWay')->view('contactMail');
   }
}
