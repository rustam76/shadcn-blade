# Badge

## Installation

In order to use the Badge component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add badge
```

## Usage

### Default

```html
<x-ui::badge>Badge</x-ui::badge>
```

### Secondary

```html
<x-ui::badge variant="secondary">Secondary</x-ui::badge>
```

### Outline

```html
<x-ui::badge variant="outline">Outline</x-ui::badge>
```

### Destructive

```html
<x-ui::badge variant="destructive">Destructive</x-ui::badge>
```

## Props

### Badge

| Prop      | Description                    | Type      | Default   | Options                                          |
| --------- | ------------------------------ | --------- | --------- | ------------------------------------------------ |
| `variant` | The visual style of the badge. | `string`  | `default` | `default`, `secondary`, `destructive`, `outline` |
| `asChild` | Whether to render as a child.  | `boolean` | `false`   |                                                  |
| `class`   | Additional classes to apply.   | `string`  | `''`      |                                                  |
