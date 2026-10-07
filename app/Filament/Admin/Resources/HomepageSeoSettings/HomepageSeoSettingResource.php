<?php

namespace App\Filament\Admin\Resources\HomepageSeoSettings;

use App\Filament\Admin\Resources\HomepageSeoSettings\Pages\CreateHomepageSeoSetting;
use App\Filament\Admin\Resources\HomepageSeoSettings\Pages\EditHomepageSeoSetting;
use App\Filament\Admin\Resources\HomepageSeoSettings\Pages\ListHomepageSeoSettings;
use App\Filament\Admin\Resources\HomepageSeoSettings\Schemas\HomepageSeoSettingForm;
use App\Filament\Admin\Resources\HomepageSeoSettings\Tables\HomepageSeoSettingsTable;
use App\Models\HomepageSeoSetting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HomepageSeoSettingResource extends Resource
{
    protected static ?string $model = HomepageSeoSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return HomepageSeoSettingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomepageSeoSettingsTable::configure($table);
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
            'index' => ListHomepageSeoSettings::route('/'),
            'create' => CreateHomepageSeoSetting::route('/create'),
            'edit' => EditHomepageSeoSetting::route('/{record}/edit'),
        ];
    }
}
