<?php

namespace App\Mail;

use App\Models\Appointment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AppointmentRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Appointment $appointment)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New assessment request — '.$this->appointment->service,
            replyTo: [
                new Address($this->appointment->email, $this->appointment->name),
            ],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.appointment-request',
        );
    }
}
