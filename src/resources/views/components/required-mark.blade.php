@props(['value'])

<span {{ $attributes->merge(['class' => 'ml-px px-1.5 rounded text-white bg-red-500 block text-[13px]']) }}>
    {{ $value ?? $slot }}
</span>
