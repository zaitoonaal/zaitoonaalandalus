<?php

namespace App\Filament\Admin\Resources\TableReservations\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TableReservationForm
{
    public static function configure(
        Schema $schema
    ): Schema {
        return $schema
            ->components([

                Section::make(
                    'Reservation Details'
                )
                    ->description(
                        'Create or edit customer reservation details.'
                    )
                    ->columns(2)
                    ->schema([

                        TextInput::make('name')
                            ->label('Customer Name')
                            ->required()
                            ->maxLength(120),

                        TextInput::make('phone')
                            ->label('Phone Number')
                            ->tel()
                            ->required()
                            ->maxLength(50),

                        DatePicker::make(
                            'reservation_date'
                        )
                            ->label('Reservation Date')
                            ->required(),

                        TimePicker::make(
                            'reservation_time'
                        )
                            ->label('Reservation Time')
                            ->seconds(false)
                            ->required(),

                        Select::make('guests')
                            ->label('Guests')
                            ->options([
                                '2' => '2 guests',
                                '3' => '3 guests',
                                '4' => '4 guests',
                                '5' => '5 guests',
                                '6' => '6 guests',
                                '7' => '7 guests',
                                '8' => '8 guests',
                                '9+' => '9+ guests',
                            ])
                            ->required(),

                        Select::make('seating')
                            ->label(
                                'Seating Preference'
                            )
                            ->options([
                                'no-preference' =>
                                    'No preference',

                                'dining-area' =>
                                    'Dining area',

                                'shisha-lounge' =>
                                    'Shisha lounge',

                                'outdoor-terrace' =>
                                    'Outdoor / terrace',
                            ])
                            ->required(),

                        Select::make('status')
                            ->options([
                                'pending' =>
                                    'Pending',

                                'confirmed' =>
                                    'Confirmed',

                                'completed' =>
                                    'Completed',

                                'cancelled' =>
                                    'Cancelled',
                            ])
                            ->default('pending')
                            ->required(),

                        Select::make('language')
                            ->label(
                                'Customer Language'
                            )
                            ->options([
                                'en' =>
                                    'English',

                                'ar' =>
                                    'Arabic',
                            ])
                            ->default('en')
                            ->required(),

                        Textarea::make('message')
                            ->label(
                                'Customer Message'
                            )
                            ->rows(5)
                            ->maxLength(1500)
                            ->columnSpanFull(),

                    ]),

            ]);
    }
}