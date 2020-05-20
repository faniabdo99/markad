<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactNoticeMail extends Mailable
{
    use Queueable, SerializesModels;
    public $EmailData;
    public function __construct($EmailData){
        $this->EmailData = $EmailData;
    }
    public function build()
    {
        return $this->view('mail.ContactNoticeMail')
                    ->from('no-reply@markadracing.com' , 'Markad Racing - سباق الهجن')
                    ->subject("New Message From MarkadRacing");
    }
}
