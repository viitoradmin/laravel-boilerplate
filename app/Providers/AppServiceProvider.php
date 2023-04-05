<?php

namespace App\Providers;

use App\Modules\Backend\V1\UserType\Interfaces\UserTypeInterface;
use App\Modules\Backend\V1\UserType\Repositories\UserTypeRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            UserTypeInterface::class,
            UserTypeRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
