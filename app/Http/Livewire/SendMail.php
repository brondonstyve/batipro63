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


        if ($reponse!=false) {
        try {
            $details = [
                'title' => $this->sujet,
                'body' => $this->message,
                'email' => $this->email,
                'nom' => $this->nom.' '.$this->prenom,
            ];
           
            Mail::to(env('MAIL_ADMIN'))
            ->send(new \App\Mail\notif($details));
            session()->flash('success','Message envoyé avec succès. nous vous repondrons le plus vite possible.');
            $this->sujet=null;
            $this->message=null;
            $this->email=null;
            $this->nom=null;
            $this->prenom=null;
           
        } catch (\Throwable $th) {
            session()->flash('error','erreur lors de l\'envoie du message');
        }
       }
        
    }


    public function render()
    {
        
        return view('livewire.send-mail');
    }
}
