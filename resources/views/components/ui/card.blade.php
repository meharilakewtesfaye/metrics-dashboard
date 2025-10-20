@props([
    'padding' => 'medium',
    'hover' => false,
])

@php
    $paddingClasses = [
        'none' => 'p-0',
        'small' => 'p-4',
        'medium' => 'p-5',
        'large' => 'p-6',
    ];
    
    $baseClasses = 'bg-white rounded-lg border border-gray-200';
    $hoverClass = $hover ? 'hover:shadow-md transition-shadow duration-200' : '';
    
    $classes = $baseClasses . ' ' . $paddingClasses[$padding] . ' ' . $hoverClass;
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>