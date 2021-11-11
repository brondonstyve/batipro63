<?php

namespace App\Http\Livewire;

use App\Models\actualite;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Recherche extends Component
{

    public $search;

    public function getActualitesProperty(){
        return actualite::limit(5)
        ->orderBy('id','desc')
        ->where([
            ['titre','like',"%$this->search%"]
        ])
        ->orWhere([
            ['domaine','like',"%$this->search%"]
        ])
        ->get();
    }

    public function getDomainesProperty(){
        return DB::table('actualites')
        ->select(DB::raw('count(domaine) as nombre'),'domaine')
        ->groupBy('domaine')
        ->where([
            ['domaine','like',"%$this->search%"]
        ])
        ->get();
    }

    public function render()
    {
        return view('livewire.recherche');
    }
}
