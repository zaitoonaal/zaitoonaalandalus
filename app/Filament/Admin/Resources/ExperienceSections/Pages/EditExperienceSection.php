<?php

namespace App\Filament\Admin\Resources\ExperienceSections\Pages;

use App\Filament\Admin\Resources\ExperienceSections\ExperienceSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditExperienceSection extends EditRecord
{
    protected static string $resource =
        ExperienceSectionResource::class;


    protected function getHeaderActions(): array
    {
        return [

            DeleteAction::make()
                ->requiresConfirmation(),

        ];
    }
}