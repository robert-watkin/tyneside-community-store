<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Log;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $body;

    public function __construct($data)
    {
        Log::debug("Entered contact form mail constructor");
        $this->name = $data['name'];
        $this->body = $data['body'];
        Log::debug("name: " . $this->name);
        Log::debug("body: " . $this->body);
        Log::debug("Leaving contact form mail constructor");
    }

    /**
     * Get the body envelope.
     */
    public function envelope(): Envelope
    {
        Log::debug("Entered contact form mail envelope");
        return new Envelope(
            subject: 'Contact Form Request From ' . $this->name,
        );
    }

    public function build()
    {
        Log::debug("Entered contact form mail build");
        return $this->markdown('emails.contact-message');
    }
}
