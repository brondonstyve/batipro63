<?php

namespace App\Http\Livewire;

use App\Helpers\Image;
use App\Models\etape as ModelsEtape;
use Livewire\Component;
use Livewire\WithFileUploads;

class Etape extends Component
{

    use WithFileUploads;

    public ModelsEtape $etape;
    public $showSuccesNotification  = false;
    public $showErrorNotification  = false;
    public $message;
    public $image1;
    public $image2;
    public $image3;
    public $image4;
    public $image5;
    public $image6;
    public $image7;
    public $image8;
    public $image9;
    public $image10;

    protected $rules=[
        'etape.titreEnt'=>'',
        'etape.descriptionEnt'=>'',
        'etape.etape1'=>'',
        'etape.titre1'=>'',
        'etape.description1'=>'',
        'etape.image1'=>'',
        'etape.etape2'=>'',
        'etape.titre2'=>'',
        'etape.description2'=>'',
        'etape.image2'=>'',
        'etape.etape3'=>'',
        'etape.titre3'=>'',
        'etape.description3'=>'',
        'etape.image3'=>'',
        'etape.etape4'=>'',
        'etape.titre4'=>'',
        'etape.description4'=>'',
        'etape.image4'=>'',
        'etape.etape5'=>'',
        'etape.titre5'=>'',
        'etape.description5'=>'',
        'etape.image5'=>'',
        'etape.etape6'=>'',
        'etape.titre6'=>'',
        'etape.description6'=>'',
        'etape.image6'=>'',
        'etape.etape7'=>'',
        'etape.titre7'=>'',
        'etape.description7'=>'',
        'etape.image7'=>'',
        'etape.etape8'=>'',
        'etape.titre8'=>'',
        'etape.description8'=>'',
        'etape.image8'=>'',
        'etape.etape9'=>'',
        'etape.titre9'=>'',
        'etape.description9'=>'',
        'etape.image9'=>'',
        'etape.etape10'=>'',
        'etape.titre10'=>'',
        'etape.description10'=>'',
        'etape.image10'=>'',
    ];


    public function mount(){
        $reponse=ModelsEtape::get();
        //dd($reponse);
        if (sizeOf($reponse)!=0) {
            $this->etape=ModelsEtape::make();
            $this->etape=ModelsEtape::first();
        } else {
            $this->etape=ModelsEtape::make();
        }
    }


    public function updatedImage1()
    {
        $this->validate([
            'image1' => 'image|max:100000', // 1MB Max
        ]);
       
    }

    public function updatedImage2()
    {
        $this->validate([
            'image2' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage3()
    {
        $this->validate([
            'image3' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage4()
    {
        $this->validate([
            'image4' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage5()
    {
        $this->validate([
            'image5' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage6()
    {
        $this->validate([
            'image6' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage7()
    {
        $this->validate([
            'image7' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage8()
    {
        $this->validate([
            'image8' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage9()
    {
        $this->validate([
            'image9' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage10()
    {
        $this->validate([
            'image10' => 'image|max:100000', // 1MB Max
        ]);
    }



    public function save(){
        ini_set('memory_limit', '-1');
        if(env('IS_DEMO')) { 
            $this->showDemoNotification = true;
         } else {


        $reponse=ModelsEtape::get();

        try {
            if ($this->image1) {
                $this->etape->image1=Image::traitementS($this->image1,'jpg');
            }

            if ($this->image2) {
                $this->etape->image2=Image::traitementS($this->image2,'jpg');
            }

            if ($this->image3) {
                $this->etape->image3=Image::traitementS($this->image3,'jpg');
            }

            if ($this->image4) {
                $this->etape->image4=Image::traitementS($this->image4,'jpg');
            }

            if ($this->image5) {
                $this->etape->image5=Image::traitementS($this->image5,'jpg');
            }

            if ($this->image6) {
                $this->etape->image6=Image::traitementS($this->image6,'jpg');
            }

            if ($this->image7) {
                $this->etape->image7=Image::traitementS($this->image7,'jpg');
            }

            if ($this->image8) {
                $this->etape->image8=Image::traitementS($this->image8,'jpg');
            }

            if ($this->image9) {
                $this->etape->image9=Image::traitementS($this->image9,'jpg');
            }

            if ($this->image10) {
                $this->etape->image10=Image::traitementS($this->image10,'jpg');
            }

           
    
    } catch (\Throwable $th) {
        $this->message='erreur lors du traitement de l\'image.';
        $this->showSuccesNotification = false;
        $this->showErrorNotification = true;
    }

        //dd($reponse);
        if (sizeOf($reponse)!=0) {
        try {
            $this->etape->save();
            $this->message='Informations modifiées avec succès.';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
            $this->modification=null;
            $this->image=null;

        } catch (\Throwable $th) {
            $this->showErrorNotification = true;
            $this->showSuccesNotification = false;

            $this->message='Erreur lors de la modification des informations.Veuillez recommencer!';
        }

        } else {

    
        try {
            $this->etape->save();
            $this->message='Informations enregistrées avec succès.';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
            $this->modification=null;
            $this->image=null;

        } catch (\Throwable $th) {
            $this->showErrorNotification = true;
            $this->showSuccesNotification = false;

            $this->message=$th.'Erreur lors de l\'enregistrement des informations.Veuillez recommencer!';
        }
        }
                
                    
     }
    }




    public function render()
    {
        return view('livewire.etape'); 
    }
}
