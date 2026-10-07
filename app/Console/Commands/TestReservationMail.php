<?php

namespace App\Console\Commands;

use App\Mail\ReservationSubmitted;
use App\Models\TableReservation;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Throwable;

class TestReservationMail extends Command
{
    protected $signature = 'zaitoona:test-mail
                            {--to=zaitoonaal4@gmail.com}';

    protected $description = 'Test SMTP and reservation email';

    public function handle(): int
    {
        $to = $this->option('to');

        $this->newLine();
        $this->info('Zaitoona Production Mail Test');
        $this->newLine();

        /*
        |--------------------------------------------------------------------------
        | SAFE CONFIGURATION CHECK
        |--------------------------------------------------------------------------
        */

        $this->line(
            'Mailer: '
            . (config('mail.default') ?: 'NULL')
        );

        $this->line(
            'SMTP Host: '
            . (config('mail.mailers.smtp.host') ?: 'NULL')
        );

        $this->line(
            'SMTP Port: '
            . (config('mail.mailers.smtp.port') ?: 'NULL')
        );

        $this->line(
            'SMTP Username: '
            . (config('mail.mailers.smtp.username') ?: 'NULL')
        );

        $this->line(
            'Password Length: '
            . strlen(
                (string) config(
                    'mail.mailers.smtp.password'
                )
            )
        );

        $this->line(
            'Reservation Email: '
            . (
                config(
                    'reservation.notification_email'
                )
                ?: 'NULL'
            )
        );


        /*
        |--------------------------------------------------------------------------
        | BASIC SMTP TEST
        |--------------------------------------------------------------------------
        */

        $this->newLine();

        $this->info(
            '1. Testing basic SMTP email...'
        );


        try {

            Mail::raw(
                'Hostinger production SMTP test from Zaitoona Al Andalaus.',
                function ($message) use ($to) {

                    $message
                        ->to($to)
                        ->subject(
                            'Zaitoona Hostinger SMTP Test'
                        );
                }
            );


            $this->info(
                'SUCCESS: Basic SMTP email sent.'
            );


        } catch (Throwable $exception) {

            $this->error(
                'FAILED: Basic SMTP email could not be sent.'
            );

            $this->newLine();

            $this->error(
                $exception->getMessage()
            );

            return self::FAILURE;
        }


        /*
        |--------------------------------------------------------------------------
        | RESERVATION TEMPLATE TEST
        |--------------------------------------------------------------------------
        */

        $this->newLine();

        $this->info(
            '2. Testing reservation template email...'
        );


        try {

            $reservation =
                TableReservation::query()
                    ->latest('id')
                    ->first();


            if (!$reservation) {

                $this->warn(
                    'No reservation found. Template test skipped.'
                );

                return self::SUCCESS;
            }


            $this->line(
                'Testing reservation #'
                . $reservation->id
            );


            Mail::to(
                $to
            )->send(
                new ReservationSubmitted(
                    $reservation
                )
            );


            $this->info(
                'SUCCESS: Reservation template email sent.'
            );


        } catch (Throwable $exception) {

            $this->error(
                'FAILED: Reservation template email could not be sent.'
            );

            $this->newLine();

            $this->error(
                $exception->getMessage()
            );

            return self::FAILURE;
        }


        $this->newLine();

        $this->info(
            'Both email tests passed successfully.'
        );

        return self::SUCCESS;
    }
}