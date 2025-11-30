# Tabs

## Installation

In order to use the Tabs component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add tabs
```

## Usage

```html
<x-ui::tabs default="account" class="w-[400px]">
  <x-ui::tabs.list>
    <x-ui::tabs.trigger value="account">Account</x-ui::tabs.trigger>
    <x-ui::tabs.trigger value="password">Password</x-ui::tabs.trigger>
  </x-ui::tabs.list>
  <x-ui::tabs.content value="account">
    Make changes to your account here.
  </x-ui::tabs.content>
  <x-ui::tabs.content value="password">
    Change your password here.
  </x-ui::tabs.content>
</x-ui::tabs>
```

## Props

### Tabs

| Prop          | Description                   | Type     | Default        | Options                  |
| ------------- | ----------------------------- | -------- | -------------- | ------------------------ |
| `default`     | The default active tab value. | `string` | `null`         |                          |
| `orientation` | The orientation of the tabs.  | `string` | `'horizontal'` | `horizontal`, `vertical` |
| `class`       | Additional classes to apply.  | `string` | `''`           |                          |
