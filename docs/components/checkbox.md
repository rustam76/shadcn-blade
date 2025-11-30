# Checkbox

## Installation

In order to use the Checkbox component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add checkbox
```

## Usage

```html
<div class="flex items-center space-x-2">
  <x-ui::checkbox id="terms" />
  <x-ui::label for="terms">Accept terms and conditions</x-ui::label>
</div>
```

## Props

### Checkbox

| Prop       | Description                       | Type      | Default |
| ---------- | --------------------------------- | --------- | ------- |
| `checked`  | Whether the checkbox is checked.  | `boolean` | `false` |
| `disabled` | Whether the checkbox is disabled. | `boolean` | `false` |
| `name`     | The name of the input.            | `string`  | `null`  |
| `value`    | The value of the input.           | `string`  | `'1'`   |
| `class`    | Additional classes to apply.      | `string`  | `''`    |
