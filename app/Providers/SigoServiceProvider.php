<?php

namespace Sigo\Providers;

use Illuminate\Support\ServiceProvider;

class SigoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $router = $this->app->router;
        $router->group(['namespace' => 'Sigo\Http\Controllers'], function () {
            require __DIR__ . '/../Http/routes.php';
        });

        /**
         * jakjr: alterdo a ordem de carregamento das rotas.
         * Primeiro é carregado as rotas do pacote
         * Depois da aplicação
         * Isto permite a sobreescrite das rotas e controller do pacote.
         */
        $this->app->booted(function() use ($router){
            $router->group(['namespace' => 'App\Http\Controllers'], function ($router) {
                require app_path('Http/routes.php');
            });
        });


        $this->loadViewsFrom(__DIR__.'/../../resources/views/', 'sigo');

        $this->publishes([
            __DIR__.'/../../resources/views/' => base_path('resources/views/vendor/sigo'),
        ]);

        $this->publishes([
            __DIR__.'/../../config/sigo.php' => config_path('sigo.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../../public/assets' => public_path('vendor/sigo'),
        ], 'public');

        $this->publishes([
            __DIR__.'/../../database/migrations/' => database_path('migrations')
        ], 'migrations');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/sigo.php', 'sigo'
        );
    }

}