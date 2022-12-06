<?php

namespace App\Http\Livewire;

use Livewire\Component;
use app\models\paises;

class LiveFather extends Component
{
    public $paises;

    public function mount(){
        $this->paises = paises::all();
    }

    public function render() 
    {
        return view('livewire.live-father');
    }

    public function removePais($id){
        paises::where('id', $id)->first()->delete();
        $this->mount();
    }
} 
