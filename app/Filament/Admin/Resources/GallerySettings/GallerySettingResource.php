<?php

namespace App\Filament\Admin\Resources\GallerySettings;

use App\Filament\Admin\Resources\GallerySettings\Pages\CreateGallerySetting;
use App\Filament\Admin\Resources\GallerySettings\Pages\EditGallerySetting;
use App\Filament\Admin\Resources\GallerySettings\Pages\ListGallerySettings;
use App\Filament\Admin\Resources\GallerySettings\Schemas\GallerySettingForm;
use App\Filament\Admin\Resources\GallerySettings\Tables\GallerySettingsTable;
use App\Models\GallerySetting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GallerySettingResource extends Resource
{
    protected static ?string $model = GallerySetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return GallerySettingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GallerySettingsTable::configure($table);
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
            'index' => ListGallerySettings::route('/'),
            'create' => CreateGallerySetting::route('/create'),
            'edit' => EditGallerySetting::route('/{record}/edit'),
        ];
    }
}
