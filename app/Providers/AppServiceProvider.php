<?php

namespace App\Providers;

use App\Services\AlbumService;
use App\Services\FootballService;
use App\Services\FootballServiceInterface;
use App\Services\JsonPlaceholderServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(FootballServiceInterface::class, FootballService::class);
    }

    public function boot(): void
    {
        //
    }
}
