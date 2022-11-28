<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{   
    public $name;
    public $exclamation = false;
    public $greeting;

    public function render()
    {
        return view('livewire.hello-world');
    }
    

    public function reset_name ($name = 'default name'){
        $this->name = $name;
    }
}
