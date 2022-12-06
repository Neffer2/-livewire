<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Times extends Component 
{   
    public $greeting; 
    // public $time;

    // protected $listeners = ['refreshChildren' => 'mount'];
    protected $listeners = ['refreshChildren' => '$refresh'];

    public function mount(){
        // $this->time = now();
    }
    
    public function render()
    {
        return view('livewire.times');
    }

    // public function refresh (){
    //     $this->mount();
    // }
}
