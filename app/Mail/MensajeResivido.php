<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MensajeResivido extends Mailable
{
    use Queueable, SerializesModels;
    public $msj;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($m)
    {
        $this->msj=$m;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.Mensaje_resivido');
    }
}
