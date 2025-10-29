<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CareerApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $resume;

    public function __construct($data, $resume)
    {
        $this->data = $data;
        $this->resume = $resume;
    }

    public function build()
    {
        return $this->subject('New Career Application')
            ->view('emails.career_application')
            ->with(['data' => $this->data])
            ->attach($this->resume->getRealPath(), [
                'as' => $this->resume->getClientOriginalName(),
                'mime' => $this->resume->getMimeType(),
            ]);
    }
}
