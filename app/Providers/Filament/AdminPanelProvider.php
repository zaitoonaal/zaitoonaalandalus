<?php

namespace App\Providers\Filament;

use App\Filament\Admin\Pages\Dashboard;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(
        Panel $panel
    ): Panel {
        return $panel

            /*
            |--------------------------------------------------------------------------
            | Panel Configuration
            |--------------------------------------------------------------------------
            */

            ->default()

            ->id(
                'admin'
            )

            ->path(
                'admin'
            )


            /*
            |--------------------------------------------------------------------------
            | Authentication
            |--------------------------------------------------------------------------
            */

            ->login()

            ->authGuard(
                'web'
            )


            /*
            |--------------------------------------------------------------------------
            | Branding
            |--------------------------------------------------------------------------
            |
            | Existing branding remains unchanged.
            |
            */

            ->brandName(
                'Zaitoona Al Andalus'
            )

            ->brandLogo(
                asset(
                    'assets/frontend/img/image1.png'
                )
            )

            ->brandLogoHeight(
                '3rem'
            )

            ->favicon(
                asset(
                    'assets/frontend/img/image1.png'
                )
            )


            /*
            |--------------------------------------------------------------------------
            | Appearance
            |--------------------------------------------------------------------------
            */

            ->colors([

                'primary' =>
                    Color::Amber,

            ])


            /*
            |--------------------------------------------------------------------------
            | Resources
            |--------------------------------------------------------------------------
            */

            ->discoverResources(

                in:
                    app_path(
                        'Filament/Admin/Resources'
                    ),

                for:
                    'App\\Filament\\Admin\\Resources',

            )


            /*
            |--------------------------------------------------------------------------
            | Pages
            |--------------------------------------------------------------------------
            |
            | Uses your custom Dashboard page.
            |
            | Custom Dashboard:
            |
            | app/Filament/Admin/Pages/Dashboard.php
            |
            */

            ->discoverPages(

                in:
                    app_path(
                        'Filament/Admin/Pages'
                    ),

                for:
                    'App\\Filament\\Admin\\Pages',

            )

            ->pages([

                Dashboard::class,

            ])


            /*
            |--------------------------------------------------------------------------
            | Widgets
            |--------------------------------------------------------------------------
            |
            | AccountWidget remains.
            |
            | FilamentInfoWidget remains removed.
            |
            */

            ->discoverWidgets(

                in:
                    app_path(
                        'Filament/Admin/Widgets'
                    ),

                for:
                    'App\\Filament\\Admin\\Widgets',

            )

            ->widgets([

                AccountWidget::class,

            ])


            /*
            |--------------------------------------------------------------------------
            | Middleware
            |--------------------------------------------------------------------------
            */

            ->middleware([

                EncryptCookies::class,

                AddQueuedCookiesToResponse::class,

                StartSession::class,

                AuthenticateSession::class,

                ShareErrorsFromSession::class,

                PreventRequestForgery::class,

                SubstituteBindings::class,

                DisableBladeIconComponents::class,

                DispatchServingFilamentEvent::class,

            ])


            /*
            |--------------------------------------------------------------------------
            | Authentication Middleware
            |--------------------------------------------------------------------------
            */

            ->authMiddleware([

                Authenticate::class,

            ]);
    }
}