<?php

namespace App\Filament\Admin\Resources\ContactPageSettings\Pages;

use App\Filament\Admin\Resources\ContactPageSettings\ContactPageSettingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContactPageSettings extends ListRecords
{
    protected static string $resource = ContactPageSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
