<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Contracts\{RandomGenerator, CarSharing};
use App\Services\{RandomGeneratorService, CarSharingService};
use App\Repositories\Contracts\Repository;
use App\Repositories\CarRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RandomGenerator::class, RandomGeneratorService::class);
        $this->app->bind(CarSharing::class, CarSharingService::class);
    }
}
