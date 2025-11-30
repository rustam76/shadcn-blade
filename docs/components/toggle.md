# Toggle

## Installation

In order to use the Toggle component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add toogle
```

> Note: The command uses `toogle` (sic) as the component name.

## Usage

```html
<x-ui:::toggle aria-label="Toggle italic">
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
    <line x1="19" x2="10" y1="4" y2="4" />
    <line x1="14" x2="5" y1="20" y2="20" />
    <line x1="15" x2="9" y1="4" y2="20" />
  </svg>
</x-ui:::toggle>
```

## Props

### Toggle

| Prop       | Description                     | Type      | Default   | Options               |
| ---------- | ------------------------------- | --------- | --------- | --------------------- |
| `variant`  | The visual style of the toggle. | `string`  | `default` | `default`, `outline`  |
| `size`     | The size of the toggle.         | `string`  | `default` | `default`, `sm`, `lg` |
| `pressed`  | The pressed state.              | `boolean` | `false`   |                       |
| `disabled` | Whether the toggle is disabled. | `boolean` | `false`   |                       |
| `class`    | Additional classes to apply.    | `string`  | `''`      |                       |
