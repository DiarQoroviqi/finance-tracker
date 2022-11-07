@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'bg-gray-100 text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md'
                : 'bg-gray-100 text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md text-gray-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
