<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewsLetterEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $EmailData;
    public function __construct($EmailData){
        $this->EmailData = $EmailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.NewsLetterEmail')
                    ->from('no-reply@markadracing.com' , 'Markad Racing - سباق الهجن')
                    ->subject('مقال جديد - لعبة سباق الهجن');
    }
}
