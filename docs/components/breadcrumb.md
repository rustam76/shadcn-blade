# Breadcrumb

## Installation

In order to use the Breadcrumb component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add breadcrumb
```

## Usage

```html
<x-ui::breadcrumb>
  <x-ui::breadcrumb.list>
    <x-ui::breadcrumb.item>
      <x-ui::breadcrumb.link href="/">Home</x-ui::breadcrumb.link>
    </x-ui::breadcrumb.item>
    <x-ui::breadcrumb.separator />
    <x-ui::breadcrumb.item>
      <x-ui::breadcrumb.link href="/components"
        >Components</x-ui::breadcrumb.link
      >
    </x-ui::breadcrumb.item>
    <x-ui::breadcrumb.separator />
    <x-ui::breadcrumb.item>
      <x-ui::breadcrumb.page>Breadcrumb</x-ui::breadcrumb.page>
    </x-ui::breadcrumb.item>
  </x-ui::breadcrumb.list>
</x-ui::breadcrumb>
```

## Props

### Breadcrumb

| Prop    | Description                  | Type     | Default |
| ------- | ---------------------------- | -------- | ------- |
| `class` | Additional classes to apply. | `string` | `''`    |
