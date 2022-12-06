<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LiveChild extends Component
{
    public $pais;

    public function render()
    {
        return view('livewire.live-child');
    } 
} 
