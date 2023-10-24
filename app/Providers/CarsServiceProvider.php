<?php

namespace App\Providers;

use App\Interfaces\CarsRepositoryInterface;
use App\Repositories\CarRespository;
use App\Services\CarService;
use Illuminate\Support\ServiceProvider;

class CarsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CarsRepositoryInterface::class, CarRespository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
