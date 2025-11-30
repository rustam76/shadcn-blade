# Scroll Area

## Installation

In order to use the Scroll Area component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add scroll-area
```

## Usage

```html
<x-ui::scroll-area class="h-[200px] w-[350px] rounded-md border p-4">
  Jokester began sneaking into the castle in the middle of the night and leaving
  jokes all over the place: under the king's pillow, in his soup, even in the
  royal toilet. The king was furious, but he couldn't seem to stop Jokester. And
  then, one day, the people of the kingdom discovered that the jokes were
  actually funny, and they started laughing. And then they started dancing. And
  then they started singing. And then they started having fun.
</x-ui::scroll-area>
```

## Props

### Scroll Area

| Prop          | Description                       | Type     | Default      | Options                  |
| ------------- | --------------------------------- | -------- | ------------ | ------------------------ |
| `orientation` | The orientation of the scrollbar. | `string` | `'vertical'` | `vertical`, `horizontal` |
| `class`       | Additional classes to apply.      | `string` | `''`         |                          |
