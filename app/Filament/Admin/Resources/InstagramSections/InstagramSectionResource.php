<?php

namespace App\Filament\Admin\Resources\InstagramSections;

use App\Filament\Admin\Resources\InstagramSections\Pages\CreateInstagramSection;
use App\Filament\Admin\Resources\InstagramSections\Pages\EditInstagramSection;
use App\Filament\Admin\Resources\InstagramSections\Pages\ListInstagramSections;
use App\Filament\Admin\Resources\InstagramSections\Schemas\InstagramSectionForm;
use App\Filament\Admin\Resources\InstagramSections\Tables\InstagramSectionsTable;
use App\Models\InstagramSection;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InstagramSectionResource extends Resource
{
    protected static ?string $model = InstagramSection::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return InstagramSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InstagramSectionsTable::configure($table);
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
            'index' => ListInstagramSections::route('/'),
            'create' => CreateInstagramSection::route('/create'),
            'edit' => EditInstagramSection::route('/{record}/edit'),
        ];
    }
}
