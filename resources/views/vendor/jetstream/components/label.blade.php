@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 lime:text-white dark:text-lime-400']) }}>
    {{ $value ?? $slot }}
</label>
