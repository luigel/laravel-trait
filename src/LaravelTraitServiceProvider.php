<?php

namespace Luigel\LaravelTrait;

use Illuminate\Support\ServiceProvider;
use Luigel\LaravelTrait\Commands\TraitMakeCommand;

class LaravelTraitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                TraitMakeCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
