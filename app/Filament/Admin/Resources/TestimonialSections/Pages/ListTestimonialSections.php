<?php

namespace App\Filament\Admin\Resources\TestimonialSections\Pages;

use App\Filament\Admin\Resources\TestimonialSections\TestimonialSectionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTestimonialSections extends ListRecords
{
    protected static string $resource =
        TestimonialSectionResource::class;


    protected function getHeaderActions(): array
    {
        return [

            CreateAction::make()
                ->label(
                    'Create Testimonials Section'
                ),

        ];
    }
}