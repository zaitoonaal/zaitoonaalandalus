<?php

namespace App\Http\Controllers;

use App\Models\MenuSetting;
use Illuminate\View\View;

class MenuController extends Controller
{
    public function index(): View
    {
        $menuSetting = MenuSetting::query()->first();

        if ($menuSetting && ! $menuSetting->is_active) {
            abort(404);
        }

        return view('Home.menu', [
            'menuSetting' => $menuSetting,
        ]);
    }
}