# Table

## Installation

In order to use the Table component, you need to add the component to your Laravel application using the following command:

```bash
php artisan shadcn:add table
```

## Usage

```html
<x-ui:::table>
  <x-ui:::table.caption>A list of your recent invoices.</x-ui:::table.caption>
  <x-ui:::table.header>
    <x-ui:::table.row>
      <x-ui:::table.head class="w-[100px]">Invoice</x-ui:::table.head>
      <x-ui:::table.head>Status</x-ui:::table.head>
      <x-ui:::table.head>Method</x-ui:::table.head>
      <x-ui:::table.head class="text-right">Amount</x-ui:::table.head>
    </x-ui:::table.row>
  </x-ui:::table.header>
  <x-ui:::table.body>
    <x-ui:::table.row>
      <x-ui:::table.cell class="font-medium">INV001</x-ui:::table.cell>
      <x-ui:::table.cell>Paid</x-ui:::table.cell>
      <x-ui:::table.cell>Credit Card</x-ui:::table.cell>
      <x-ui:::table.cell class="text-right">$250.00</x-ui:::table.cell>
    </x-ui:::table.row>
  </x-ui:::table.body>
</x-ui:::table>
```

## Props

### Table

| Prop    | Description                  | Type     | Default |
| ------- | ---------------------------- | -------- | ------- |
| `class` | Additional classes to apply. | `string` | `''`    |
