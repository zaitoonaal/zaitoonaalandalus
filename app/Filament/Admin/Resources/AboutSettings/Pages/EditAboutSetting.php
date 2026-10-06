<?php

namespace App\Filament\Admin\Resources\AboutSettings\Pages;

use App\Filament\Admin\Resources\AboutSettings\AboutSettingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAboutSetting extends EditRecord
{
    protected static string $resource = AboutSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
