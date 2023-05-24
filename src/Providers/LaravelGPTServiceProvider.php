<?php

namespace IgorSiqueira\LaravelGPT\Providers;

use IgorSiqueira\LaravelGPT\Commands\LaravelGPTCommand;
use Illuminate\Support\ServiceProvider;


class LaravelGPTServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([LaravelGPTCommand::class]);
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
