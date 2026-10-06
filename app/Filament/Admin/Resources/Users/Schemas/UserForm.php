<?php

namespace App\Filament\Admin\Resources\Users\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Full Name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email')
                    ->label('Email Address')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),

                Select::make('role')
                    ->label('User Type')
                    ->options([
                        'admin' => 'Administrator',
                        'employee' => 'Employee',
                    ])
                    ->default('employee')
                    ->required()
                    ->native(false),

                Toggle::make('is_active')
                    ->label('Account Active')
                    ->default(true),

                TextInput::make('password')
                    ->label('Password')
                    ->password()
                    ->revealable()
                    ->minLength(8)
                    ->maxLength(255)
                    ->autocomplete('new-password')
                    ->required(fn ($record): bool => $record === null)
                    ->dehydrated(
                        fn (?string $state): bool => filled($state)
                    )
                    ->helperText(
                        fn ($record): ?string =>
                            $record
                                ? 'Leave blank to keep the current password.'
                                : 'Enter a password for this user.'
                    ),
            ]);
    }
}