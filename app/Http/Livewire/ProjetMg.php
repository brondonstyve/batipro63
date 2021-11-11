<?php

namespace App\Http\Livewire;

use App\Models\projet;
use Livewire\Component;
use Livewire\WithPagination;

class ProjetMg extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';

    public function getProjetProperty(){
        return projet::whereService('Maçonnerie générale')->paginate(3);
    }
    
    public function render()
    {
        return view('livewire.projet-mg');
    }
}
