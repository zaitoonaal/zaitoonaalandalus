<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TableReservation extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'reservation_date',
        'reservation_time',
        'guests',
        'seating',
        'message',
        'language',
        'status',
        'email_sent_at',
        'ip_address',
        'user_agent',
    ];

    protected function casts(): array
    {
        return [
            'reservation_date' => 'date',
            'email_sent_at' => 'datetime',
        ];
    }
}