<div>
    <button wire:click="rellenar()"> Rellenar </button> 
    <select>
        @foreach ($countries as $country)
            <option wire:click="ciudad()" value="{{ $country->id }}">{{ $country->description }}</option>
        @endforeach
    </select>

    <select>
        @foreach ($cities as $city)
            <option value="{{ $city->id }}">{{ $city->description }}</option>
        @endforeach
    </select>
</div>
