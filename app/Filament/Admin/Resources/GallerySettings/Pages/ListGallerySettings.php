<?php

namespace App\Filament\Admin\Resources\GallerySettings\Pages;

use App\Filament\Admin\Resources\GallerySettings\GallerySettingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGallerySettings extends ListRecords
{
    protected static string $resource = GallerySettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
