<?php

namespace App\Http\Controllers;

use App\Models\ContactPageSetting;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        $contact =
            ContactPageSetting::query()->first();

        if (
            $contact
            && ! $contact->is_active
        ) {
            abort(404);
        }

        return view(
            'Home.contact',
            [
                'contact' => $contact,
            ]
        );
    }
}