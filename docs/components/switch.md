# Switch

## Installation

In order to use the Switch component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add switch
```

## Usage

```html
<div class="flex items-center space-x-2">
  <x-ui:::switch id="airplane-mode" />
  <x-ui:::label for="airplane-mode">Airplane Mode</x-ui:::label>
</div>
```

## Props

### Switch

| Prop       | Description                     | Type      | Default |
| ---------- | ------------------------------- | --------- | ------- |
| `checked`  | Whether the switch is checked.  | `boolean` | `false` |
| `disabled` | Whether the switch is disabled. | `boolean` | `false` |
| `name`     | The name of the input.          | `string`  | `null`  |
| `value`    | The value of the input.         | `string`  | `'1'`   |
| `class`    | Additional classes to apply.    | `string`  | `''`    |
