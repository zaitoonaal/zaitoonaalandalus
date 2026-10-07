<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Reservation Notification Email
    |--------------------------------------------------------------------------
    |
    | New bookings will be emailed here.
    |
    */

    'notification_email' => env(
        'RESERVATION_NOTIFICATION_EMAIL'
    ),


    /*
    |--------------------------------------------------------------------------
    | WhatsApp Number
    |--------------------------------------------------------------------------
    |
    | Numbers only, including country code.
    |
    */

    'whatsapp' => env(
        'RESERVATION_WHATSAPP',
        '97433858316'
    ),

];