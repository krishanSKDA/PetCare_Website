<div class="p-4 space-y-4">
<x-mary-header title="Dashboard" subtitle="Explore Dashboard Features on Mobile..">
</x-mary-header>
<div class="flex space-x-2">
<x-mary-stat title="Messages" value="44" icon="o-envelope" tooltip="Hello" />
 
<x-mary-stat
    title="Sales"
    description="This month"
    value="22.124"
    icon="o-arrow-trending-up"
    tooltip-bottom="There" />
 
<x-mary-stat
    title="Lost"
    description="This month"
    value="34"
    icon="o-arrow-trending-down"
    tooltip-left="Ops!" />
 
<x-mary-stat
    title="Sales"
    description="This month"
    value="22.124"
    icon="o-arrow-trending-down"
    class="text-orange-500"
    color="text-pink-500"
    tooltip-right="Gosh!" /> 
    
    
    </div>
    <!-- Chart Container -->
    <div class="w-full max-w-full mb-4">
        <x-mary-chart wire:model="myChart" class="w-full h-64 sm:h-80 md:h-96 lg:h-[400px]" />
        
    </div>

    <!-- Buttons Below the Chart -->
    <div class="flex space-x-2">
        <x-mary-button label="Randomize" wire:click="randomize" class="btn-primary text-sm px-4 py-2" spinner />
        <x-mary-button label="Switch" wire:click="switch" class="text-sm px-4 py-2" spinner />
    </div>
</div>
