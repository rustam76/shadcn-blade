# Usage

## Adding Components

To add a component to your project, use the `shadcn:add` Artisan command followed by the component name.

```bash
php artisan shadcn:add button
```

This command will copy the component's Blade view to your `resources/views/components/ui` directory.

## Using Components

Once added, you can use the components in your Blade views like any other Blade component. The components are placed under the `ui` namespace.

```blade
<x-ui:::button>Click me</x-ui:::button>
```

### Example

Here is an example of using a button component with a variant:

```blade
<x-ui:::button variant="destructive">
    Delete Account
</x-ui:::button>
```
