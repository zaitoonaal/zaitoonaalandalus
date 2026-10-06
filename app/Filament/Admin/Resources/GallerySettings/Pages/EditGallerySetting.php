<?php

namespace App\Filament\Admin\Resources\GallerySettings\Pages;

use App\Filament\Admin\Resources\GallerySettings\GallerySettingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditGallerySetting extends EditRecord
{
    protected static string $resource = GallerySettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
