<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OfferteAanvraag extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;
    protected array $bestanden;

    public function __construct(array $data, array $bestanden = [])
    {
        $this->data = $data;
        $this->bestanden = $bestanden;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nieuwe offerte-aanvraag - ' . $this->data['naam'],
            replyTo: [$this->data['email']],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.offerte',
            with: [
                'bestandenAantal' => count($this->bestanden),
            ],
        );
    }

    public function attachments(): array
    {
        $attachments = [];
        foreach ($this->bestanden as $bestand) {
            if ($bestand && $bestand->isValid()) {
                $attachments[] = \Illuminate\Mail\Mailables\Attachment::fromPath($bestand->getRealPath())
                    ->as($bestand->getClientOriginalName())
                    ->withMime($bestand->getMimeType());
            }
        }
        return $attachments;
    }
}
