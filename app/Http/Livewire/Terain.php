<?php

namespace App\Http\Livewire;

use App\Helpers\Image;
use App\Models\terrain;
use App\Models\service;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class Terain extends Component
{
    use WithFileUploads;
    public $showSuccesNotification  = false;
    public $showErrorNotification  = false;
    public $message;
    public $messageMod;
    public $modification=false;
    public $liste=true;
    public terrain $terrain;
    public $image;
    public $supp=null;
    public $urlSeeImage;
    public $idVue;
    

    protected $rules=[
        'terrain.libelle'=>'required',
        'terrain.annee'=>'required|numeric',
        'terrain.superficie'=>'required|numeric',
        'terrain.description'=>'required',
        'terrain.lieu'=>'required',
        'terrain.statut'=>'required',
    ];

    public function mount(){
        $this->terrain=terrain::make();
    }

    public function new(){
        $this->liste=false;
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
    }

    public function updatedImage(){

        $this->validate([
            'image.*' => 'image|max:100000', // 1MB Max
        ]);

        if (!$this->modification) {
            
            if (sizeOf($this->image)>6) {
                $this->image=null;
                $this->fill(['image'=>null]);
                session()->flash('image','Vous ne pouvez télécharger que 6 images maximun');
            }
            $this->imageAnc=null;
        }
        
        
    }

    

    public function save(){
        $this->terrain->annee=0;
        ini_set('memory_limit', '-1');
        $name='';
        $principal='';
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;

        if ($this->modification) {
            if ($this->image) {
                try {
                    $name=Image::traitementP($this->image,'png',1422,500);
               } catch (\Throwable $th) {
                   $this->message='erreur lors de l\'enregistrement de l\'image.';
                   $this->showSuccesNotification = false;
                   $this->showErrorNotification = true;
               }

               try {
            
                $this->validate();
                $this->terrain->image=$this->terrain->image.'->'.$name;
                $this->terrain->save();
                $this->terrain=terrain::make();
                $this->message='terrain Modifié avec succès.';
                $this->showSuccesNotification = true;
                $this->showErrorNotification = false;
                $this->modification=false;
                $this->image=null;
                $this->liste=true;
    
            } catch (\Throwable $th) {
                $this->message='erreur lors de la modification du terrain.';
                $this->showSuccesNotification = false;
                $this->showErrorNotification = true;
            }
    
            }else {
                try {
            
                    $this->validate();
                    $this->terrain->save();
                    $this->terrain=terrain::make();
                    $this->message='terrain Modifié avec succès.';
                    $this->showSuccesNotification = true;
                    $this->showErrorNotification = false;
                    $this->modification=false;
                    $this->image=null;
                    $this->liste=true;
        
                } catch (\Throwable $th) {
                    $this->message='erreur lors de la modification du terrain.';
                    $this->showSuccesNotification = false;
                    $this->showErrorNotification = true;
                }
            }
            

        } else {

        try {
            
             foreach ($this->image as $key => $value) {
             $name=$name.'->'.Image::traitementP($this->image[$key],'png',1422,500);
            }
        } catch (\Throwable $th) {
            $this->message='erreur lors de l\'enregistrement des images.';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
        }

        $principal=explode('->',$name)[1];
        

        try {
            
            $this->validate();
            $this->terrain->image=$name;
            $this->terrain->img_principale=$principal;
            $this->terrain->save();
            $this->terrain=terrain::make();
            $this->message='terrain ajouté avec succès.';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
            $this->modification=false;
            $this->image=null;
            $this->liste=true;

        } catch (\Throwable $th) {
            $this->message=$th.'erreur lors de l\'enregistrement du terrain.';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
        }
        }
    }


    public function getListProjectProperty(){
        return terrain::get();
    }

    public function delete($id){
       try {
            $reponse=terrain::find($id);
            terrain::destroy($id);

            $newProjectImages=explode('->',$reponse->image);
            
            foreach ($newProjectImages as $key => $value) {
                if ($key>0 && $value!=$id ) {
                    File::delete(public_path("/app/terrain/$value"));
                }
            }

            

            $this->message='terrain supprimé avec succès.';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
       } catch (\Throwable $th) {
            $this->message='erreur lors de la suppression du terrain.';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
       }
    }

    public function voir($id){
        $this->terrain=terrain::find($id);
        $this->liste=false;
        $this->modification=true;
    }

    public function annuler(){

        
        $this->terrain=terrain::make();
        $this->liste=true;
        $this->image=null;
        $this->modification=false;
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
    }

    public function removeImg($id){


        $newProjectImages=explode('->',$this->terrain->image);

        if ($this->terrain->img_principale==$id) {
            $this->message='Erreur! Impossible de supprimer l\'image principale';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
        } else {
            
        if (sizeOf($newProjectImages)==2) {
            $this->message='Erreur! Vous ne pouvez pas supprimer la dernière image';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
        }else {
            $name='';
        foreach ($newProjectImages as $key => $value) {
            if ($key>0 && $value!=$id ) {
                $name=$name.'->'.$value;

            }
        }

        File::delete(public_path("/app/terrain/$id"));
        $this->terrain->image=$name;
        $this->terrain->save();
        }
        }

    }
    

    public function seeImage($id,$idP){
        $this->urlSeeImage=$id;
        $this->idVue=$idP;
       
    }

    public function definrP($id){
        $this->terrain->img_principale=$id;
        $this->terrain->save();
        $this->message='image principal modifié avec succès';
        $this->showSuccesNotification = true;
        $this->showErrorNotification = false;
    }
    public function render()
    {
        return view('livewire.terain');
    }
}
