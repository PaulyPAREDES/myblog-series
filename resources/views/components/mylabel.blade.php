@props(['value'])

<label {{ $attributes->merge(['class' => 'font-medium text-gray-500 text-sm dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>
