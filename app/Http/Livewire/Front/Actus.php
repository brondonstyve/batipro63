<?php

namespace App\Http\Livewire\Front;

use App\Models\actualite;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Actus extends Component
{

    public $domaine;
    use WithPagination;
    protected $paginationTheme='bootstrap';

    public function getActualiteProperty(){
        return actualite::where([
            [
                'domaine','like',"%$this->domaine%"
            ]
        ])
        ->orderBy('id','desc')
        ->paginate(6);

    }

    public function getDomainProperty(){
        return DB::table('actualites')
        ->select(DB::raw('count(domaine) as nombre'),'domaine')
        ->groupBy('domaine')
        ->limit(5)
        ->get();
    }

    

    public function render()
    {
        return view('livewire.front.actus');
    }
}
