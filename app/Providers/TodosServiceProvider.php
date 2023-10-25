<?php

namespace App\Providers;

use App\Interfaces\TodosRepositoryInterface;
use App\Repositories\CarRespository;
use App\Repositories\TodosRespository;
use App\Services\Todoservice;
use Illuminate\Support\ServiceProvider;

class TodosServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TodosRepositoryInterface::class, TodosRespository::class);
        $this->app->bind(TodosServiceProviderInterface::class, Todoservice::class);
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
