<?php

namespace App\Filament\Admin\Resources\ShishaShowcaseSettings\Pages;

use App\Filament\Admin\Resources\ShishaShowcaseSettings\ShishaShowcaseSettingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListShishaShowcaseSettings extends ListRecords
{
    protected static string $resource =
        ShishaShowcaseSettingResource::class;


    protected function getHeaderActions(): array
    {
        return [

            CreateAction::make()
                ->label(
                    'Create Shisha Showcase'
                ),

        ];
    }
}