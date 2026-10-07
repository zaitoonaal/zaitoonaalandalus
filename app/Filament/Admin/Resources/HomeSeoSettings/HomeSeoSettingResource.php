<?php

namespace App\Filament\Admin\Resources\HomeSeoSettings;

use App\Filament\Admin\Resources\HomeSeoSettings\Pages\CreateHomeSeoSetting;
use App\Filament\Admin\Resources\HomeSeoSettings\Pages\EditHomeSeoSetting;
use App\Filament\Admin\Resources\HomeSeoSettings\Pages\ListHomeSeoSettings;
use App\Filament\Admin\Resources\HomeSeoSettings\Schemas\HomeSeoSettingForm;
use App\Filament\Admin\Resources\HomeSeoSettings\Tables\HomeSeoSettingsTable;
use App\Models\HomeSeoSetting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HomeSeoSettingResource extends Resource
{
    protected static ?string $model = HomeSeoSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return HomeSeoSettingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomeSeoSettingsTable::configure($table);
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
            'index' => ListHomeSeoSettings::route('/'),
            'create' => CreateHomeSeoSetting::route('/create'),
            'edit' => EditHomeSeoSetting::route('/{record}/edit'),
        ];
    }
}
