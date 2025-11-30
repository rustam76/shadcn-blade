# Pagination

## Installation

In order to use the Pagination component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add pagination
```

## Usage

```html
<x-ui::pagination>
  <x-ui::pagination.content>
    <x-ui::pagination.item>
      <x-ui::pagination.previous href="#" />
    </x-ui::pagination.item>
    <x-ui::pagination.item>
      <x-ui::pagination.link href="#">1</x-ui::pagination.link>
    </x-ui::pagination.item>
    <x-ui::pagination.item>
      <x-ui::pagination.link href="#" isActive>2</x-ui::pagination.link>
    </x-ui::pagination.item>
    <x-ui::pagination.item>
      <x-ui::pagination.link href="#">3</x-ui::pagination.link>
    </x-ui::pagination.item>
    <x-ui::pagination.item>
      <x-ui::pagination.ellipsis />
    </x-ui::pagination.item>
    <x-ui::pagination.item>
      <x-ui::pagination.next href="#" />
    </x-ui::pagination.item>
  </x-ui::pagination.content>
</x-ui::pagination>
```

## Props

### Pagination

| Prop    | Description                  | Type     | Default |
| ------- | ---------------------------- | -------- | ------- |
| `class` | Additional classes to apply. | `string` | `''`    |
