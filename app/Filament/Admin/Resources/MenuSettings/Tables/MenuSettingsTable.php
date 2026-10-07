<?php

namespace App\Filament\Admin\Resources\MenuSettings\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MenuSettingsTable
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
                | MENU PAGE TITLE
                |--------------------------------------------------------------------------
                |
                | Always visible, including mobile.
                |
                */

                TextColumn::make('title_en')
                    ->label('Menu Page')
                    ->searchable()
                    ->sortable()
                    ->wrap()
                    ->limit(35)
                    ->tooltip(
                        fn (
                            TextColumn $column
                        ): ?string =>
                            $column->getState()
                    ),


                /*
                |--------------------------------------------------------------------------
                | ACTIVE STATUS
                |--------------------------------------------------------------------------
                |
                | Always visible.
                |
                */

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),


                /*
                |--------------------------------------------------------------------------
                | LAST UPDATED
                |--------------------------------------------------------------------------
                |
                | Hidden on mobile.
                | Visible from medium screens upward.
                |
                */

                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime(
                        'd M Y h:i A'
                    )
                    ->sortable()
                    ->visibleFrom('md'),

            ])


            /*
            |--------------------------------------------------------------------------
            | DEFAULT SORT
            |--------------------------------------------------------------------------
            */

            ->defaultSort(
                'updated_at',
                'desc'
            )


            /*
            |--------------------------------------------------------------------------
            | RECORD ACTIONS
            |--------------------------------------------------------------------------
            |
            | Compact action menu is much better for mobile.
            |
            */

            ->recordActions([

                ActionGroup::make([

                    /*
                    |--------------------------------------------------------------------------
                    | EDIT
                    |--------------------------------------------------------------------------
                    */

                    EditAction::make()
                        ->label(
                            'Edit Menu'
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
                            'Delete Menu'
                        )
                        ->icon(
                            'heroicon-o-trash'
                        )
                        ->color(
                            'danger'
                        )
                        ->requiresConfirmation(),

                ])
                    ->color(
                        'gray'
                    ),

            ]);
    }
}