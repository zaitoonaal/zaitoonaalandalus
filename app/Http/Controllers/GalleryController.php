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
        | GALLERY PAGE SETTINGS
        |--------------------------------------------------------------------------
        */

        $gallery =
            GallerySetting::query()
                ->first();


        /*
        |--------------------------------------------------------------------------
        | HIDE GALLERY PAGE WHEN DISABLED
        |--------------------------------------------------------------------------
        */

        if (
            $gallery
            && ! $gallery->is_active
        ) {
            abort(404);
        }


        /*
        |--------------------------------------------------------------------------
        | INSTAGRAM GRID
        |--------------------------------------------------------------------------
        |
        | Loads the same active Instagram Grid Setting used on the homepage,
        | reservation page, and contact page.
        |
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
        | GALLERY PAGE VIEW
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