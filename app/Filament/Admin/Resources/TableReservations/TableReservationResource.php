<?php

namespace App\Filament\Admin\Resources\TableReservations;

use App\Filament\Admin\Resources\TableReservations\Pages\CreateTableReservation;
use App\Filament\Admin\Resources\TableReservations\Pages\EditTableReservation;
use App\Filament\Admin\Resources\TableReservations\Pages\ListTableReservations;
use App\Filament\Admin\Resources\TableReservations\Schemas\TableReservationForm;
use App\Filament\Admin\Resources\TableReservations\Tables\TableReservationsTable;
use App\Models\TableReservation;
use App\Models\User;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TableReservationResource extends Resource
{
    /*
    |--------------------------------------------------------------------------
    | Model
    |--------------------------------------------------------------------------
    */

    protected static ?string $model =
        TableReservation::class;


    /*
    |--------------------------------------------------------------------------
    | Navigation
    |--------------------------------------------------------------------------
    |
    | Booking / reservation calendar icon.
    |
    */

    protected static string|BackedEnum|null $navigationIcon =
        Heroicon::OutlinedCalendarDays;


    protected static ?string $navigationLabel =
        'Table Reservations';


    protected static ?string $modelLabel =
        'Table Reservation';


    protected static ?string $pluralModelLabel =
        'Table Reservations';


    /*
    |--------------------------------------------------------------------------
    | Access Control
    |--------------------------------------------------------------------------
    |
    | Only:
    |
    | - Active Admin
    | - Active Employee
    |
    | can access Table Reservations.
    |
    */

    private static function canAccessReservations(): bool
    {
        $user =
            auth()->user();


        if (
            ! $user instanceof User
        ) {
            return false;
        }


        if (
            ! (bool) $user->is_active
        ) {
            return false;
        }


        return in_array(
            $user->role,
            [
                'admin',
                'employee',
            ],
            true
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Navigation Visibility
    |--------------------------------------------------------------------------
    |
    | Hides Table Reservations from every other role.
    |
    */

    public static function shouldRegisterNavigation(): bool
    {
        return static::canAccessReservations();
    }


    /*
    |--------------------------------------------------------------------------
    | List Page Access
    |--------------------------------------------------------------------------
    |
    | Prevents unauthorized users from manually visiting:
    |
    | /admin/table-reservations
    |
    */

    public static function canViewAny(): bool
    {
        return static::canAccessReservations();
    }


    /*
    |--------------------------------------------------------------------------
    | Form
    |--------------------------------------------------------------------------
    */

    public static function form(
        Schema $schema
    ): Schema {
        return TableReservationForm::configure(
            $schema
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Table
    |--------------------------------------------------------------------------
    */

    public static function table(
        Table $table
    ): Table {
        return TableReservationsTable::configure(
            $table
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Relations
    |--------------------------------------------------------------------------
    */

    public static function getRelations(): array
    {
        return [
            //
        ];
    }


    /*
    |--------------------------------------------------------------------------
    | Pages
    |--------------------------------------------------------------------------
    */

    public static function getPages(): array
    {
        return [

            'index' =>
                ListTableReservations::route(
                    '/'
                ),

            'create' =>
                CreateTableReservation::route(
                    '/create'
                ),

            'edit' =>
                EditTableReservation::route(
                    '/{record}/edit'
                ),

        ];
    }
}