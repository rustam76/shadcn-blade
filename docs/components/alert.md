# Alert

## Installation

In order to use the Alert component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add alert
```

## Usage

### Default

```html
<x-ui::alert>
  <x-slot:icon>
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
      class="lucide lucide-terminal w-4 h-4"
    >
      <polyline points="4 17 10 11" />
      <line x1="12" x2="20" y1="19" y2="19" />
    </svg>
  </x-slot:icon>
  <x-slot:title>Heads up!</x-slot:title>
  <x-slot:description>
    You can add components to your app using the cli.
  </x-slot:description>
</x-ui::alert>
```

### Destructive

```html
<x-ui::alert variant="destructive">
  <x-slot:icon>
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
      class="lucide lucide-alert-circle w-4 h-4"
    >
      <circle cx="12" cy="12" r="10" />
      <line x1="12" x2="12" y1="8" y2="12" />
      <line x1="12" x2="12.01" y1="16" y2="16" />
    </svg>
  </x-slot:icon>
  <x-slot:title>Error</x-slot:title>
  <x-slot:description>
    Your session has expired. Please log in again.
  </x-slot:description>
</x-ui::alert>
```

## Props

### Alert

| Prop      | Description                    | Type     | Default   | Options                  |
| --------- | ------------------------------ | -------- | --------- | ------------------------ |
| `variant` | The visual style of the alert. | `string` | `default` | `default`, `destructive` |
| `class`   | Additional classes to apply.   | `string` | `''`      |                          |
