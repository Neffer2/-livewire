<div>
    @foreach ($greetings as $greeting)
        @livewire('times', ['greeting' => $greeting], key($greeting)) 
    @endforeach

    {{ now() }} <button wire:click="$emit('refreshChildren')">Refresh All</button>
</div>
 