<?php

namespace App\Http\Livewire;

use App\Helpers\Image;
use App\Models\mgpage;
use Livewire\Component;
use Livewire\WithFileUploads;

class MoconnerieGenerale extends Component
{

    use WithFileUploads;

    public $showSuccesNotification1  = false;
    public $showErrorNotification1  = false;
    public $message;
    public $imageEnt;

    public mgpage $actualite1;

    protected $rules = [

        'actualite1.description'=> '',
        'actualite1.description2'=> '',
        'actualite1.image'=> '',
        'actualite1.titre'=> '',
        'actualite1.imageEnt'=> '',
        ];

        public function mount(){
    
            $reponse=mgpage::get();
            if (sizeOf($reponse)!=0) {
                $this->actualite1=mgpage::make();
                $this->actualite1=mgpage::first();
            } else {
                $this->actualite1=mgpage::make();
    
            }
            
            $this->showSuccesNotification = false;
            $this->showErrorNotification = false;
        }


        public function updatedImageEnt(){
            $this->validate([
                'imageEnt' => 'image|max:100000', // 1MB Max
            ]);
            
        }


        public function save_mgPage(){
        

            try {
                if ($this->imageEnt) {
                    $this->actualite1->imageEnt=Image::traitementS($this->imageEnt,'png');
                    
                }
                
        } catch (\Throwable $th) {
            $this->message='erreur lors du traitement de l\'images.';
            $this->showSuccesNotification1 = false;
            $this->showErrorNotification1 = true;
        }

            $reponse=mgpage::count();
            
            if ($reponse==0) {
             
        
                    mgpage::where([
                        ['id','<>',0]
                    ])
                    ->delete();
        
        
                    $this->validate();
                    $this->actualite1->save();
                    $this->message='Parramétrage  enregistré avec succès';
                    $this->showSuccesNotification1= true;
                    $this->showErrorNotification1 = false;  
                
            } else {
    
    
                $this->validate();
                
                $this->actualite1->save();
                $this->message='Parramétrage mis à jour avec succès';
                $this->showSuccesNotification1 = true;
                $this->showErrorNotification1 = false;
    
    
            }
        }

    public function render()
    {
        return view('livewire.moconnerie-generale');
    }
}
