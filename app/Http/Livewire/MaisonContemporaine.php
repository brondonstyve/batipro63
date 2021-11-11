<?php

namespace App\Http\Livewire;

use App\Helpers\Image;
use App\Models\actualite;
use App\Models\maisonContemporaine as ModelsMaisonContemporaine;
use App\Models\mcpage;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class MaisonContemporaine extends Component
{

    use WithFileUploads;

    public $modification;
    public $supp;
    public $imageEnt;
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
    public ModelsMaisonContemporaine $actualite;
    public mcpage $actualite1;

    protected $rules = [
        'actualite.titre' => 'required',
        'actualite.domaine' => '',
        'actualite.auteur' => '',
        'actualite.desc_auteur' => '',
        'actualite.image' => '',
        'actualite.titre1' => '',
        'actualite.article1' => '',
        'actualite.video1'=> '',
        'actualite.titre2'=> '',
        'actualite.article2'=> '',
        'actualite.video2'=> '',
        'actualite.titre3'=> '',
        'actualite.article3'=> '',
        'actualite.video3'=> '',
        'actualite.titre4'=> '',
        'actualite.article4'=> '',
        'actualite.video4'=> '',
        'actualite.titre5'=> '',
        'actualite.article5'=> '',
        'actualite.video5'=> '',

        'actualite1.description'=> '',
        'actualite1.description2'=> '',
        'actualite1.image'=> '',
        'actualite1.titre'=> '',
        ];


    public function mount(){
        $this->actualite=ModelsMaisonContemporaine::make();

        $reponse=mcpage::get();
        if (sizeOf($reponse)!=0) {
            $this->actualite1=mcpage::make();
            $this->actualite1=mcpage::first();
        } else {
            $this->actualite1=mcpage::make();

        }
        
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
    }

    public function getactualitesProperty(){
        return ModelsMaisonContemporaine::get();
    }

    public function updatedImage(){
        $this->validate([
            'image' => 'image|max:100000', // 1MB Max
        ]);
         
    }

    public function save(){
        ini_set('memory_limit', '-1');
        if(env('IS_DEMO')) { 
            $this->showDemoNotification = true;
         } else {

            try {
                if ($this->image) {
                    $this->actualite->image=Image::traitementA($this->image,'png',1920,1095);
                }

               
                
        } catch (\Throwable $th) {
            $this->message='erreur lors du traitement des images.';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
        }
            
            if ($this->modification==null) {
                
                try {
                    $this->validate(
                        [
                            'actualite.titre' => 'required',
                            'actualite.domaine' => '',
                            'actualite.auteur' => '',
                            'actualite.desc_auteur' => '',
                            'actualite.image' => '',
                            'actualite.titre1' => '',
                            'actualite.article1' => '',
                            'actualite.video1'=> '',
                            'actualite.titre2'=> '',
                            'actualite.article2'=> '',
                            'actualite.video2'=> '',
                            'actualite.titre3'=> '',
                            'actualite.article3'=> '',
                            'actualite.video3'=> '',
                            'actualite.titre4'=> '',
                            'actualite.article4'=> '',
                            'actualite.video4'=> '',
                            'actualite.titre5'=> '',
                            'actualite.article5'=> '',
                            'actualite.video5'=> '',
                        ]
                    );
                    $this->actualite->save();
                    $this->actualite=ModelsMaisonContemporaine::make();
                    $this->message='Enregistrement ajouté avec succès.';
                    $this->showSuccesNotification = true;
                    $this->showErrorNotification = false;
                    $this->modification=null;
                    $this->image1=null;
                    $this->image2=null;
                    $this->image3=null;
                    $this->image4=null;
                    $this->image5=null;
                    $this->image=null;
                    $this->collapse='collapse';


                } catch (\Throwable $th) {
                    $this->showErrorNotification = true;
                    $this->showSuccesNotification = false;

                    $this->message=$th.'Erreur lors de l\'enregistrement.Veuillez recommencer!';
                }
                
            } else {
                
                
                    try {
                        
                            $this->validate(
                                [
                                    'actualite.titre' => 'required',
                                    'actualite.domaine' => '',
                                    'actualite.auteur' => '',
                                    'actualite.desc_auteur' => '',
                                    'actualite.image' => '',
                                    'actualite.titre1' => '',
                                    'actualite.article1' => '',
                                    'actualite.video1'=> '',
                                    'actualite.titre2'=> '',
                                    'actualite.article2'=> '',
                                    'actualite.video2'=> '',
                                    'actualite.titre3'=> '',
                                    'actualite.article3'=> '',
                                    'actualite.video3'=> '',
                                    'actualite.titre4'=> '',
                                    'actualite.article4'=> '',
                                    'actualite.video4'=> '',
                                    'actualite.titre5'=> '',
                                    'actualite.article5'=> '',
                                    'actualite.video5'=> '',
                                ]
                        );

                        $this->actualite->save();
                        $this->actualite=ModelsMaisonContemporaine::make();
                        $this->message='Enregistrement modifiée avec succès.';
                        $this->showSuccesNotification = true;
                        $this->showErrorNotification = false;
                        $this->modification=null;
                        $this->image=null;
                        $this->image1=null;
                        $this->image2=null;
                        $this->image3=null;
                        $this->image4=null;
                        $this->image5=null;
                        $this->collapse='collapse';


                    } catch (\Throwable $th) {
                        $this->showErrorNotification = true;
                        $this->showSuccesNotification = false;
    
                        $this->message='Erreur lors de la modification.Veuillez recommencer!';
                    }

            }
         }
    }

    public function delete($id){

        $reponse=ModelsMaisonContemporaine::find($id);
        for ($i=1; $i<6 ; $i++) { 
            File::delete(public_path("/app/actualite/image$i"));
        }

        try {
            $reponse=ModelsMaisonContemporaine::destroy($id);
            ModelsMaisonContemporaine::make();
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
        
        $this->actualite=ModelsMaisonContemporaine::find($id);
        $this->modification=2;
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
        $this->message = null;

        $this->collapse="";
        
    }

    public function updatedActualite(){
        $this->collapse='';
    }


    public function annuler(){
        
        $this->modification=false;
        $this->actualite=ModelsMaisonContemporaine::make();
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
        $this->message = null;
        $this->collapse='collapse';
    }

    
    public function removeImg($id,$num){

        //dd($id,$num);
        File::delete(public_path("/app/actualite/$id"));

        if ($num==1) {
        $this->actualite->image1=null;
        }
            if ($num==2) {
            $this->actualite->image2=null;
            }

                if ($num==3) {
                $this->actualite->image3=null;
                }

                    if ($num==4) {
                    $this->actualite->image4=null;
                    }

                        if ($num==5) {
                        $this->actualite->image5=null;
                        }
        $this->actualite->save();

    }

    
    public function save_mcPage(){
        
        ini_set('memory_limit', '-1');

        $reponse=mcpage::count();
        
        if ($reponse==0) {
          
            try {
                if ($this->imageC2) {
                    $this->actualite1->image=Image::traitementMV($this->imageC2,'png',1700,1133);
                }

                if ($this->imageEnt) {
                    $this->actualite1->imageEnt=Image::traitementS($this->imageEnt,'png');
                    
                }
                
        } catch (\Throwable $th) {
            $this->message='erreur lors du traitement de l\'images.';
            $this->showSuccesNotification1 = false;
            $this->showErrorNotification1 = true;
        }
                
    
                mcpage::where([
                    ['id','<>',0]
                ])
                ->delete();
    
    
                $this->validate(
                    [
                        'actualite1.description'=> '',
                        'actualite1.description2'=> '',
                        'actualite1.image'=> '',
                        'actualite1.titre'=> '',
                    ]
                );
                $this->actualite1->save();
                $this->message='Parramétrage  enregistré avec succès';
                $this->showSuccesNotification1= true;
                $this->showErrorNotification1 = false;
                $this->imageC2=null;   
            
        } else {

            try {
                if ($this->imageC2) {
                    $this->actualite1->image=Image::traitementMV($this->imageC2,'png',1700,1133);
                }

                if ($this->imageEnt) {
                    $this->actualite1->imageEnt=Image::traitementS($this->imageEnt,'png');
                    
                }
                
        } catch (\Throwable $th) {
            $this->message='erreur lors du traitement de l\'images.';
            $this->showSuccesNotification1 = false;
            $this->showErrorNotification1 = true;
        }

            $this->validate(
                [
                    'actualite1.description'=> '',
        'actualite1.description2'=> '',
        'actualite1.image'=> '',
        'actualite1.titre'=> '',
                ]
            );
            
            $this->actualite1->save();
            $this->message='Parramétrage mis à jour avec succès';
            $this->showSuccesNotification1 = true;
            $this->showErrorNotification1 = false;
            $this->imageC2=null; 


        }
    }

    public function updatedImageEnt(){
        $this->validate([
            'imageEnt' => 'image|max:100000', // 1MB Max
        ]);
        
    }



    public function render()
    {
        return view('livewire.maison-contemporaine');
    }
}
