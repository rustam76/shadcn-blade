# Tooltip

## Installation

In order to use the Tooltip component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add tooltip
```

## Usage

```html
<x-ui:::tooltip>
  <x-slot:trigger>
    <x-ui:::button variant="outline">Hover</x-ui:::button>
  </x-slot:trigger>
  <p>Add to library</p>
</x-ui:::tooltip>
```

## Props

### Tooltip

| Prop         | Description                      | Type      | Default | Options                          |
| ------------ | -------------------------------- | --------- | ------- | -------------------------------- |
| `side`       | The side to display the tooltip. | `string`  | `'top'` | `top`, `bottom`, `left`, `right` |
| `delay`      | The delay before showing.        | `integer` | `0`     |                                  |
| `sideOffset` | The offset from the trigger.     | `integer` | `6`     |                                  |
