# Select

## Installation

In order to use the Select component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add select
```

## Usage

```html
<x-ui::select name="fruit">
  <x-ui::select.trigger class="w-[180px]">
    <x-ui::select.value placeholder="Select a fruit" />
  </x-ui::select.trigger>
  <x-ui::select.content>
    <x-ui::select.group>
      <x-ui::select.label>Fruits</x-ui::select.label>
      <x-ui::select.item value="apple">Apple</x-ui::select.item>
      <x-ui::select.item value="banana">Banana</x-ui::select.item>
      <x-ui::select.item value="blueberry">Blueberry</x-ui::select.item>
      <x-ui::select.item value="grapes">Grapes</x-ui::select.item>
      <x-ui::select.item value="pineapple">Pineapple</x-ui::select.item>
    </x-ui::select.group>
  </x-ui::select.content>
</x-ui::select>
```

## Props

### Select

| Prop    | Description            | Type     | Default |
| ------- | ---------------------- | -------- | ------- |
| `name`  | The name of the input. | `string` | `null`  |
| `model` | The model to bind to.  | `string` | `null`  |
| `value` | The default value.     | `string` | `null`  |
