<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
    <!-- Total MRR -->
    <x-ui.stats-card
        title="Total MRR"
        value="$14,775"
        :items="[
            ['label' => 'New MRR', 'value' => '$14,775'],
            ['label' => 'Upgrades', 'value' => '$13,000'],
            ['label' => 'Downgrades', 'value' => '$755'],
        ]"
        color="blue"
    />

    <!-- ARPU -->
    <x-ui.stats-card
        title="ARPU"
        value="$10,000"
        :items="[
            ['label' => 'Reactivations', 'value' => '$10,000'],
            ['label' => 'Existing', 'value' => '$10,000'],
            ['label' => 'Churn', 'value' => '$100'],
        ]"
        color="green"
    />
</div>