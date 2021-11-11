<?php

namespace App\Http\Livewire;

use App\Models\projet;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\WithPagination;

class Projet3 extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';

    public function getProjetsProperty(){
        if (Route::currentRouteName()=='mc' ) {
        return projet::paginate(3);
            return projet::whereService('Maison contemporaine')
            ->paginate(3);

        } else {
            return projet::whereService('Logement collectif')
            ->paginate(3);
        }
        
    }

    public function render()
    {
        return view('livewire.projet3');
    }
}
