<?php

namespace App\Filament\Admin\Resources\Users\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class UsersTable
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
                | NAME
                |--------------------------------------------------------------------------
                |
                | Always visible.
                |
                */

                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable()
                    ->weight('medium')
                    ->wrap()
                    ->limit(26),


                /*
                |--------------------------------------------------------------------------
                | EMAIL
                |--------------------------------------------------------------------------
                |
                | Hidden on small mobile.
                | Visible from MD screens.
                |
                */

                TextColumn::make('email')
                    ->label('Email Address')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->wrap()
                    ->visibleFrom('md'),


                /*
                |--------------------------------------------------------------------------
                | USER TYPE
                |--------------------------------------------------------------------------
                |
                | Always visible.
                |
                */

                TextColumn::make('role')
                    ->label('User Type')
                    ->badge()

                    ->formatStateUsing(
                        fn (
                            ?string $state
                        ): string =>
                            match ($state) {

                                'admin' =>
                                    'Administrator',

                                'employee' =>
                                    'Employee',

                                default =>
                                    ucfirst(
                                        $state
                                        ?? 'Unknown'
                                    ),
                            }
                    )

                    ->color(
                        fn (
                            ?string $state
                        ): string =>
                            match ($state) {

                                'admin' =>
                                    'danger',

                                'employee' =>
                                    'info',

                                default =>
                                    'gray',
                            }
                    )

                    ->sortable(),


                /*
                |--------------------------------------------------------------------------
                | ACTIVE
                |--------------------------------------------------------------------------
                |
                | Always visible.
                |
                */

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->sortable(),


                /*
                |--------------------------------------------------------------------------
                | CREATED
                |--------------------------------------------------------------------------
                |
                | Desktop only.
                |
                */

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime(
                        'd M Y, h:i A'
                    )
                    ->sortable()
                    ->visibleFrom('lg')
                    ->toggleable(),


                /*
                |--------------------------------------------------------------------------
                | UPDATED
                |--------------------------------------------------------------------------
                |
                | Large desktop only.
                |
                */

                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime(
                        'd M Y, h:i A'
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

                SelectFilter::make('role')
                    ->label('User Type')
                    ->options([

                        'admin' =>
                            'Administrator',

                        'employee' =>
                            'Employee',

                    ]),


                TernaryFilter::make('is_active')
                    ->label('Account Status')
                    ->placeholder(
                        'All Users'
                    )
                    ->trueLabel(
                        'Active Users'
                    )
                    ->falseLabel(
                        'Inactive Users'
                    ),

            ])


            /*
            |--------------------------------------------------------------------------
            | RECORD ACTIONS
            |--------------------------------------------------------------------------
            |
            | Use a compact three-dot menu instead of a wide "Edit User"
            | button. This saves a lot of space on mobile.
            |
            */

            ->recordActions([

                ActionGroup::make([

                    EditAction::make()
                        ->label(
                            'Edit User'
                        )
                        ->icon(
                            'heroicon-o-pencil-square'
                        ),

                ])
                    ->color('gray'),

            ])


            /*
            |--------------------------------------------------------------------------
            | TOOLBAR ACTIONS
            |--------------------------------------------------------------------------
            */

            ->toolbarActions([
                //
            ])


            /*
            |--------------------------------------------------------------------------
            | TABLE SETTINGS
            |--------------------------------------------------------------------------
            */

            ->defaultSort(
                'created_at',
                'desc'
            )

            ->striped();
    }
}