@props([
    'variant' => 'primary',
    'size' => 'medium',
    'type' => 'button',
])

@php
    $baseClasses = 'inline-flex items-center justify-center font-medium rounded transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2';
    
    $variantClasses = [
        'primary' => 'bg-blue-600 hover:bg-blue-700 text-white focus:ring-blue-500',
        'secondary' => 'bg-gray-100 hover:bg-gray-200 text-gray-700 focus:ring-gray-500 border border-gray-300',
        'outline' => 'bg-white hover:bg-gray-50 text-gray-700 border border-gray-300 focus:ring-gray-500',
    ];
    
    $sizeClasses = [
        'small' => 'px-3 py-1.5 text-sm',
        'medium' => 'px-4 py-2 text-sm',
        'large' => 'px-6 py-3 text-base',
    ];
    
    $classes = $baseClasses . ' ' . $variantClasses[$variant] . ' ' . $sizeClasses[$size];
@endphp

<button 
    type="{{ $type }}"
    {{ $attributes->merge(['class' => $classes]) }}
>
    {{ $slot }}
</button>