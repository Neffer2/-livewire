<?php

namespace App\Http\Livewire;

use App\Models\paises;
use App\Models\cities;
use Livewire\Component;

class Countries extends Component
{   
    public $countries = [];
    public $cities = [];

    public function mount(){
        $this->countries = paises::all();
    }

    public function render()
    {
        return view('livewire.countries');
    }

    public function rellenar(){
        // $this->countries = paises::all();
        // $this->countries = ['Colombia', 'Perú', 'Argentina'];
    }

    public function ciudad(){
        // $this->cities = cities::all();
        $this->cities = ['Colombia', 'Perú', 'Argentina'];
    }
}
