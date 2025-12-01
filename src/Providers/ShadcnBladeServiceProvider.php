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

        // Publish CSS file
        $this->publishes([
            __DIR__.'/../../resources/css/themes.css' => resource_path('css/themes.css'),
        ], 'themes');

        
        if ($this->app->runningInConsole()) {
            
            // Auto inject CSS into app.css
            $this->injectCssIntoApp();
            
            // Register the command
            $this->commands([
                MakeComponentCommand::class,
            ]);
        }
    }

    /**
     * Automatically inject @import into app.css if not exists.
     */
    protected function injectCssIntoApp()
    {
        $appCss = resource_path('css/app.css');
        $importLine = "@import 'themes.css';";

        // Ensure app.css exists
        if (! file_exists($appCss)) {
            return;
        }

        $content = file_get_contents($appCss);

        // Avoid duplicate injection
        if (strpos($content, 'themes.css') !== false) {
            return;
        }

        // Prepend import
        $newContent = $importLine . PHP_EOL . $content;

        file_put_contents($appCss, $newContent);
    }
}
