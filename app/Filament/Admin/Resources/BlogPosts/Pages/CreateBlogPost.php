<?php

namespace App\Filament\Admin\Resources\BlogPosts\Pages;

use App\Filament\Admin\Resources\BlogPosts\BlogPostResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBlogPost extends CreateRecord
{
    protected static string $resource =
        BlogPostResource::class;


    protected function mutateFormDataBeforeCreate(
        array $data
    ): array {

        /*
        |--------------------------------------------------------------------------
        | Automatically set publish date
        |--------------------------------------------------------------------------
        */

        if (
            ($data['status'] ?? 'draft')
            === 'published'
            &&
            blank(
                $data['published_at']
                ?? null
            )
        ) {

            $data['published_at'] =
                now();

        }


        return $data;
    }
}