@props([
    'title' => 'My Workspace',
    'active' => false,
])

<div class="{{ $active ? 'bg-blue-50 border-blue-200' : 'bg-white border-gray-200' }} border rounded-lg p-4 cursor-pointer transition-colors duration-200">
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="w-8 h-8 bg-blue-600 rounded flex items-center justify-center">
                <span class="text-white text-sm font-medium">MW</span>
            </div>
            <div>
                <h3 class="font-semibold text-gray-900">{{ $title }}</h3>
                <p class="text-sm text-gray-500">Project management</p>
            </div>
        </div>
        @if($active)
            <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
        @endif
    </div>
</div>