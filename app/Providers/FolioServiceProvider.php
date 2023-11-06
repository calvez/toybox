<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Folio\Folio;

class FolioServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Folio::path(resource_path('views/pages'))
            ->uri('/')
            ->middleware([
                '*' => [
                    // Add yours here...
                ],
            ]);
    }
}
