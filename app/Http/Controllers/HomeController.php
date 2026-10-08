<?php

namespace App\Http\Controllers;

use App\Models\AboutSetting;
use App\Models\ExperienceSection;
use App\Models\GallerySetting;
use App\Models\InstagramSection;
use App\Models\ShishaShowcaseSetting;
use App\Models\TestimonialSection;

class HomeController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | About
        |--------------------------------------------------------------------------
        */

        $aboutSettings =
            AboutSetting::query()
                ->first();


        /*
        |--------------------------------------------------------------------------
        | Gallery
        |--------------------------------------------------------------------------
        */

        $gallerySetting =
            GallerySetting::query()
                ->first();


        /*
        |--------------------------------------------------------------------------
        | Experience
        |--------------------------------------------------------------------------
        */

        $experienceSections =
            ExperienceSection::query()

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
        | Shisha Showcase
        |--------------------------------------------------------------------------
        */

        $shishaShowcase =
            ShishaShowcaseSetting::query()

                ->where(
                    'is_active',
                    true
                )

                ->first();


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
        | Testimonials
        |--------------------------------------------------------------------------
        */

        $testimonialSection =
            TestimonialSection::query()

                ->where(
                    'is_active',
                    true
                )

                ->first();


        /*
        |--------------------------------------------------------------------------
        | Hero
        |--------------------------------------------------------------------------
        */

        $hero =
            null;


        /*
        |--------------------------------------------------------------------------
        | Homepage
        |--------------------------------------------------------------------------
        */

        return view(
            'Home.index',
            compact(
                'aboutSettings',
                'gallerySetting',
                'experienceSections',
                'shishaShowcase',
                'instagramSections',
                'testimonialSection',
                'hero'
            )
        );
    }
}