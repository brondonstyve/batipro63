<?php

namespace App\Http\Livewire;

use App\Models\projet;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ProjetMg extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';

    public $indice='';

    public function getProjetsProperty(){
        return DB::table('projets')->whereIn('service',['Maçonnerie générale','Logement collectif'])->get();
    }
    
    public function render()
    {
        return view('livewire.projet-mg');
    }
}
