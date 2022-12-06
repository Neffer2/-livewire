<div> 
    <input wire:model="pais" type="text">
    Hello {{ $pais }} {{ now() }}
    <button wire:click="$refresh">refresh</button>
</div>
 