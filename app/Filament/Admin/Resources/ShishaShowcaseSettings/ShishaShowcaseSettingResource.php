<?php

namespace App\Filament\Admin\Resources\ShishaShowcaseSettings;

use App\Filament\Admin\Resources\ShishaShowcaseSettings\Pages\CreateShishaShowcaseSetting;
use App\Filament\Admin\Resources\ShishaShowcaseSettings\Pages\EditShishaShowcaseSetting;
use App\Filament\Admin\Resources\ShishaShowcaseSettings\Pages\ListShishaShowcaseSettings;
use App\Filament\Admin\Resources\ShishaShowcaseSettings\Schemas\ShishaShowcaseSettingForm;
use App\Filament\Admin\Resources\ShishaShowcaseSettings\Tables\ShishaShowcaseSettingsTable;
use App\Models\ShishaShowcaseSetting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ShishaShowcaseSettingResource extends Resource
{
    protected static ?string $model = ShishaShowcaseSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ShishaShowcaseSettingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ShishaShowcaseSettingsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListShishaShowcaseSettings::route('/'),
            'create' => CreateShishaShowcaseSetting::route('/create'),
            'edit' => EditShishaShowcaseSetting::route('/{record}/edit'),
        ];
    }
}
