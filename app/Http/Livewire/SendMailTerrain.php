<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class SendMailTerrain extends Component
{
    public $nom;
    public $prenom;
    public $email;
    public $telephone;
    public $ville;
    public $postal;

    public function send(){

        $reponse=true;
        if ($this->email==null) {
            session()->flash('error','veuillez entrer votre adresse mail');
            $reponse=false;
        }

        if ($this->email==null) {
            session()->flash('error','veuillez entrer votre adresse mail');
            $reponse=false;
        }

        if ($reponse!=false) {
            try {
                $details = [
                    'title' => 'demande de terrain',
                    'body' => 'une nouvelle personne demande à avoir un terrain disponible',
                    'email' => $this->email,
                    'telephone' => $this->telephone,
                    'postal' => $this->postal,
                    'ville' => $this->ville,
    
                    'nom' => $this->nom.' '.$this->prenom,
                ];
               
                Mail::to(env('MAIL_ADMIN'))
                ->send(new \App\Mail\notif($details));
                session()->flash('success','Message envoyé avec succès. nous vous repondrons le plus vite possible.');
                $this->postal=null;
                $this->ville=null;
                $this->email=null;
                $this->nom=null;
                $this->prenom=null;
                $this->telephone=null;
               
            } catch (\Throwable $th) {
                session()->flash('error','erreur lors de l\'envoie du message');
            }
        }
       
       
        
    }
    
    public function render()
    {
        return view('livewire.send-mail-terrain');
    }
}
