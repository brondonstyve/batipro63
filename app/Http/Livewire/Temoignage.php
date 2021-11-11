<?php

namespace App\Http\Livewire;


use App\Helpers\Image;
use App\Models\temoignage as modelTemoignage;
use App\Models\tpage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Temoignage extends Component
{

    use WithFileUploads;

    public $modification;
    public $supp;
    public $image;
    public $image1;
    public $collapse='collapse';
    public $image2;
    public $image3;
    public $image4;
    public $image5;
    public $imageC2;
    public $showSuccesNotification  = false; 
    public $showErrorNotification  = false;

    public $showSuccesNotification1  = false;
    public $showErrorNotification1  = false;
    public $message;
    public modelTemoignage $temoignage;
    public tpage $tpage;

    protected $rules = [
        'temoignage.auteur' => '',
        'temoignage.description' => '',
        'temoignage.lien' => 'required',
        'temoignage.type' => 'required',

        'tpage.description'=> '',
        'tpage.titre'=> '',
        'tpage.description1'=> '',
         'tpage.titre1'=> '',
         'tpage.titreEnt'=> '',
        ];


    public function mount(){
        $this->temoignage=modelTemoignage::make();

        $reponse=tpage::get();
        if (sizeOf($reponse)!=0) {
            $this->tpage=tpage::make();
            $this->tpage=tpage::first();
        } else {
            $this->tpage=tpage::make();

        }
        
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
    }



    public function getTemoignagesProperty(){
        return modelTemoignage::get();
    }

    public function save(){
        ini_set('memory_limit', '-1');
        if(env('IS_DEMO')) { 
            $this->showDemoNotification = true;
         } else {

            
            if ($this->modification==null) {
                
                try {
                    $this->validate(
                        [
                            'temoignage.auteur' => '',
                            'temoignage.description' => '',
                            'temoignage.lien' => 'required',
                        ]
                    );
                    $this->temoignage->save();
                    $this->mount();

                    $this->message='Enregistrement ajouté avec succès.';
                    $this->showSuccesNotification = true;
                    $this->showErrorNotification = false;
                    $this->modification=null;
                    $this->image=null;


                } catch (\Throwable $th) {
                    $this->showErrorNotification = true;
                    $this->showSuccesNotification = false;

                    $this->message=$th.'Erreur lors de l\'enregistrement.Veuillez recommencer!';
                }
                
            } else {
                
                
                    try {
                        
                            $this->validate(
                                [
                                    'temoignage.auteur' => '',
                                    'temoignage.description' => '',
                                    'temoignage.lien' => 'required',
                                    'temoignage.type' => '',
                                ]
                        );

                        $this->temoignage->save();
                        $this->mount();
                        $this->message='Enregistrement modifiée avec succès.';
                        $this->showSuccesNotification = true;
                        $this->showErrorNotification = false;
                        $this->modification=null;
                        $this->image=null;


                    } catch (\Throwable $th) {
                        $this->showErrorNotification = true;
                        $this->showSuccesNotification = false;
    
                        $this->message='Erreur lors de la modification.Veuillez recommencer!';
                    }

            }
         }
    }

    public function delete($id){

        $reponse=modelTemoignage::find($id);

        try {
            $reponse=modelTemoignage::destroy($id);
            modelTemoignage::make();
            $this->message='Enregistrement supprimée avec succès.';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
        } catch (\Throwable $th) {
            $this->showErrorNotification = true;
            $this->showSuccesNotification = false;
            $this->message='Erreur lors de la suppression!';
        }
        
    }

    public function update($id){
        
        $this->temoignage=modelTemoignage::find($id);
        $this->modification=2;
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
        $this->message = null;

        $this->collapse="";
        
    }

  


    public function annuler(){
        
        $this->modification=false;
        $this->temoignage=modelTemoignage::make();
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
        $this->message = null;
        $this->collapse='collapse';
    }

    
   

    
    public function save_tPage(){
        ini_set('memory_limit', '-1');
        

        $reponse=tpage::count();
        
        if ($reponse==0) {
                
    
                tpage::where([
                    ['id','<>',0]
                ])
                ->delete();
    
    
                $this->validate(
                    [
                        'tpage.description'=> '',
                        'tpage.titre'=> '',
                        'tpage.description1'=> '',
                        'tpage.titre1'=> '',
                        'tpage.titreEnt'=> '',

                    ]
                );
                $this->tpage->save();
                $this->message='Parramétrage  enregistré avec succès';
                $this->showSuccesNotification1= true;
                $this->showErrorNotification1 = false;
                $this->imageC2=null;   
            
        } else {

            $this->validate(
                [
                    'tpage.description'=> '',
                    'tpage.titre'=> '',
                    'tpage.description1'=> '',
                    'tpage.titre1'=> '',
                    'tpage.titreEnt'=> '',

                ]
            );
            
            $this->tpage->save();
            $this->message='Parramétrage mis à jour avec succès';
            $this->showSuccesNotification1 = true;
            $this->showErrorNotification1 = false;
            $this->imageC2=null; 


        }
    }

        public function render()
        {
            return view('livewire.temoignage');
        }
}    