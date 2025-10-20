@props([
    'title' => 'New issue',
    'priority' => 'medium',
])

@php
    $priorityColors = [
        'high' => 'bg-red-100 text-red-800',
        'medium' => 'bg-yellow-100 text-yellow-800',
        'low' => 'bg-green-100 text-green-800',
    ];
@endphp

<div class="bg-white border border-gray-200 rounded-lg p-4 cursor-pointer hover:shadow-md transition-shadow duration-200">
    <div class="flex items-center justify-between mb-2">
        <h4 class="font-medium text-gray-900">{{ $title }}</h4>
        <span class="text-xs px-2 py-1 rounded {{ $priorityColors[$priority] }}">
            {{ ucfirst($priority) }}
        </span>
    </div>
    <div class="flex items-center gap-2 text-sm text-gray-500">
        <span>Created today</span>
        <span>•</span>
        <span>No assignee</span>
    </div>
</div>