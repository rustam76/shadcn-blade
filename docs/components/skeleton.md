# Skeleton

## Installation

In order to use the Skeleton component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add skeleton
```

## Usage

```html
<div class="flex items-center space-x-4">
  <x-ui:::skeleton class="h-12 w-12 rounded-full" />
  <div class="space-y-2">
    <x-ui:::skeleton class="h-4 w-[250px]" />
    <x-ui:::skeleton class="h-4 w-[200px]" />
  </div>
</div>
```

## Props

### Skeleton

| Prop    | Description                  | Type     | Default |
| ------- | ---------------------------- | -------- | ------- |
| `class` | Additional classes to apply. | `string` | `''`    |
