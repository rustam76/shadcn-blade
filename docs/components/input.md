# Input

## Installation

In order to use the Input component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add input
```

## Usage

### Default

```html
<x-ui::input type="email" placeholder="Email" />
```

### File

```html
<div class="grid w-full max-w-sm items-center gap-1.5">
  <x-ui::label for="picture">Picture</x-ui::label>
  <x-ui::input id="picture" type="file" />
</div>
```

> Note: Example above uses [Label](label.md) component.

### Disabled

```html
<x-ui::input type="email" placeholder="Email" disabled />
```

### With Button

```html
<div class="flex w-full max-w-sm items-center space-x-2">
  <x-ui::input type="email" placeholder="Email" />
  <x-ui::button type="submit">Subscribe</x-ui::button>
</div>
```

> Note: Example above uses [Button](button.md) component.

## Props

### Input

Contains the content you want to constrain to an input.

| Prop    | Description                       | Type     | Default   | Options                |
| ------- | --------------------------------- | -------- | --------- | ---------------------- |
| `theme` | The style theme of the component. | `string` | `default` | default <br/> New York |
