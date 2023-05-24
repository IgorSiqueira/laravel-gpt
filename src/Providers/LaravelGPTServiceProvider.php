<?php

namespace IgorSiqueira\LaravelGPT\Providers;

use Illuminate\Support\ServiceProvider;
use SeuPacote\Console\Commands\LaravelGPTCommand;

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
