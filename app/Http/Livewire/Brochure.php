<?php

namespace App\Http\Livewire;

use App\Models\client;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Brochure extends Component
{

    public $nom;
    public $prenom;
    public $email;
    public $ville;
    public $postal;
    public $telephone;
    public $message;
    public $telechargement=false;
    
    public function save(){

        $error=false;


        $error=client::create([
            'nom'=>$this->nom,
            'prenom'=>$this->prenom,
            'ville'=>$this->ville,
            'telephone'=>$this->telephone,
            'postal'=>$this->postal,
            'email'=>$this->email,
            'message'=>$this->message,
        ]);
        
        if ($error) {

            //session()->flash('success','votre téléchargement démarre dans un instant. veuillez patienter...');

            try {
                $details = [
                    'title' => 'Téléchargement de brochure',
                    'body' => '',
                    'email' => '',
                ];
               
                Mail::to($this->email)
                ->send(new \App\Mail\mailbrochure($details));
                session()->flash('success','Message envoyé avec succès. nous vous repondrons le plus vite possible.');
                $this->sujet=null;
                $this->message=null;
                $this->email=null;
                $this->nom=null;
                $this->prenom=null;
               
            } catch (\Throwable $th) {
                session()->flash('error',$th);

            }

            $this->nom=null;
            $this->prenom=null;
            $this->ville=null;
            $this->telephone=null;
            $this->postal=null;
            $this->email=null;
            $this->message=null;
            $this->telechargement=true;

            return redirect('/download');
                     
        } else {
                session()->flash('error','erreur au niveau des informations.');

        }
        
    }


    

    public function render()
    {
        return view('livewire.brochure');
    }
}
