<?php

namespace App\Filament\Admin\Resources\HomeSeoSettings\Pages;

use App\Filament\Admin\Resources\HomeSeoSettings\HomeSeoSettingResource;
use Filament\Resources\Pages\CreateRecord;

class CreateHomeSeoSetting extends CreateRecord
{
    protected static string $resource =
        HomeSeoSettingResource::class;
}