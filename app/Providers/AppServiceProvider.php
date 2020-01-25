<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\BaseRepository;
use App\Repository\User\UserRepository;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
         /*$this->app->bind('UserRepository', function($app){
           return new UserRepository;
         });*/
         $this->app->bind('BaseRepository', function($app){
           return new BaseRepository;
         });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
