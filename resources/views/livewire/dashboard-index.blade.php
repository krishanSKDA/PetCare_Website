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
    title="Current Date & Time"
    description="{{ now()->format('l, F j, Y') }}"
    value="{{ now()->format('h:i A') }}"
    icon="o-clock"
    class="text-green-500"
    color="text-blue-500"
    tooltip="This is the current date and time!" />

    
    </div>
    <!-- Chart Container -->
    <div class="w-full max-w-full mb-4">
        <x-mary-chart wire:model="myChart" class="w-full h-64 sm:h-80 md:h-96 lg:h-[400px]" />
        
    </div>

   
</div>
