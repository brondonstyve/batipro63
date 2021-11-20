<?php

namespace App\Http\Livewire;

use App\Helpers\Image;
use App\Models\home;
use Livewire\Component;
use Livewire\WithFileUploads;

class HomeConfig extends Component
{
    use WithFileUploads;
    public home $home;

    public $showSuccesNotification  = false;
    public $showErrorNotification  = false;
    public $erreur  = false;
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


    protected $rules=[
        'home.imageMc'=>'',
        'home.imageLc'=>'',
        'home.imageMg'=>'',
        'home.titreVert1'=>'',
        'home.titre1'=>'',
        'home.slogan1'=>'',
        'home.resume1'=>'',
        'home.image1'=>'',
        'home.titreVert2'=>'',
        'home.titre2'=>'',
        'home.slogan2'=>'',
        'home.resume2'=>'',
        'home.titreVert3'=>'',
        'home.titre3'=>'',
        'home.slogan3'=>'',
        'home.resume3'=>'',
        'home.petiteImage1'=>'',
        'home.slogan4'=>'',
        'home.resume4'=>'',
        'home.petiteImage2'=>'',
        'home.slogan5'=>'',
        'home.resume5'=>'',
        'home.petiteImage3'=>'',
        'home.slogan6'=>'',
        'home.resume6'=>'',
        'home.petiteImage4'=>'',
        'home.slogan7'=>'',
        'home.resume7'=>'',
        'home.slogan8'=>'',
        'home.resume8'=>'',
        'home.savoir'=>'',
        'home.offre'=>'',
        'home.video'=>'',
        'home.titreE'=>'',
        'home.descriptionE'=>'',
        'home.imageE'=>'',
    ];


    public function mount(){
        
        

        $reponse=home::get();
        //dd($reponse);
        if (sizeOf($reponse)!=0) {
            $this->home=home::make();
            $this->home=home::first();
        } else {
            $this->home=home::make();

        }
    }

    public function updatedHome(){
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
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


    public function save(){
        ini_set('memory_limit', '-1');
        // 100M et mon php.ini  = 50M et  = 50M
        $reponse=home::count();
        
        if ($reponse==0) {
            
    
            try {
                if ($this->image1) {
                    $this->home->imageMc=Image::traitementHome($this->image1,'png',1420,800);
                    
                }
    
                if ($this->image2) {
                    $this->home->imageLc=Image::traitementHome($this->image2,'png',1420,800);
                    
    
                }
    
                if ($this->image3) {
                    $this->home->imageMg=Image::traitementHome($this->image3,'png',1420,800);
    
                }
    
                if ($this->image4) {
                    $this->home->image1=Image::traitementHome($this->image4,'png',457,665);
    
                }
    
                if ($this->image5) {
                    $this->home->petiteImage1=Image::traitementHome($this->image5,'png',64,64);
                    
    
                }
    
                if ($this->image6) {
                    $this->home->petiteImage2=Image::traitementHome($this->image6,'png',64,64);
                    
    
                }
    
                if ($this->image5) {
                    $this->home->petiteImage3=Image::traitementHome($this->image7,'png',64,64);
                    
    
                }
    
                if ($this->image5) {
                    $this->home->petiteImage4=Image::traitementHome($this->image8,'png',64,64);
                    
    
                }

                if ($this->image9) {
                    $this->home->ImageE=Image::traitementHome($this->image9,'png',0,0);
                    
    
                }
                
            } catch (\Throwable $th) {
                    $this->message='erreur lors du traitement des images.';
                    $this->showSuccesNotification = false;
                    $this->showErrorNotification = true;
                    $this->erreur=true;
                    $this->mount();
            }

            if (!$this->erreur) {
                
    
                home::where([
                    ['id','<>',0]
                ])
                ->delete();
    
    
                $this->validate();
                $this->home->save();
                $this->message='Parramétrage de la page d\'accueil enregistré avec succès';
                $this->showSuccesNotification = true;
                $this->showErrorNotification = false;
                $this->image1=null;
                $this->image2=null;
                $this->image3=null;
                $this->image4=null;
                $this->image5=null;
                $this->image6=null;       
                $this->image7=null;       
                $this->image8=null;   
                $this->image9=null;   
                $this->erreur=false;    
            }
        } else {


            try {
                if ($this->image1) {
                    $this->home->imageMc=Image::traitementHome($this->image1,'png',1420,800);
                    
                }
    
                if ($this->image2) {
                    $this->home->imageLc=Image::traitementHome($this->image2,'png',1420,800);
                    
    
                }
    
                if ($this->image3) {
                    $this->home->imageMg=Image::traitementHome($this->image3,'png',1420,800);
    
                }
    
                if ($this->image4) {
                    $this->home->image1=Image::traitementHome($this->image4,'png',457,665);
    
                }
    
                if ($this->image5) {
                    $this->home->petiteImage1=Image::traitementHome($this->image5,'png',64,64);
                    
    
                }
    
                if ($this->image6) {
                    $this->home->petiteImage2=Image::traitementHome($this->image6,'png',64,64);
                    
    
                }
    
                if ($this->image5) {
                    $this->home->petiteImage3=Image::traitementHome($this->image7,'png',64,64);
                    
    
                }
    
                if ($this->image5) {
                    $this->home->petiteImage4=Image::traitementHome($this->image8,'png',64,64);
                    
    
                }

                if ($this->image9) {
                    $this->home->imageE=Image::traitementHome($this->image9,'png',0,0);
                    
    
                }
                
            } catch (\Throwable $th) {
                    $this->message='erreur lors du traitement des images.';
                    $this->showSuccesNotification = false;
                    $this->showErrorNotification = true;
                    $this->erreur=true;
                    $this->mount();
            }

            $this->validate();
            
            $this->home->save();
            $this->message='Parramétrage de la page d\'accueil mis à jour avec succès';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
            $this->image1=null;
            $this->image2=null;
            $this->image3=null;
            $this->image4=null;
            $this->image5=null;
            $this->image6=null;       
            $this->image7=null;       
            $this->image8=null;   
                $this->image9=null;   
                $this->erreur=false;  


        }
        
        

    }




    public function render()
    {
        return view('livewire.home-config'); 
    }
}
