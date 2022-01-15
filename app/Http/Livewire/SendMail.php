<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use PhpParser\Node\Stmt\TryCatch;

class SendMail extends Component
{

    public $nom;
    public $prenom;
    public $email;
    public $sujet;
    public $message;
    public $telephone;
    public $reponse;

    public function send(){

        $reponse=true;
        if ($this->email==null) {
            session()->flash('error','veuillez entrer votre adresse mail.');
            $reponse=false;
        }

        if ($this->nom==null) {
            session()->flash('error','veuillez entrer votre nom.');
            $reponse=false;
        }

        if ($this->message==null) {
            session()->flash('error','veuillez entrer votre message.');
            $reponse=false;
        }

        if ($this->telephone==null) {
            session()->flash('error','veuillez entrer votre numéro de téléphone.');
            $reponse=false;
        }

        

        if ($reponse!=false) {
        try {
            $details = [
                'title' => $this->sujet,
                'telephone' => $this->telephone,
                'body' => $this->message,
                'email' => $this->email,
                'nom' => $this->nom.' '.$this->prenom,
            ];
           
            Mail::to(env('MAIL_ADMIN'))
            ->send(new \App\Mail\notif($details));
            session()->flash('success','Message envoyé avec succès. nous vous repondrons le plus vite possible.');
            $this->sujet=null;
            $this->message=null;
            $this->telephone=null;
            $this->email=null;
            $this->nom=null;
            $this->prenom=null;
           
        } catch (\Throwable $th) {
            session()->flash('error','erreur lors de l\'envoie du message. SVP veuillez reéssayer ou nous contacter via les adresses et numéro figurant dans le site.');
        }
       }
        
    }


    public function render()
    {
        
        return view('livewire.send-mail');
    }
}
