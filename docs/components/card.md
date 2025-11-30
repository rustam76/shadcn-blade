# Card

## Installation

In order to use the Card component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add card
```

## Usage

```html
<x-ui::card class="w-[350px]">
  <x-ui::card.header>
    <x-ui::card.title>Create project</x-ui::card.title>
    <x-ui::card.description
      >Deploy your new project in one-click.</x-ui::card.description
    >
  </x-ui::card.header>
  <x-ui::card.content>
    <form>
      <div class="grid w-full items-center gap-4">
        <div class="flex flex-col space-y-1.5">
          <x-ui::label for="name">Name</x-ui::label>
          <x-ui::input id="name" placeholder="Name of your project" />
        </div>
      </div>
    </form>
  </x-ui::card.content>
  <x-ui::card.footer class="flex justify-between">
    <x-ui::button variant="outline">Cancel</x-ui::button>
    <x-ui::button>Deploy</x-ui::button>
  </x-ui::card.footer>
</x-ui::card>
```

## Props

### Card

| Prop    | Description                  | Type     | Default |
| ------- | ---------------------------- | -------- | ------- |
| `class` | Additional classes to apply. | `string` | `''`    |
