<?php

namespace ShadcnBlade\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class MakeComponentCommand extends Command
{
    protected $signature = 'shadcn:add {name}';
    protected $description = 'Add Shadcn Blade component into the project';

    public function handle()
    {
        $name = strtolower($this->argument('name'));

        $source = __DIR__ . "/../../resources/views/components/{$name}";
        $targetPath = base_path("resources/views/components/ui/{$name}");

        if (!is_dir($source)) {
            $this->error("Component [$name] not found.");
            return;
        }

        (new Filesystem())->copyDirectory($source, $targetPath);

        $this->info("Shadcn component '$name' generated successfully.");
    }
}
