<?php

namespace App\Filament\Admin\Resources\ContactPageSettings;

use App\Filament\Admin\Resources\ContactPageSettings\Pages\CreateContactPageSetting;
use App\Filament\Admin\Resources\ContactPageSettings\Pages\EditContactPageSetting;
use App\Filament\Admin\Resources\ContactPageSettings\Pages\ListContactPageSettings;
use App\Filament\Admin\Resources\ContactPageSettings\Schemas\ContactPageSettingForm;
use App\Filament\Admin\Resources\ContactPageSettings\Tables\ContactPageSettingsTable;
use App\Models\ContactPageSetting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ContactPageSettingResource extends Resource
{
    protected static ?string $model = ContactPageSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ContactPageSettingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactPageSettingsTable::configure($table);
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
            'index' => ListContactPageSettings::route('/'),
            'create' => CreateContactPageSetting::route('/create'),
            'edit' => EditContactPageSetting::route('/{record}/edit'),
        ];
    }
}
