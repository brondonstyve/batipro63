<?php

namespace App\Http\Livewire;

use App\Models\temoignage;
use App\Models\tpage;
use Livewire\Component;

class Avisvideo extends Component
{
    public $type='Temoignage';


    public function getTemoignageProperty(){
        return temoignage::whereType($this->type)
        ->get();
    }

    public function getInfosProperty(){
        return tpage::first();
    }

    public function render()
    {
        return view('livewire.avisvideo');
    }
}
