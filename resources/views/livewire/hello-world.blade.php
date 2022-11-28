<div>
    <input wire:model="name" type="text">
    <input wire:model="exclamation" type="checkbox">
    <select wire:model="greeting" name="" id="">
        <option>seleccionar</option>
        <option value="HOla">HOla</option>
        <option value="Hi">Hi</option>
        <option value="Goodbye">Goodbye</option>
    </select>

    {{ $greeting }} {{ $name }} @if ($exclamation) ! @endif

    <form action="" wire:submit.prevent="reset_name($event.target.innerText)">
        <button> Name reset </button>
    </form>
</div>
 