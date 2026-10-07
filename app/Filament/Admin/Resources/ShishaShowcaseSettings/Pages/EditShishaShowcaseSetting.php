<?php

namespace App\Filament\Admin\Resources\ShishaShowcaseSettings\Pages;

use App\Filament\Admin\Resources\ShishaShowcaseSettings\ShishaShowcaseSettingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditShishaShowcaseSetting extends EditRecord
{
    protected static string $resource =
        ShishaShowcaseSettingResource::class;


    protected function getHeaderActions(): array
    {
        return [

            DeleteAction::make()
                ->requiresConfirmation(),

        ];
    }
}