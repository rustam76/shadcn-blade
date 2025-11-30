<?php

namespace Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use ShadcnBlade\Providers\ShadcnBladeServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            ShadcnBladeServiceProvider::class,
        ];
    }

    protected function defineEnvironment($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }

    protected function tearDown(): void
    {
        // Cleanup generated components
        if (is_dir(resource_path('views/components/ui'))) {
            \Illuminate\Support\Facades\File::deleteDirectory(resource_path('views/components/ui'));
        }
        parent::tearDown();
    }
}
