@props(['title', 'value', 'items' => []])

<div class="bg-white border border-gray-200 rounded-lg p-4">
    <h3 class="font-semibold text-gray-900 mb-3">{{ $title }}</h3>
    <div class="text-2xl font-bold text-gray-900 mb-4">{{ $value }}</div>
    
    <div class="space-y-2">
        @foreach($items as $item)
            <div class="flex justify-between items-center">
                <span class="text-sm text-gray-600">{{ $item['label'] }}</span>
                <span class="text-sm font-medium text-gray-900">{{ $item['value'] }}</span>
            </div>
        @endforeach
    </div>
</div>