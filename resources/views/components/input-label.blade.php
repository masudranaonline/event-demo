@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm pb-1 text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>