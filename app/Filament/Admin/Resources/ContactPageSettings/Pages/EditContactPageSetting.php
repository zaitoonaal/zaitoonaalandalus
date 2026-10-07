<?php

namespace App\Filament\Admin\Resources\ContactPageSettings\Pages;

use App\Filament\Admin\Resources\ContactPageSettings\ContactPageSettingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditContactPageSetting extends EditRecord
{
    protected static string $resource = ContactPageSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
