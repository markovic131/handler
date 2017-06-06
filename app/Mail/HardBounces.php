<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class HardBounces extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $headers;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $headers)
    {
        $this->data = $request;
        $this->headers = $headers;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.hard');
            ->subject("Емаил адресата: <{$this->data['recipient']}> не постои!");
    }
}
