<?php

namespace App\Filament\Admin\Resources\ExperienceSections\Pages;

use App\Filament\Admin\Resources\ExperienceSections\ExperienceSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListExperienceSections extends ListRecords
{
    protected static string $resource =
        ExperienceSectionResource::class;


    protected function getHeaderActions(): array
    {
        return [

            CreateAction::make()
                ->label(
                    'Create Experience Block'
                ),

        ];
    }
}