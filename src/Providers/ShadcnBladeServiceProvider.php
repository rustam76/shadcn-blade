<?php

namespace ShadcnBlade\Providers;

use Illuminate\Support\ServiceProvider;
use ShadcnBlade\Commands\MakeComponentCommand;

class ShadcnBladeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'ui');
        if ($this->app->runningInConsole()) {
            // Register the command
            $this->commands([
                MakeComponentCommand::class,
            ]);
        }
    }
}
