<?php

namespace App\Filament\Admin\Resources\AboutSettings\Pages;

use App\Filament\Admin\Resources\AboutSettings\AboutSettingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAboutSettings extends ListRecords
{
    protected static string $resource = AboutSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
