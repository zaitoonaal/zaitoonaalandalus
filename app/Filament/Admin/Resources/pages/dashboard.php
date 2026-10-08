<?php

namespace App\Filament\Admin\Pages;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Dashboard as BaseDashboard;
use Illuminate\Support\Facades\Artisan;

class Dashboard extends BaseDashboard
{
    /*
    |--------------------------------------------------------------------------
    | Dashboard Header Actions
    |--------------------------------------------------------------------------
    */

    protected function getHeaderActions(): array
    {
        return [

            Action::make(
                'clearWebsiteCache'
            )
                ->label(
                    'Clear Website Cache'
                )

                ->icon(
                    'heroicon-o-arrow-path'
                )

                ->color(
                    'warning'
                )

                /*
                |--------------------------------------------------------------------------
                | Admin Only
                |--------------------------------------------------------------------------
                */

                ->visible(
                    function (): bool {

                        $user =
                            auth()->user();


                        if (
                            ! $user
                        ) {
                            return false;
                        }


                        return (bool) $user->is_active
                            && $user->role === 'admin';

                    }
                )

                /*
                |--------------------------------------------------------------------------
                | Confirmation
                |--------------------------------------------------------------------------
                */

                ->requiresConfirmation()

                ->modalHeading(
                    'Clear Website Cache?'
                )

                ->modalDescription(
                    'This will clear Laravel application, configuration, route, event and view caches. Your website content and database will not be deleted.'
                )

                ->modalSubmitActionLabel(
                    'Yes, Clear Cache'
                )

                /*
                |--------------------------------------------------------------------------
                | Clear Cache
                |--------------------------------------------------------------------------
                */

                ->action(
                    function (): void {

                        try {

                            Artisan::call(
                                'optimize:clear'
                            );


                            Notification::make()

                                ->title(
                                    'Website cache cleared'
                                )

                                ->body(
                                    'Laravel caches were cleared successfully.'
                                )

                                ->success()

                                ->send();

                        } catch (
                            \Throwable $exception
                        ) {

                            report(
                                $exception
                            );


                            Notification::make()

                                ->title(
                                    'Cache clear failed'
                                )

                                ->body(
                                    'Laravel could not clear the cache. Check the application log for details.'
                                )

                                ->danger()

                                ->send();

                        }

                    }
                ),

        ];
    }
}