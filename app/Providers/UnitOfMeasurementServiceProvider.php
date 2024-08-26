<?php

namespace App\Providers;

use App\Contracts\Services\UnitOfMeasurementService\UnitOfMeasurementServiceInterface;
use App\Services\UnitOfMeasurementService\UnitOfMeasurementService;
use Illuminate\Support\ServiceProvider;

class UnitOfMeasurementServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(
            UnitOfMeasurementServiceInterface::class,
            UnitOfMeasurementService::class
        );
    }
}
