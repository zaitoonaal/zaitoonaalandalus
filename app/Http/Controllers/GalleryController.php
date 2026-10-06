<?php

namespace App\Http\Controllers;

use App\Models\GallerySetting;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function index(): View
    {
        $gallery = GallerySetting::query()->first();

        if ($gallery && ! $gallery->is_active) {
            abort(404);
        }

        return view('Home.gallerypage', [
            'gallery' => $gallery,
        ]);
    }
}