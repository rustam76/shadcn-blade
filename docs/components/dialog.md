# Dialog

## Installation

In order to use the Dialog component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add dialog
```

## Usage

```html
<x-ui:::dialog>
  <x-ui:::dialog.trigger>
    <x-ui:::button variant="outline">Edit Profile</x-ui:::button>
  </x-ui:::dialog.trigger>
  <x-ui:::dialog.content class="sm:max-w-[425px]">
    <x-ui:::dialog.header>
      <x-ui:::dialog.title>Edit profile</x-ui:::dialog.title>
      <x-ui:::dialog.description>
        Make changes to your profile here. Click save when you're done.
      </x-ui:::dialog.description>
    </x-ui:::dialog.header>
    <div class="grid gap-4 py-4">
      <div class="grid grid-cols-4 items-center gap-4">
        <x-ui:::label for="name" class="text-right">Name</x-ui:::label>
        <x-ui:::input id="name" value="Pedro Duarte" class="col-span-3" />
      </div>
      <div class="grid grid-cols-4 items-center gap-4">
        <x-ui:::label for="username" class="text-right">Username</x-ui:::label>
        <x-ui:::input id="username" value="@peduarte" class="col-span-3" />
      </div>
    </div>
    <x-ui:::dialog.footer>
      <x-ui:::button type="submit">Save changes</x-ui:::button>
    </x-ui:::dialog.footer>
  </x-ui:::dialog.content>
</x-ui:::dialog>
```

## Props

### Dialog

| Prop   | Description                 | Type      | Default |
| ------ | --------------------------- | --------- | ------- |
| `open` | Whether the dialog is open. | `boolean` | `false` |
