<?php

namespace App\Filament\Admin\Resources\InstagramSections\Pages;

use App\Filament\Admin\Resources\InstagramSections\InstagramSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditInstagramSection extends EditRecord
{
    protected static string $resource =
        InstagramSectionResource::class;


    protected function getHeaderActions(): array
    {
        return [

            DeleteAction::make()
                ->requiresConfirmation(),

        ];
    }
}