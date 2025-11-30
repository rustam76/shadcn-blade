# Avatar

## Installation

In order to use the Avatar component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add avatar
```

## Usage

```html
<x-ui::avatar>
  <x-ui::avatar.image src="https://github.com/shadcn.png" alt="@shadcn" />
  <x-ui::avatar.fallback>CN</x-ui::avatar.fallback>
</x-ui::avatar>
```

## Props

### Avatar

| Prop     | Description                      | Type      | Default | Options                |
| -------- | -------------------------------- | --------- | ------- | ---------------------- |
| `size`   | The size of the avatar.          | `string`  | `md`    | `sm`, `md`, `lg`, `xl` |
| `ring`   | Whether to show a ring.          | `boolean` | `false` |                        |
| `status` | The status indicator (optional). | `string`  | `null`  |                        |
| `class`  | Additional classes to apply.     | `string`  | `''`    |                        |
