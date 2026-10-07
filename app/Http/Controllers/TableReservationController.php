<?php

namespace App\Http\Controllers;

use App\Mail\ReservationSubmitted;
use App\Models\InstagramSection;
use App\Models\TableReservation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Throwable;

class TableReservationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | RESERVATION PAGE
    |--------------------------------------------------------------------------
    |
    | Loads the reservation page and also provides the dynamic Instagram
    | Grid data because this page contains @include('Home.instagramgrid').
    |
    */

    public function create(): View
    {
        $instagramSections =
            InstagramSection::query()
                ->where(
                    'is_active',
                    true
                )
                ->orderBy(
                    'sort_order',
                    'asc'
                )
                ->orderBy(
                    'id',
                    'asc'
                )
                ->get();


        return view(
            'Home.reserveatable',
            compact(
                'instagramSections'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | STORE RESERVATION
    |--------------------------------------------------------------------------
    */

    public function store(
        Request $request
    ): JsonResponse {
        /*
        |--------------------------------------------------------------------------
        | VALIDATION
        |--------------------------------------------------------------------------
        */

        $validated =
            $request->validate([

                'name' => [
                    'required',
                    'string',
                    'max:120',
                ],

                'phone' => [
                    'required',
                    'string',
                    'max:50',
                ],

                'reservation_date' => [
                    'required',
                    'date',
                    'after_or_equal:today',
                ],

                'reservation_time' => [
                    'required',
                    'date_format:H:i',
                ],

                'guests' => [
                    'required',
                    'in:2,3,4,5,6,7,8,9+',
                ],

                'seating' => [
                    'required',
                    'in:no-preference,dining-area,shisha-lounge,outdoor-terrace',
                ],

                'message' => [
                    'nullable',
                    'string',
                    'max:1500',
                ],

                'language' => [
                    'required',
                    'in:en,ar',
                ],

            ]);


        /*
        |--------------------------------------------------------------------------
        | SAVE RESERVATION
        |--------------------------------------------------------------------------
        */

        $reservation =
            TableReservation::create([

                'name' =>
                    $validated['name'],

                'phone' =>
                    $validated['phone'],

                'reservation_date' =>
                    $validated['reservation_date'],

                'reservation_time' =>
                    $validated['reservation_time'],

                'guests' =>
                    $validated['guests'],

                'seating' =>
                    $validated['seating'],

                'message' =>
                    $validated['message']
                    ?? null,

                'language' =>
                    $validated['language'],

                'status' =>
                    'pending',

                'ip_address' =>
                    $request->ip(),

                'user_agent' =>
                    $request->userAgent(),

            ]);


        /*
        |--------------------------------------------------------------------------
        | EMAIL
        |--------------------------------------------------------------------------
        */

        $mailSent =
            false;

        $mailError =
            null;


        $notificationEmail =
            config(
                'reservation.notification_email'
            )
            ?: 'zaitoonaal4@gmail.com';


        try {

            Mail::to(
                $notificationEmail
            )->send(
                new ReservationSubmitted(
                    $reservation
                )
            );


            $mailSent =
                true;


            /*
            |--------------------------------------------------------------------------
            | SAVE EMAIL SENT TIME
            |--------------------------------------------------------------------------
            */

            try {

                TableReservation::query()
                    ->whereKey(
                        $reservation->id
                    )
                    ->update([

                        'email_sent_at' =>
                            now(),

                    ]);


            } catch (
                Throwable $databaseException
            ) {

                /*
                |--------------------------------------------------------------------------
                | The email was already sent successfully.
                | A timestamp failure must not mark SMTP as failed.
                |--------------------------------------------------------------------------
                */

                Log::warning(
                    'Reservation email sent but email_sent_at could not be saved.',
                    [

                        'reservation_id' =>
                            $reservation->id,

                        'error' =>
                            $databaseException
                                ->getMessage(),

                    ]
                );
            }


            Log::info(
                'Reservation template email sent successfully.',
                [

                    'reservation_id' =>
                        $reservation->id,

                    'email' =>
                        $notificationEmail,

                ]
            );


        } catch (
            Throwable $exception
        ) {

            /*
            |--------------------------------------------------------------------------
            | EMAIL FAILED
            |--------------------------------------------------------------------------
            |
            | Reservation remains saved even if notification email fails.
            |
            */

            $mailSent =
                false;

            $mailError =
                $exception->getMessage();


            Log::error(
                'Reservation template email failed.',
                [

                    'reservation_id' =>
                        $reservation->id,

                    'email' =>
                        $notificationEmail,

                    'error' =>
                        $exception->getMessage(),

                ]
            );
        }


        /*
        |--------------------------------------------------------------------------
        | SEATING LABELS
        |--------------------------------------------------------------------------
        */

        $seatingEnglish =
            match (
                $reservation->seating
            ) {

                'dining-area' =>
                    'Dining area',

                'shisha-lounge' =>
                    'Shisha lounge',

                'outdoor-terrace' =>
                    'Outdoor / terrace',

                default =>
                    'No preference',

            };


        $seatingArabic =
            match (
                $reservation->seating
            ) {

                'dining-area' =>
                    'منطقة الطعام',

                'shisha-lounge' =>
                    'لاونج الشيشة',

                'outdoor-terrace' =>
                    'جلسة خارجية / تراس',

                default =>
                    'بدون تفضيل',

            };


        /*
        |--------------------------------------------------------------------------
        | WHATSAPP NUMBER
        |--------------------------------------------------------------------------
        */

        $whatsappNumber =
            preg_replace(
                '/\D+/',
                '',
                (string) (
                    config(
                        'reservation.whatsapp'
                    )
                    ?: '97433858316'
                )
            );


        if (
            blank(
                $whatsappNumber
            )
        ) {

            $whatsappNumber =
                '97433858316';

        }


        /*
        |--------------------------------------------------------------------------
        | WHATSAPP MESSAGE
        |--------------------------------------------------------------------------
        */

        if (
            $reservation->language
            === 'ar'
        ) {

            $whatsappLines = [

                'مرحباً زيتونة الأندلس، أود طلب حجز طاولة:',

                '',

                'رقم الحجز: #'
                    . $reservation->id,

                'الاسم: '
                    . $reservation->name,

                'الهاتف: '
                    . $reservation->phone,

                'التاريخ: '
                    . $validated[
                        'reservation_date'
                    ],

                'الوقت: '
                    . $validated[
                        'reservation_time'
                    ],

                'عدد الضيوف: '
                    . $reservation->guests,

                'الجلسة: '
                    . $seatingArabic,

                'الملاحظات: '
                    . (
                        $reservation->message
                        ?: '-'
                    ),

            ];


        } else {

            $whatsappLines = [

                'Hello Zaitoona Al Andalus, I would like to request a table reservation:',

                '',

                'Reservation ID: #'
                    . $reservation->id,

                'Name: '
                    . $reservation->name,

                'Phone: '
                    . $reservation->phone,

                'Date: '
                    . $validated[
                        'reservation_date'
                    ],

                'Time: '
                    . $validated[
                        'reservation_time'
                    ],

                'Guests: '
                    . $reservation->guests,

                'Seating: '
                    . $seatingEnglish,

                'Message: '
                    . (
                        $reservation->message
                        ?: '-'
                    ),

            ];
        }


        /*
        |--------------------------------------------------------------------------
        | WHATSAPP URL
        |--------------------------------------------------------------------------
        */

        $whatsappUrl =
            'https://wa.me/'
            . $whatsappNumber
            . '?text='
            . rawurlencode(
                implode(
                    "\n",
                    $whatsappLines
                )
            );


        /*
        |--------------------------------------------------------------------------
        | RESPONSE
        |--------------------------------------------------------------------------
        */

        return response()->json(
            [

                'success' =>
                    true,

                'reservation_id' =>
                    $reservation->id,

                'mail_sent' =>
                    $mailSent,

                'whatsapp_url' =>
                    $whatsappUrl,

                'message' =>
                    'Reservation saved successfully.',

                'mail_error' =>
                    app()->isLocal()
                    && config(
                        'app.debug'
                    )
                        ? $mailError
                        : null,

            ],
            201
        );
    }
}