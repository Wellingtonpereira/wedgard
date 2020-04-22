<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ComercialEsporte extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.comercial.esporte.index')->subject( 'Faça a sua torcida ainda mais apaixonada pelo seu clube!' );
    }

    public function render()
    {
        $this->build();

        if ($this->markdown) {
            return $this->buildMarkdownView()['html'];
        }

        return view($this->buildView(), $this->buildViewData());
    }
}
