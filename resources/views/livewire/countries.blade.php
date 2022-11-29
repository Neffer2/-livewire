<div>
    <button wire:click="rellenar()"> Rellenar </button> 
    <select>
        @foreach ($countries as $country)
            <option value="{{ $country->id }}">{{ $country->description }}</option>
        @endforeach
    </select>
</div>
