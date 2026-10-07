<?php

namespace App\Filament\Admin\Resources\HomeSeoSettings\Pages;

use App\Filament\Admin\Resources\HomeSeoSettings\HomeSeoSettingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHomeSeoSettings extends ListRecords
{
    protected static string $resource =
        HomeSeoSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label(
                    'Create Homepage SEO'
                ),
        ];
    }
}