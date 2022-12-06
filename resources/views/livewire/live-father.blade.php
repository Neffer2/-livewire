<div>
    @foreach ($paises as $pais)
        @livewire('live-child', ['pais' => $pais->description], key($pais->id))
        <button wire:click="removePais({{ $pais->id }})">remove</button>
    @endforeach

    {{ now() }}
    <button wire:click="$refresh">refresh</button>
</div>
 