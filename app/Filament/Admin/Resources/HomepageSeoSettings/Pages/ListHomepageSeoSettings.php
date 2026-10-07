<?php

namespace App\Filament\Admin\Resources\HomepageSeoSettings\Pages;

use App\Filament\Admin\Resources\HomepageSeoSettings\HomepageSeoSettingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHomepageSeoSettings extends ListRecords
{
    protected static string $resource =
        HomepageSeoSettingResource::class;


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