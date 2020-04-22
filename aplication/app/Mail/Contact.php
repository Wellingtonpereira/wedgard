<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct( $data )
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->markdown('emails.contact')
                    ->from('contato@wedgard.com')
                    ->subject( 'Contato via site' )
                    ->with([
                        'name'      => $this->data['name'],
                        'email'     => $this->data['email'],
                        'message'   => $this->data['message']
                    ]);
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
