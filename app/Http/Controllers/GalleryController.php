<?php

namespace App\Http\Controllers;

use App\Models\GallerySetting;
use App\Models\InstagramSection;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function index(): View
    {
        /*
        |--------------------------------------------------------------------------
        | Gallery Page Settings
        |--------------------------------------------------------------------------
        */

        $gallery =
            GallerySetting::query()
                ->first();


        /*
        |--------------------------------------------------------------------------
        | Hide Gallery Page When Disabled
        |--------------------------------------------------------------------------
        */

        if (
            $gallery
            &&
            ! $gallery->is_active
        ) {

            abort(404);

        }


        /*
        |--------------------------------------------------------------------------
        | Instagram Grid
        |--------------------------------------------------------------------------
        */

        $instagramSections =
            InstagramSection::query()

                ->where(
                    'is_active',
                    true
                )

                ->orderBy(
                    'sort_order',
                    'asc'
                )

                ->orderBy(
                    'id',
                    'asc'
                )

                ->get();


        /*
        |--------------------------------------------------------------------------
        | Gallery Page
        |--------------------------------------------------------------------------
        */

        return view(
            'Home.gallerypage',
            [

                'gallery' =>
                    $gallery,

                'instagramSections' =>
                    $instagramSections,

            ]
        );
    }
}