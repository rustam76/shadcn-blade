<?php

namespace Tests;

use Illuminate\Support\Facades\Blade;

class ComponentTest extends TestCase
{
    public function test_it_can_render_a_component()
    {
        // First add the component
        $this->artisan('shadcn:add', ['name' => 'button']);

        // Then try to render it
        $view = Blade::render('<x-ui::button>Click me</x-ui::button>');

        $this->assertStringContainsString('Click me', $view);
        $this->assertStringContainsString('inline-flex items-center justify-center', $view);
    }
}
