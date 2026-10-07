<?php

namespace App\Mail;

use App\Models\TableReservation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservationSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Reservation data available inside the email Blade template.
     */
    public TableReservation $reservation;

    /**
     * Create a new message instance.
     */
    public function __construct(
        TableReservation $reservation
    ) {
        $this->reservation = $reservation;
    }

    /**
     * Define the email subject.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject:
                'New Table Reservation #'
                . $this->reservation->id
                . ' - '
                . $this->reservation->name
        );
    }

    /**
     * Define the email template.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.reservations.submitted'
        );
    }

    /**
     * Define email attachments.
     */
    public function attachments(): array
    {
        return [];
    }
}