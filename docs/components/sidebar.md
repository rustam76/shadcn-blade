# Sidebar

## Installation

In order to use the Sidebar component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add sidebar
```

## Usage

```html
<x-ui::sidebar>
  <x-ui::sidebar.content>
    <x-ui::sidebar.group>
      <x-ui::sidebar.group-label>Application</x-ui::sidebar.group-label>
      <x-ui::sidebar.group-content>
        <x-ui::sidebar.menu>
          <x-ui::sidebar.menu-item>
            <x-ui::sidebar.menu-button>
              <a href="#">
                <span>Home</span>
              </a>
            </x-ui::sidebar.menu-button>
          </x-ui::sidebar.menu-item>
        </x-ui::sidebar.menu>
      </x-ui::sidebar.group-content>
    </x-ui::sidebar.group>
  </x-ui::sidebar.content>
</x-ui::sidebar>
```

## Props

### Sidebar

| Prop          | Description                 | Type     | Default       | Options                        |
| ------------- | --------------------------- | -------- | ------------- | ------------------------------ |
| `side`        | The side of the sidebar.    | `string` | `'left'`      | `left`, `right`                |
| `variant`     | The variant of the sidebar. | `string` | `'sidebar'`   | `sidebar`, `floating`, `inset` |
| `collapsible` | The collapsible state.      | `string` | `'offcanvas'` | `offcanvas`, `icon`, `none`    |
