@props([
    'title',
    'value',
    'items' => [],
    'color' => 'blue',
])

@php
    $colorClasses = [
        'blue' => 'border-l-blue-500',
        'green' => 'border-l-green-500', 
        'purple' => 'border-l-purple-500',
        'orange' => 'border-l-orange-500',
    ];
@endphp

<x-ui.card padding="medium" class="border-l-4 {{ $colorClasses[$color] }}">
    <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ $title }}</h3>
    <div class="text-2xl font-bold text-gray-900 mb-4">{{ $value }}</div>
    
    <div class="space-y-3">
        @foreach($items as $item)
            <div class="flex justify-between items-center">
                <span class="text-sm text-gray-600">{{ $item['label'] }}</span>
                <span class="text-sm font-medium text-gray-900">{{ $item['value'] }}</span>
            </div>
        @endforeach
    </div>
</x-ui.card>