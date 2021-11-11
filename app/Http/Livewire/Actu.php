<?php

namespace App\Http\Livewire;

use App\Helpers\Image;
use App\Models\actualite;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class Actu extends Component
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
    public $showSuccesNotification  = false;
    public $showErrorNotification  = false;
    public $message;
    public actualite $actualite;

    protected $rules = [
        'actualite.titre' => 'required',
        'actualite.domaine' => 'required',
        'actualite.auteur' => 'required',
        'actualite.desc_auteur' => 'required',
        'actualite.image' => '',
        'actualite.image1' => '',
        'actualite.image2' => '',
        'actualite.image3' => '',
        'actualite.image4' => '',
        'actualite.image5' => '',
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
        ];


    public function mount(){
        $this->actualite=actualite::make();
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
    }



    public function updatedImage1()
    {
        $this->collapse='';
        $this->validate([
            'image1' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage2()
    {
        $this->collapse='';
        $this->validate([
            'image2' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage3()
    {
        $this->collapse='';
        $this->validate([
            'image3' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage4()
    {
        $this->collapse='';
        $this->validate([
            'image4' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage5()
    {
        $this->collapse='';
        $this->validate([
            'image5' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage(){
        $this->collapse='';
        $this->validate([
            'image' => 'image|max:100000', // 1MB Max
        ]);
        
    }



    public function getactualitesProperty(){
        return actualite::get();
    }

    public function save(){
        ini_set('memory_limit', '-1');
        if(env('IS_DEMO')) { 
            $this->showDemoNotification = true;
         } else {

            try {
                if ($this->image1) {
                    $name=Image::traitementA($this->image,'png',1920,1095);
                    $this->actualite->image=$name;
                }

                if ($this->image1) {
                    $name1=Image::traitementA($this->image1,'png',1920,1095);
                    $this->actualite->image1=$name1;
                }

                if ($this->image2) {
                    $name2=Image::traitementA($this->image2,'png',1920,1095);
                    $this->actualite->image2=$name2;

                }

                if ($this->image3) {
                    $name3=Image::traitementA($this->image3,'png',1920,1095);
                    $this->actualite->image3=$name3;

                }

                if ($this->image4) {
                    $name4=Image::traitementA($this->image4,'png',1920,1095);
                    $this->actualite->image4=$name4;

                }

                if ($this->image5) {
                    $name5=Image::traitementA($this->image5,'png',1920,1095);
                    $this->actualite->image5=$name5;

                }
                
        } catch (\Throwable $th) {
            $this->message='erreur lors du traitement des images.';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
        }
        
            if ($this->modification==null) {
                
                try {
                    $this->validate();
                    $this->actualite->save();
                    $this->actualite=actualite::make();
                    $this->message='actualite ajouté avec succès.';
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

                    $this->message=$th.'Erreur lors de l\'enregistrement de l\'actualité.Veuillez recommencer!';
                }
                
            } else {
                
                
                    try {
                        $this->validate();
                        $this->actualite->save();
                        $this->actualite=actualite::make();
                        $this->message='actualité modifiée avec succès.';
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
    
                        $this->message='Erreur lors de la modification de l\'actualité.Veuillez recommencer!';
                    }

            }
         }
    }

    public function delete($id){

        $reponse=actualite::find($id);
        for ($i=1; $i<6 ; $i++) { 
            File::delete(public_path("/app/actualite/image$i"));
        }

        try {
            $reponse=actualite::destroy($id);
            actualite::make();
            $this->message='actualité supprimée avec succès.';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
        } catch (\Throwable $th) {
            $this->showErrorNotification = true;
            $this->showSuccesNotification = false;
            $this->message='Erreur lors de la suppression!';
        }
        
    }

    public function update($id){
        
        $this->actualite=actualite::find($id);
        $this->modification=2;
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
        $this->collapse="";
        
    }

    public function updatedActualite(){
        $this->collapse='';
    }

    

    public function annuler(){
        
        $this->message = null;
        $this->collapse='collapse';
        $this->modification=false;
        $this->actualite=actualite::make();
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
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

    
    public function render()
    {
        return view('livewire.actu');
    } 
}
