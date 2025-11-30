# Shadcn Blade

Shadcn Blade is a collection of re-usable components built using Radix UI and Tailwind CSS, adapted for Laravel Blade.

## Documentation

For full documentation, please visit [docs/index.md](docs/index.md).

## Requirements

- PHP 8.1 or higher
- Laravel 10.0, 11.0, or 12.0

## Installation

You can install the package via composer:

```bash
composer require rustamaji/shadcn-blade
```

### CSS Injection

The package automatically injects the necessary CSS variables into your `resources/css/app.css` file during installation. Ensure this file exists in your project.

## Usage

To add a component to your project, use the `shadcn:add` Artisan command:

```bash
php artisan shadcn:add button
```

This will copy the component's Blade view to `resources/views/components/ui`. You can then use it in your Blade files:

```blade
<x-ui:::button>Click me</x-ui:::button>
```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
`
