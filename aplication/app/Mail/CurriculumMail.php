<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CurriculumMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $title;
    public function __construct( $title )
    {
        $this->title = $title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.curriculum.index')->subject( $this->title);
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
