# Button

## Installation

In order to use the Button component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add button
```

## Usage

### Default

```html
<x-ui:::button>Button</x-ui:::button>
```

### Secondary

```html
<x-ui:::button variant="secondary">Secondary</x-ui:::button>
```

### Destructive

```html
<x-ui:::button variant="destructive">Destructive</x-ui:::button>
```

### Outline

```html
<x-ui:::button variant="outline">Outline</x-ui:::button>
```

### Ghost

```html
<x-ui:::button variant="ghost">Ghost</x-ui:::button>
```

### Link

```html
<x-ui:::button variant="link">Link</x-ui:::button>
```

### Icon

```html
<x-ui:::button size="icon">
  <svg
    xmlns="http://www.w3.org/2000/svg"
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    stroke="currentColor"
    stroke-width="2"
    stroke-linecap="round"
    stroke-linejoin="round"
    class="h-4 w-4"
  >
    <path d="m9 18 6-6-6-6" />
  </svg>
</x-ui:::button>
```

## Props

### Button

| Prop      | Description                     | Type     | Default   | Options                                                           |
| --------- | ------------------------------- | -------- | --------- | ----------------------------------------------------------------- |
| `variant` | The visual style of the button. | `string` | `default` | `default`, `destructive`, `outline`, `secondary`, `ghost`, `link` |
| `size`    | The size of the button.         | `string` | `default` | `default`, `sm`, `lg`, `icon`                                     |
| `class`   | Additional classes to apply.    | `string` | `''`      |                                                                   |
