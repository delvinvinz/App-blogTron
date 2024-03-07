@props(['textColor', 'bgColor'])

@php
    $textColor = match ($textColor)
    {
        'gray' => 'text-gray-100',
        'blue' => 'text-blue-800',
        'green' => 'text-green-800',
        'red' => 'text-red-800',
        'yellow' => 'text-yellow-800',
        default => 'text-gray-100',
    };

    $bgColor = match ($bgColor)
    {
        'gray' => 'bg-gray-100',
        'blue' => 'bg-blue-100',
        'red' => 'bg-red-100',
        'green' => 'bg-green-100',
        'yellow' => 'bg-yellow-100',
        default => 'bg-gray-100',
    };
@endphp

<button {{ $attributes }} href="#" class="{{ $textColor }} {{ $bgColor }} rounded-xl px-3 py-1 text-base">
{{ $slot }}
</button>
