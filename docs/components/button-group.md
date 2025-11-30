# Button Group

## Installation

In order to use the Button Group component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add button-group
```

## Usage

```html
<x-ui::button-group>
  <x-ui::button variant="outline">Year</x-ui::button>
  <x-ui::button variant="outline">Month</x-ui::button>
  <x-ui::button variant="outline">Day</x-ui::button>
</x-ui::button-group>
```

### Vertical

```html
<x-ui::button-group orientation="vertical">
  <x-ui::button variant="outline">Year</x-ui::button>
  <x-ui::button variant="outline">Month</x-ui::button>
  <x-ui::button variant="outline">Day</x-ui::button>
</x-ui::button-group>
```

## Props

### Button Group

| Prop          | Description                   | Type     | Default        | Options                  |
| ------------- | ----------------------------- | -------- | -------------- | ------------------------ |
| `orientation` | The orientation of the group. | `string` | `'horizontal'` | `horizontal`, `vertical` |
| `class`       | Additional classes to apply.  | `string` | `''`           |                          |
