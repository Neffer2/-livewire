<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LiveFather extends Component
{
    public $names = ['Neffer', 'Jorge', 'Singaperra'];

    public function mount(){
        // $this->names = $names;
    }

    public function render() 
    {
        return view('livewire.live-father');
    }
}
