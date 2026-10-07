<?php

namespace App\Filament\Admin\Resources\TestimonialSections\Pages;

use App\Filament\Admin\Resources\TestimonialSections\TestimonialSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTestimonialSection extends EditRecord
{
    protected static string $resource =
        TestimonialSectionResource::class;


    protected function getHeaderActions(): array
    {
        return [

            DeleteAction::make()
                ->requiresConfirmation(),

        ];
    }
}