<?php

namespace App\Filament\Admin\Resources\ContactPageSettings\Pages;

use App\Filament\Admin\Resources\ContactPageSettings\ContactPageSettingResource;
use Filament\Resources\Pages\CreateRecord;

class CreateContactPageSetting extends CreateRecord
{
    protected static string $resource = ContactPageSettingResource::class;
}
