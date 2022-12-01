<div>
    @foreach ($names as $name)
        @livewire('live-child', ['name' => $name])
    @endforeach
</div>
