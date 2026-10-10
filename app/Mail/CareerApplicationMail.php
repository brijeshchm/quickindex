<?php

namespace App\Mail;

use App\Models\Contacts;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class CareerApplicationMail extends Mailable
{
    use Queueable;

    public function __construct(
        public Contacts $application,
        public array $resume
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Career Application: ' . $this->application->name,
            replyTo: [$this->application->email],
        );
    }

    public function content(): Content
    {
        return new Content(view: 'emails.career-application');
    }

    public function attachments(): array
    {
        return [
            Attachment::fromPath($this->resume['path'])
                ->as($this->resume['name'])
                ->withMime($this->resume['mime']),
        ];
    }
}