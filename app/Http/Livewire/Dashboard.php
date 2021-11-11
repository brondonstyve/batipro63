<?php

namespace App\Http\Livewire;

use App\Models\maison;
use App\Models\projet;
use App\Models\service;
use App\Models\terrain;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboard extends Component
{

    public $service;
    public $projet;
    public $terrain;
    public $maison;

    public function mount(){

        $this->service=service::count();
        $this->projet=projet::count();
        $this->terrain=terrain::count();
        $this->maison=maison::count();
    }

    public function getServicesProperty(){
        return DB::table('services')
        ->orderBy('created_at','desc')
        ->limit(1)
        ->first();
    }

    public function getActualiteProperty(){
        return DB::table('actualites')
        ->orderBy('created_at','desc')
        ->limit(1)
        ->first();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
