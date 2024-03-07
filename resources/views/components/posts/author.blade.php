@props(['author', 'size'])

@php

    $imageSize = match ($size ?? null){
        'xs' => 'w-7 h-7',
        'sm' => 'w-9 h-9',
        'md' => 'w-10 h-10',
        'lg' => 'w-14 h-14',
        default => 'w-10 h-10',
    };

    $textSize = match ($size ?? null){
        'xs' => 'text-xs',
        'sm' => 'text-sm',
        'md' => 'text-base',
        'lg' => 'text-xl',
        default => 'text-base',
    };

@endphp

<img class="rounded-full mr-3 object-cover mt-4 sm:mt-0  {{ $imageSize }}" src="{{ $author->profile_photo_url }}" alt="{{ $author->name }}">
<span class="mr-1 sm:mt-0 mt-4 {{ $textSize }}">{{ $author->name }}</span>
