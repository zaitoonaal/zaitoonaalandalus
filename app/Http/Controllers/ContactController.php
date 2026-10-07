<?php

namespace App\Http\Controllers;

use App\Models\ContactPageSetting;
use App\Models\InstagramSection;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        /*
        |--------------------------------------------------------------------------
        | Contact Page Settings
        |--------------------------------------------------------------------------
        */

        $contact =
            ContactPageSetting::query()
                ->first();


        /*
        |--------------------------------------------------------------------------
        | Hide Contact Page When Disabled
        |--------------------------------------------------------------------------
        */

        if (
            $contact
            && ! $contact->is_active
        ) {
            abort(404);
        }


        /*
        |--------------------------------------------------------------------------
        | Instagram Grid
        |--------------------------------------------------------------------------
        |
        | The same Instagram section used on the homepage is also used on the
        | Contact page. Only active sections are loaded.
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
        | Contact Page View
        |--------------------------------------------------------------------------
        */

        return view(
            'Home.contact',
            [
                'contact' =>
                    $contact,

                'instagramSections' =>
                    $instagramSections,
            ]
        );
    }
}