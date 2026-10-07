<?php

namespace App\Filament\Admin\Resources\HomepageSeoSettings\Pages;

use App\Filament\Admin\Resources\HomepageSeoSettings\HomepageSeoSettingResource;
use Filament\Resources\Pages\CreateRecord;

class CreateHomepageSeoSetting extends CreateRecord
{
    protected static string $resource =
        HomepageSeoSettingResource::class;
}