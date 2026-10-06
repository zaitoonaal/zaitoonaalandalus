<?php

namespace App\Http\Controllers;

use App\Models\AboutSetting;
use App\Models\GallerySetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $aboutSettings = AboutSetting::first();
        $gallerySetting = GallerySetting::first();
        
        // Pass a null variable so the view doesn't throw an "Undefined variable" error
        $hero = null; 

        return view('Home.index', compact('aboutSettings', 'gallerySetting', 'hero'));
    }
}