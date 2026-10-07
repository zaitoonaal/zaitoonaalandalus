<?php

namespace App\Filament\Admin\Resources\TableReservations\Tables;

use App\Models\TableReservation;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class TableReservationsTable
{
    public static function configure(
        Table $table
    ): Table {
        return $table

            /*
            |--------------------------------------------------------------------------
            | COLUMNS
            |--------------------------------------------------------------------------
            */

            ->columns([

                /*
                |--------------------------------------------------------------------------
                | ID
                |--------------------------------------------------------------------------
                |
                | Hidden on very small mobile.
                | Visible from SM and above.
                |
                */

                TextColumn::make('id')
                    ->label('#')
                    ->sortable()
                    ->visibleFrom('sm'),


                /*
                |--------------------------------------------------------------------------
                | CUSTOMER
                |--------------------------------------------------------------------------
                |
                | Always visible.
                |
                */

                TextColumn::make('name')
                    ->label('Customer')
                    ->searchable()
                    ->sortable()
                    ->wrap()
                    ->limit(30),


                /*
                |--------------------------------------------------------------------------
                | PHONE
                |--------------------------------------------------------------------------
                |
                | Hidden on mobile/tablet.
                | Visible on larger screens.
                |
                */

                TextColumn::make('phone')
                    ->label('Phone')
                    ->searchable()
                    ->visibleFrom('lg'),


                /*
                |--------------------------------------------------------------------------
                | DATE
                |--------------------------------------------------------------------------
                |
                | Hidden on mobile.
                | Visible from medium screens.
                |
                */

                TextColumn::make(
                    'reservation_date'
                )
                    ->label('Date')
                    ->date('d M Y')
                    ->sortable()
                    ->visibleFrom('md'),


                /*
                |--------------------------------------------------------------------------
                | TIME
                |--------------------------------------------------------------------------
                */

                TextColumn::make(
                    'reservation_time'
                )
                    ->label('Time')
                    ->time('h:i A')
                    ->sortable()
                    ->visibleFrom('lg'),


                /*
                |--------------------------------------------------------------------------
                | GUESTS
                |--------------------------------------------------------------------------
                */

                TextColumn::make('guests')
                    ->label('Guests')
                    ->badge()
                    ->visibleFrom('md'),


                /*
                |--------------------------------------------------------------------------
                | SEATING
                |--------------------------------------------------------------------------
                */

                TextColumn::make('seating')
                    ->label('Seating')

                    ->formatStateUsing(
                        fn (
                            ?string $state
                        ): string =>
                            match ($state) {

                                'dining-area' =>
                                    'Dining area',

                                'shisha-lounge' =>
                                    'Shisha lounge',

                                'outdoor-terrace' =>
                                    'Outdoor / terrace',

                                default =>
                                    'No preference',
                            }
                    )

                    ->badge()

                    /*
                    |--------------------------------------------------------------------------
                    | Only show on large desktop
                    |--------------------------------------------------------------------------
                    */

                    ->visibleFrom('xl'),


                /*
                |--------------------------------------------------------------------------
                | STATUS
                |--------------------------------------------------------------------------
                |
                | Always visible on desktop and mobile.
                |
                */

                TextColumn::make('status')
                    ->label('Status')

                    ->badge()

                    ->formatStateUsing(
                        fn (
                            ?string $state
                        ): string =>
                            ucfirst(
                                $state ?: 'pending'
                            )
                    )

                    ->color(
                        fn (
                            ?string $state
                        ): string =>
                            match ($state) {

                                'confirmed' =>
                                    'success',

                                'completed' =>
                                    'info',

                                'cancelled' =>
                                    'danger',

                                default =>
                                    'warning',
                            }
                    ),


                /*
                |--------------------------------------------------------------------------
                | EMAIL STATUS
                |--------------------------------------------------------------------------
                */

                TextColumn::make(
                    'email_sent_at'
                )
                    ->label('Email')

                    ->formatStateUsing(
                        fn ($state): string =>
                            filled($state)
                                ? 'Sent'
                                : 'Not sent'
                    )

                    ->badge()

                    ->color(
                        fn ($state): string =>
                            filled($state)
                                ? 'success'
                                : 'warning'
                    )

                    /*
                    |--------------------------------------------------------------------------
                    | Desktop only
                    |--------------------------------------------------------------------------
                    */

                    ->visibleFrom('xl'),


                /*
                |--------------------------------------------------------------------------
                | SUBMITTED
                |--------------------------------------------------------------------------
                */

                TextColumn::make('created_at')
                    ->label('Submitted')

                    ->dateTime(
                        'd M Y h:i A'
                    )

                    ->sortable()

                    ->visibleFrom('xl')

                    ->toggleable(
                        isToggledHiddenByDefault:
                            true
                    ),

            ])


            /*
            |--------------------------------------------------------------------------
            | FILTERS
            |--------------------------------------------------------------------------
            */

            ->filters([

                SelectFilter::make('status')
                    ->options([

                        'pending' =>
                            'Pending',

                        'confirmed' =>
                            'Confirmed',

                        'completed' =>
                            'Completed',

                        'cancelled' =>
                            'Cancelled',

                    ]),


                SelectFilter::make('seating')
                    ->options([

                        'no-preference' =>
                            'No preference',

                        'dining-area' =>
                            'Dining area',

                        'shisha-lounge' =>
                            'Shisha lounge',

                        'outdoor-terrace' =>
                            'Outdoor / terrace',

                    ]),

            ])


            /*
            |--------------------------------------------------------------------------
            | DEFAULT SORT
            |--------------------------------------------------------------------------
            */

            ->defaultSort(
                'created_at',
                'desc'
            )


            /*
            |--------------------------------------------------------------------------
            | RECORD ACTIONS
            |--------------------------------------------------------------------------
            |
            | Instead of:
            |
            | View   Edit   Delete
            |
            | We use one small action menu:
            |
            | ⋮
            |
            | This keeps the table narrow and works much better on mobile.
            |
            */

            ->recordActions([

                ActionGroup::make([

                    /*
                    |--------------------------------------------------------------------------
                    | VIEW DETAILS
                    |--------------------------------------------------------------------------
                    */

                    Action::make(
                        'viewDetails'
                    )
                        ->label(
                            'View Details'
                        )

                        ->icon(
                            'heroicon-o-eye'
                        )

                        ->color(
                            'info'
                        )

                        ->modalHeading(
                            fn (
                                TableReservation $record
                            ): string =>
                                'Reservation #'
                                . $record->id
                        )

                        ->modalDescription(
                            fn (
                                TableReservation $record
                            ): string =>
                                'Reservation details for '
                                . $record->name
                        )

                        /*
                        |--------------------------------------------------------------------------
                        | COMPACT MODAL
                        |--------------------------------------------------------------------------
                        */

                        ->modalWidth(
                            '3xl'
                        )

                        ->modalContent(
                            fn (
                                TableReservation $record
                            ) =>
                                view(
                                    'filament.admin.table-reservations.view-details',
                                    [
                                        'record' =>
                                            $record,
                                    ]
                                )
                        )

                        /*
                        |--------------------------------------------------------------------------
                        | READ-ONLY MODAL
                        |--------------------------------------------------------------------------
                        */

                        ->modalSubmitAction(
                            false
                        )

                        ->modalCancelActionLabel(
                            'Close'
                        ),


                    /*
                    |--------------------------------------------------------------------------
                    | EDIT
                    |--------------------------------------------------------------------------
                    */

                    EditAction::make()
                        ->label(
                            'Edit Reservation'
                        )

                        ->icon(
                            'heroicon-o-pencil-square'
                        )

                        ->color(
                            'warning'
                        ),


                    /*
                    |--------------------------------------------------------------------------
                    | DELETE
                    |--------------------------------------------------------------------------
                    */

                    DeleteAction::make()
                        ->label(
                            'Delete Reservation'
                        )

                        ->icon(
                            'heroicon-o-trash'
                        )

                        ->color(
                            'danger'
                        )

                        ->requiresConfirmation(),

                ])

                    /*
                    |--------------------------------------------------------------------------
                    | SMALL ACTION MENU
                    |--------------------------------------------------------------------------
                    */

                    ->color(
                        'gray'
                    ),

            ]);
    }
}