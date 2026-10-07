<?php

namespace App\Filament\Admin\Resources\ExperienceSections;

use App\Filament\Admin\Resources\ExperienceSections\Pages\CreateExperienceSection;
use App\Filament\Admin\Resources\ExperienceSections\Pages\EditExperienceSection;
use App\Filament\Admin\Resources\ExperienceSections\Pages\ListExperienceSections;
use App\Filament\Admin\Resources\ExperienceSections\Schemas\ExperienceSectionForm;
use App\Filament\Admin\Resources\ExperienceSections\Tables\ExperienceSectionsTable;
use App\Models\ExperienceSection;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ExperienceSectionResource extends Resource
{
    protected static ?string $model = ExperienceSection::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ExperienceSectionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ExperienceSectionsTable::configure($table);
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
            'index' => ListExperienceSections::route('/'),
            'create' => CreateExperienceSection::route('/create'),
            'edit' => EditExperienceSection::route('/{record}/edit'),
        ];
    }
}
