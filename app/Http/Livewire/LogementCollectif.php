<?php

namespace App\Http\Livewire;


use App\Helpers\Image;
use App\Models\actualite;
use App\Models\logementCollectif as ModelsLogementCollectif;
use App\Models\lcpage;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class LogementCollectif extends Component
{

    use WithFileUploads;

    public $modification;
    public $supp;
    public $image;
    public $imageEnt;
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
    public ModelsLogementCollectif $actualite;
    public lcpage $actualite1;

    protected $rules = [
        'actualite.titre' => 'required',
        'actualite.domaine' => 'required',
        'actualite.auteur' => 'required',
        'actualite.desc_auteur' => 'required',
        'actualite.image' => '',
        'actualite.titre1' => 'required',
        'actualite.article1' => 'required',
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
        'actualite1.imageEnt'=> '',
        'actualite1.titre'=> '',
        ];


    public function mount(){
        $this->actualite=ModelsLogementCollectif::make();

        $reponse=lcpage::get();
        if (sizeOf($reponse)!=0) {
            $this->actualite1=lcpage::make();
            $this->actualite1=lcpage::first();
        } else {
            $this->actualite1=lcpage::make();

        }
        
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
    }

    public function updatedImage(){
        $this->validate([
            'image' => 'image|max:100000', // 1MB Max
        ]);
        
    }


    public function updatedImageEnt(){
        $this->validate([
            'imageEnt' => 'image|max:100000', // 1MB Max
        ]);
        
    }


    public function getactualitesProperty(){
        return ModelsLogementCollectif::get();
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

        $reponse=ModelsLogementCollectif::find($id);
        for ($i=1; $i<6 ; $i++) { 
            File::delete(public_path("/app/actualite/image$i"));
        }

        try {
            $reponse=ModelsLogementCollectif::destroy($id);
            ModelsLogementCollectif::make();
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
        
        $this->actualite=ModelsLogementCollectif::find($id);
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
        $this->actualite=ModelsLogementCollectif::make();
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

    
    public function save_lcPage(){
        ini_set('memory_limit', '-1');
        

        $reponse=lcpage::count();

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
        
        if ($reponse==0) {
          
          
                
    
                lcpage::where([
                    ['id','<>',0]
                ])
                ->delete();
    
    
                $this->validate(
                    [
                        'actualite1.description'=> '',
                        'actualite1.description2'=> '',
                        'actualite1.image'=> '',
                        'actualite1.imageEnt'=> '',
                        'actualite1.titre'=> '',
                    ]
                );
                $this->actualite1->save();
                $this->message='Parramétrage  enregistré avec succès';
                $this->showSuccesNotification1= true;
                $this->showErrorNotification1 = false;
                $this->imageC2=null;   
            
        } else {


            $this->validate(
                [
                    'actualite1.description'=> '',
        'actualite1.description2'=> '',
        'actualite1.image'=> '',
        'actualite1.imageEnt'=> '',
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


    public function render()
    {
        return view('livewire.logement-collectif');
    }
}
