@props(['showProgress' => true])

<x-ui.card padding="large">
    <h3 class="text-lg font-semibold text-gray-900 mb-6">MRR Breakdown</h3>
    
    @if($showProgress)
        <!-- Progress Bars Version -->
        <div class="space-y-4 mb-6">
            @foreach([
                ['label' => 'New MRR', 'percentage' => 40, 'color' => 'bg-blue-500'],
                ['label' => 'Upgrades', 'percentage' => 35, 'color' => 'bg-green-500'],
                ['label' => 'Reactivations', 'percentage' => 27, 'color' => 'bg-purple-500'],
                ['label' => 'Existing', 'percentage' => 27, 'color' => 'bg-orange-500'],
                ['label' => 'Downgrades', 'percentage' => 2, 'color' => 'bg-red-500'],
                ['label' => 'Churn', 'percentage' => 0.3, 'color' => 'bg-red-400'],
            ] as $item)
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-sm text-gray-600">{{ $item['label'] }}</span>
                        <span class="text-sm font-medium text-gray-900">{{ $item['percentage'] }}%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="h-2 rounded-full {{ $item['color'] }} transition-all duration-500" style="width: {{ $item['percentage'] }}%"></div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <!-- List Version -->
        <div class="space-y-3">
            @foreach([
                'New MRR' => '$14,775',
                'Upgrades' => '$13,000',
                'Reactivations' => '$10,000',
                'Existing' => '$10,000',
                'Downgrades' => '$755',
                'Churn' => '$100',
                'ARPU' => '$10,000',
            ] as $label => $value)
                <div class="flex justify-between items-center py-2 border-b border-gray-100 last:border-b-0">
                    <span class="text-sm text-gray-600">{{ $label }}</span>
                    <span class="text-sm font-medium text-gray-900">{{ $value }}</span>
                </div>
            @endforeach
            <div class="flex justify-between items-center py-2">
                <span class="text-sm text-gray-600">NET MRR</span>
                <span class="text-lg font-semibold text-green-600">$100,000</span>
            </div>
        </div>
    @endif
</x-ui.card>