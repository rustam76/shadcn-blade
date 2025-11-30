<?php

namespace Tests;

use Illuminate\Support\Facades\File;

class CommandTest extends TestCase
{


    public function test_it_can_add_a_component()
    {
        $this->artisan('shadcn:add', ['name' => 'button'])
            ->assertExitCode(0);

        $this->assertFileExists(resource_path('views/components/ui/button/button.blade.php'));
    }

    public function test_it_fails_if_component_does_not_exist()
    {
        $this->artisan('shadcn:add', ['name' => 'non-existent-component'])
            ->expectsOutput('Component [non-existent-component] not found.')
            ->assertExitCode(0);
    }
}
