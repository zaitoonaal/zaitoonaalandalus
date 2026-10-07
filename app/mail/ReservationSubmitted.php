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

    public TableReservation $reservation;

    public function __construct(
        TableReservation $reservation
    ) {
        $this->reservation = $reservation;
    }

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
    

    public function content(): Content
    {
        return new Content(
            view:
                'emails.reservations.submitted'
        );
    }

    public function attachments(): array
    {
        return [];
    }
}