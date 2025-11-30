# Accordion

## Installation

In order to use the Accordion component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add accordion
```

## Usage

```html
<x-ui:::accordion type="single" collapsible>
  <x-ui:::accordion.item value="item-1">
    <x-ui:::accordion.trigger>Is it accessible?</x-ui:::accordion.trigger>
    <x-ui:::accordion.content>
      Yes. It adheres to the WAI-ARIA design pattern.
    </x-ui:::accordion.content>
  </x-ui:::accordion.item>
</x-ui:::accordion>
```

## Props

### Accordion

| Prop    | Description                  | Type     | Default |
| ------- | ---------------------------- | -------- | ------- |
| `class` | Additional classes to apply. | `string` | `''`    |
