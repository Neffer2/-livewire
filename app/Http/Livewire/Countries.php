<?php

namespace App\Http\Livewire;

use App\Models\paises;
use Livewire\Component;

class Countries extends Component
{   
    public $countries = [];

    public function render()
    {
        return view('livewire.countries');
    }

    public function rellenar(){
        $this->countries = paises::all();
        // $this->countries = ['Colombia', 'Perú', 'Argentina'];
    }
}
