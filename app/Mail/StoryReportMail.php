<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;
use App\Models\Story;

class StoryReportMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $reason;
    public $story;

    public function __construct(array $reportData, ?Story $story = null)
    {
        $this->name = $reportData['name'] ?? 'Anonimo';
        $this->email = $reportData['email'] ?? 'noreply@example.com';
        $this->reason = $reportData['reason'];
        $this->story = $story;
    }

    public function envelope(): Envelope
    {
        $subject = 'Nuova Segnalazione Storia';
        if ($this->story) {
            $subject .= ': ' . ($this->story->title ?? 'Senza titolo');
        }

        return new Envelope(
            subject: $subject,
            replyTo: [
                new Address($this->email, $this->name)
            ]
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.story-reportS',
            with: [
                'name' => $this->name,
                'email' => $this->email,
                'reason' => $this->reason,
                'story' => $this->story,
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
