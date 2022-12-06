<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TimeContainer extends Component
{
    public $greetings = ['Hello', 'HOla', 'Halo', 'Aloha'];

    public function render()
    {
        return view('livewire.time-container');
    }

    public function refreshAll (){
        $this->emit('refreshChildren');
    }
}
