<?php

namespace LaravelMagalu;

use Illuminate\Support\ServiceProvider;
use DayGarcia\LaravelMagalu\Magalu;

class MagaluServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */


    public function register()
    {
        $this->app->singleton('magalu', function () {
            return new Magalu();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/magalu.php' => config_path('magalu.php'),
        ]);
        // check if the App/Http/Requests/LaravelMercadoLivreExists directory exists
        if (!file_exists(app_path('Http/Requests/LaravelMagalu/'))) {
            mkdir(app_path('Http/Requests/LaravelMagalu/'), 0755, true);
        }
        $this->publishes([
            __DIR__ . '/app/Http/Requests/' => app_path('Http/Requests/LaravelMagalu/'),
        ]);

        $this->user = config('magalu.user');
        $this->password = config('magalu.password');
        $this->urls = config('magalu.urls');
    }
}
