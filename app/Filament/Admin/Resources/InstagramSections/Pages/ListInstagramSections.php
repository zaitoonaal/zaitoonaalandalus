<?php

namespace App\Filament\Admin\Resources\InstagramSections\Pages;

use App\Filament\Admin\Resources\InstagramSections\InstagramSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInstagramSections extends ListRecords
{
    protected static string $resource =
        InstagramSectionResource::class;


    protected function getHeaderActions(): array
    {
        return [

            CreateAction::make()
                ->label(
                    'Create Instagram Section'
                ),

        ];
    }
}