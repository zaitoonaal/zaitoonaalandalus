<?php

namespace App\Filament\Admin\Resources\AboutSettings;

use App\Filament\Admin\Resources\AboutSettings\Pages\CreateAboutSetting;
use App\Filament\Admin\Resources\AboutSettings\Pages\EditAboutSetting;
use App\Filament\Admin\Resources\AboutSettings\Pages\ListAboutSettings;
use App\Filament\Admin\Resources\AboutSettings\Schemas\AboutSettingForm;
use App\Filament\Admin\Resources\AboutSettings\Tables\AboutSettingsTable;
use App\Models\AboutSetting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AboutSettingResource extends Resource
{
    protected static ?string $model = AboutSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return AboutSettingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AboutSettingsTable::configure($table);
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
            'index' => ListAboutSettings::route('/'),
            'create' => CreateAboutSetting::route('/create'),
            'edit' => EditAboutSetting::route('/{record}/edit'),
        ];
    }
}
