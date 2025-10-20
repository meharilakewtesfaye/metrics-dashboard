@props([
    'percentage' => 0,
    'color' => 'blue',
    'label' => '',
])

@php
    $colorClasses = [
        'blue' => 'bg-blue-500',
        'green' => 'bg-green-500',
        'red' => 'bg-red-500',
        'purple' => 'bg-purple-500',
        'orange' => 'bg-orange-500',
    ];
@endphp

<div class="mb-4">
    @if($label)
        <div class="flex justify-between items-center mb-2">
            <span class="text-sm text-gray-600">{{ $label }}</span>
            <span class="text-sm font-medium text-gray-900">{{ $percentage }}%</span>
        </div>
    @endif
    <div class="w-full bg-gray-200 rounded-full h-2">
        <div 
            class="h-2 rounded-full {{ $colorClasses[$color] }} transition-all duration-500"
            style="width: {{ $percentage }}%"
        ></div>
    </div>
</div>