<?php

namespace App\Filament\Admin\Resources\HomeSeoSettings\Pages;

use App\Filament\Admin\Resources\HomeSeoSettings\HomeSeoSettingResource;
use Filament\Resources\Pages\EditRecord;

class EditHomeSeoSetting extends EditRecord
{
    protected static string $resource =
        HomeSeoSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}