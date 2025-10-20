@props(['variant' => 'progress'])

<div class="bg-white border border-gray-200 rounded-lg p-4">
    <h3 class="font-semibold text-gray-900 mb-4">MRR Breakdown</h3>
    
    @if($variant === 'progress')
        <!-- Progress Bars -->
        <div class="space-y-3">
            @foreach([
                ['label' => 'New MRR', 'percentage' => 40, 'color' => 'bg-blue-500'],
                ['label' => 'Upgrades', 'percentage' => 35, 'color' => 'bg-green-500'],
                ['label' => 'Reactivations', 'percentage' => 27, 'color' => 'bg-purple-500'],
                ['label' => 'Existing', 'percentage' => 27, 'color' => 'bg-orange-500'],
                ['label' => 'Downgrades', 'percentage' => 2, 'color' => 'bg-red-500'],
                ['label' => 'Churn', 'percentage' => 0.3, 'color' => 'bg-red-400'],
            ] as $item)
                <div>
                    <div class="flex justify-between items-center text-sm mb-1">
                        <span class="text-gray-600">{{ $item['label'] }}</span>
                        <span class="font-medium">{{ $item['percentage'] }}%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-1.5">
                        <div class="h-1.5 rounded-full {{ $item['color'] }}" style="width: {{ $item['percentage'] }}%"></div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Bottom Metrics -->
        <div class="flex justify-between mt-4 pt-4 border-t border-gray-200">
            <div class="text-center">
                <div class="text-xs text-gray-600">ARPU</div>
                <div class="font-semibold text-gray-900">$10,000</div>
            </div>
            <div class="text-center">
                <div class="text-xs text-gray-600">NET MRR</div>
                <div class="font-semibold text-green-600">$100,000</div>
            </div>
        </div>
    @else
        <!-- List Version -->
        <div class="space-y-2">
            @foreach([
                'New MRR' => '$14,775',
                'Upgrades' => '$13,000', 
                'Reactivations' => '$10,000',
                'Existing' => '$10,000',
                'Downgrades' => '$755',
                'Churn' => '$100',
                'ARPU' => '$10,000',
            ] as $label => $value)
                <div class="flex justify-between items-center py-1">
                    <span class="text-sm text-gray-600">{{ $label }}</span>
                    <span class="text-sm font-medium text-gray-900">{{ $value }}</span>
                </div>
            @endforeach
            <div class="flex justify-between items-center pt-2 border-t border-gray-200">
                <span class="text-sm text-gray-600">NET MRR</span>
                <span class="font-semibold text-green-600">$100,000</span>
            </div>
        </div>
    @endif
</div>