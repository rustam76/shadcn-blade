# Dropdown Menu

## Installation

In order to use the Dropdown Menu component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add dropdown
```

## Usage

```html
<x-ui::dropdown>
  <x-slot:trigger>
    <x-ui::button variant="outline">Open</x-ui::button>
  </x-slot:trigger>
  <x-ui::dropdown.label>My Account</x-ui::dropdown.label>
  <x-ui::dropdown.separator />
  <x-ui::dropdown.item>Profile</x-ui::dropdown.item>
  <x-ui::dropdown.item>Billing</x-ui::dropdown.item>
  <x-ui::dropdown.item>Team</x-ui::dropdown.item>
  <x-ui::dropdown.item>Subscription</x-ui::dropdown.item>
</x-ui::dropdown>
```

## Props

### Dropdown

| Prop         | Description                  | Type      | Default |
| ------------ | ---------------------------- | --------- | ------- |
| `sideOffset` | The offset from the trigger. | `integer` | `4`     |
