<?php

namespace App\Http\Livewire;

use App\Helpers\Image;
use App\Models\service;
use App\Models\servicepage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Tables extends Component
{

    use WithFileUploads;

    public $modification;
    public $supp;
    public $showSuccesNotification  = false;
    public $showErrorNotification  = false;
    public $showSuccesNotification1  = false;
    public $showErrorNotification1  = false;
    public $message;
    public $erreur;
    public $imageEnt;
    public $imagebas;
    public $image;
    public service $service;
    public servicepage $servicePage;

    protected $rules = [
        'service.libelle' => 'required',
        'service.description' => 'required',
        'service.diminutif' => 'min:1',
        'service.lien' => '',

        'servicePage.description'=> '',
        'servicePage.descriptionEnt'=> '',
        'servicePage.surface'=> '',
        'servicePage.imageEnt'=> '',
        'servicePage.projetnb'=> '',
        'servicePage.imagebas'=> '',
    ];


    public function mount(){
        $this->service=service::make();
        
        $reponse=servicepage::get();
        if (sizeOf($reponse)!=0) {
            $this->servicePage=servicepage::make();
            $this->servicePage=servicePage::first();
        } else {
            $this->servicePage=servicepage::make();

        }
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
    }

    public function getServicesProperty(){
        return service::get();
    }

    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImagebas()
    {
        $this->validate([
            'imagebas' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function save(){

        ini_set('memory_limit', '-1');
        try {
            if ($this->image) {
                $this->service->diminutif=Image::traitementServiceI($this->image,'png',152,51);
                
            }
            
        } catch (\Throwable $th) {
                $this->message='erreur lors du traitement des images.';
                $this->showSuccesNotification1 = false;
                $this->showErrorNotification1 = true;
                $this->erreur=true;
                $this->mount();
        }
        
        if(env('IS_DEMO')) { 
            $this->showDemoNotification = true;
         } else {

            $reponse=service::whereLibelle($this->service->libelle)->first();
            
            if ($this->modification==null) {
                if ($reponse) {
                    $this->showErrorNotification = true;
                    $this->showSuccesNotification = false;

                    $this->message='Erreur lors de l\'enregistrement du service.Ce service existe déjà.';
            } else {
                try {
                    $this->validate(
                        [
                            'service.libelle' => 'required',
                            'service.description' => 'required',
                            'service.diminutif' => 'min:1',
                            'service.lien' => '',
        ]
                    );
                    $this->service->save();
                    $this->service=service::make();
                    $this->message='Service ajouté avec succès.';
                    $this->showSuccesNotification = true;
                    $this->showErrorNotification = false;
                    $this->modification=null;

                } catch (\Throwable $th) {
                    $this->showErrorNotification = true;
                    $this->showSuccesNotification = false;

                    $this->message='Erreur lors de l\'enregistrement du service.Veuillez recommencer!';
                }
            }
            } else {
                
                if ($reponse) {
                    if ($this->service->id!=$reponse->id) {
                        
                        $this->showErrorNotification = true;
                        $this->showSuccesNotification = false; 
    
                        $this->message='Erreur lors de la modifiaction du service.Ce service existe déjà!';
                    }else{
                        try {
                            $this->validate(
                                [
                                    'service.libelle' => 'required',
                                    'service.description' => 'required',
                                    'service.diminutif' => 'min:1',
                                    'service.lien' => ''
                                ]
                            );
                            $this->service->save();
                            $this->service=service::make();
                            $this->message='Service modifié avec succès.';
                            $this->showSuccesNotification = true;
                            $this->showErrorNotification = false;
                            $this->modification=null;

                        } catch (\Throwable $th) {
                            $this->showErrorNotification = true;
                            $this->showSuccesNotification = false;
        
                            $this->message='Erreur lors de la modification du service.Veuillez recommencer!';
                        }
                    }
                } else {
                    try {
                        $this->validate(
                            [
                                'service.libelle' => 'required',
                                'service.description' => 'required',
                                'service.diminutif' => 'min:1',
                                'service.lien' => ''
                            ]
                        );
                        $this->service->save();
                        $this->service=service::make();
                        $this->message='Service modifié avec succès.';
                        $this->showSuccesNotification = true;
                        $this->showErrorNotification = false;
                        $this->modification=null;

                    } catch (\Throwable $th) {
                        $this->showErrorNotification = true;
                        $this->showSuccesNotification = false;
    
                        $this->message='Erreur lors de la modification du service.Veuillez recommencer!';
                    }
                }
                

                

            }
         }
         $this->image=null;
    }

    public function delete($id){

        try {
            $reponse=service::destroy($id);
            $this->message='Service supprimé avec succès.';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
        } catch (\Throwable $th) {
            $this->showErrorNotification = true;
            $this->showSuccesNotification = false;
            $this->message='Erreur lors de la suppression!';
        }
        
    }

    public function update($id){
        $this->service=service::find($id);
        $this->modification=2;
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;
    }

    public function annuler(){
        $this->modification=null;

        $this->service=service::make();
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;
    }

    public function updatedImageEnt()
    {
        $this->validate([
            'imageEnt' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function save_visuel(){
        
        ini_set('memory_limit', '-1');

        $reponse=servicepage::count();
        
        if ($reponse==0) {
            
    
            try {
                if ($this->imageEnt) {
                    $this->servicePage->imageEnt=Image::traitementService($this->imageEnt,'png',1420,800);
                    
                }

                if ($this->imagebas) {
                    $this->servicePage->imagebas=Image::traitementService($this->imagebas,'png',1420,800);
                    
                }
                
            } catch (\Throwable $th) {
                    $this->message='erreur lors du traitement des images.';
                    $this->showSuccesNotification1 = false;
                    $this->showErrorNotification1 = true;
                    $this->erreur=true;
                    $this->mount();
            }

            if (!$this->erreur) {
                
    
                servicepage::where([
                    ['id','<>',0]
                ])
                ->delete();
    
    
                $this->validate(
                    [
                        'servicePage.description'=> '',
                        'servicePage.descriptionEnt'=> '',
                        'servicePage.surface'=> '',
                        'servicePage.imageEnt'=> '',
                        'servicePage.projetnb'=> '',
                        'servicePage.imagebas'=> '',
                        ]
                );
                $this->servicePage->save();
                $this->message='Parramétrage de la page d\'accueil enregistré avec succès';
                $this->showSuccesNotification1= true;
                $this->showErrorNotification1 = false;
                $this->imageEnt=null;   
            }
        } else {


            try {
                if ($this->imageEnt) {
                    $this->servicePage->imageEnt=Image::traitementService($this->imageEnt,'png',1420,800);
                    
                }

                if ($this->imagebas) {
                    $this->servicePage->imagebas=Image::traitementService($this->imagebas,'png',1700,1133);
                    
                }
                
            } catch (\Throwable $th) {
                    $this->message='erreur lors du traitement des images.';
                    $this->showSuccesNotification1 = false;
                    $this->showErrorNotification1 = true;
                    $this->erreur=true;
                    $this->mount();
            }

            $this->validate(
                [
                    'servicePage.description'=> '',
                    'servicePage.descriptionEnt'=> '',
                    'servicePage.surface'=> '',
                    'servicePage.imageEnt'=> '',
                    'servicePage.projetnb'=> '',
                    'servicePage.imagebas'=> '',

                ]
            );
            
            $this->servicePage->save();
            $this->message='Parramétrage de la page des services mis à jour avec succès';
            $this->showSuccesNotification1 = true;
            $this->showErrorNotification1 = false;
            $this->imageEnt=null; 


        }



    }

    public function render() 
    {
        return view('livewire.tables');
    }
}
