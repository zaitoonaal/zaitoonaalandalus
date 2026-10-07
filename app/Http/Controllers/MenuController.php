<?php

namespace App\Http\Controllers;

use App\Models\InstagramSection;
use App\Models\MenuSetting;
use Illuminate\View\View;

class MenuController extends Controller
{
    public function index(): View
    {
        /*
        |--------------------------------------------------------------------------
        | MENU PAGE SETTINGS
        |--------------------------------------------------------------------------
        */

        $menuSetting =
            MenuSetting::query()
                ->first();


        /*
        |--------------------------------------------------------------------------
        | HIDE MENU PAGE WHEN DISABLED
        |--------------------------------------------------------------------------
        */

        if (
            $menuSetting
            && ! $menuSetting->is_active
        ) {
            abort(404);
        }


        /*
        |--------------------------------------------------------------------------
        | INSTAGRAM GRID
        |--------------------------------------------------------------------------
        |
        | Loads the same active Instagram Grid Setting used on the homepage.
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
        | MENU PAGE VIEW
        |--------------------------------------------------------------------------
        */

        return view(
            'Home.menu',
            [
                'menuSetting' =>
                    $menuSetting,

                'instagramSections' =>
                    $instagramSections,
            ]
        );
    }
}