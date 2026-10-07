<?php

namespace App\Filament\Admin\Resources\HomepageSeoSettings\Pages;

use App\Filament\Admin\Resources\HomepageSeoSettings\HomepageSeoSettingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHomepageSeoSetting extends EditRecord
{
    protected static string $resource =
        HomepageSeoSettingResource::class;


    protected function getHeaderActions(): array
    {
        return [

            DeleteAction::make()
                ->requiresConfirmation(),

        ];
    }
}