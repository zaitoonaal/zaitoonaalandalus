<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $hero = HeroSection::query()->first();

        return view('Home.index', [
            'hero' => $hero,
        ]);
    }
}