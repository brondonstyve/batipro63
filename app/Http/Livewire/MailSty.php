<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class MailSty extends Component
{
    public function mailme(){
        try {
            $details = [
                'title' => 'test de click',
                'body' => 'Nouveau click pour sollicitation',
                'email' => null,
                'telephone' => null,
                'postal' => null,
                'ville' => null,
                'nom' => null,
            ];
           
            Mail::to('brondonstyve@gmail.com')
            ->send(new \App\Mail\notif($details));
        } catch (\Throwable $th) {
           dd('erreur');
        }
    }
    public function render()
    {
        return view('livewire.mail-sty');
    }
}
