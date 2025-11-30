# Radio Group

## Installation

In order to use the Radio Group component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add radio
```

## Usage

```html
<x-ui::radio.group name="type" value="card">
  <div class="flex items-center space-x-2">
    <x-ui::radio.item value="default" id="r1" />
    <x-ui::label for="r1">Default</x-ui::label>
  </div>
  <div class="flex items-center space-x-2">
    <x-ui::radio.item value="comfortable" id="r2" />
    <x-ui::label for="r2">Comfortable</x-ui::label>
  </div>
  <div class="flex items-center space-x-2">
    <x-ui::radio.item value="compact" id="r3" />
    <x-ui::label for="r3">Compact</x-ui::label>
  </div>
</x-ui::radio.group>
```

## Props

### Radio Group

| Prop          | Description                   | Type     | Default      | Options              |
| ------------- | ----------------------------- | -------- | ------------ | -------------------- |
| `name`        | The name of the radio group.  | `string` | `null`       |                      |
| `model`       | The model to bind to.         | `string` | `null`       |                      |
| `orientation` | The orientation of the group. | `string` | `'vertical'` | `vertical`, `inline` |
| `class`       | Additional classes to apply.  | `string` | `''`         |                      |
