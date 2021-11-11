<?php


namespace App\Http\Livewire;

use App\Helpers\Image;
use App\Models\maison;
use App\Models\maisonpage;
use App\Models\service;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class MaisonVirtuelle extends Component
{
    use WithFileUploads;
    public $showSuccesNotification  = false;
    public $showErrorNotification  = false;
    public $showSuccesNotification1  = false;
    public $showErrorNotification1  = false;
    public $message;
    public $messageMod;
    public $modification=false;
    public $liste=true;
    public maison $maison;
    public maisonpage $maisonpage;
    public $image;
    public $supp=null;
    public $urlSeeImage;
    public $idVue;
    

    protected $rules=[
        'maison.libelle'=>'required',
        'maison.annee'=>'required|numeric',
        'maison.duree'=>'required|numeric',
        'maison.description'=>'required',
        'maison.lieu'=>'required',


        'maisonpage.description'=> '',
        'maisonpage.titre'=> '',
    ];

    

    public function mount(){

        $reponse=maisonpage::get();
        if (sizeOf($reponse)!=0) {
            $this->maisonpage=maisonpage::make();
            $this->maisonpage=maisonpage::first();
        } else {
            $this->maisonpage=maisonpage::make();

        }

        $this->maison=maison::make();
    }

    public function new(){
        $this->liste=false;
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
    }

    public function updatedImage(){

        if (!$this->modification) {
            
            $this->validate([
                'image.*' => 'image|max:100000', // 1MB Max
            ]);
            
            if (sizeOf($this->image)>3) {
                $this->image=null;
                $this->fill(['image'=>null]);
                session()->flash('image','Vous ne pouvez télécharger que 6 images maximun');
            }
            $this->imageAnc=null;
        }
        
        
    }

    public function save(){
        ini_set('memory_limit', '-1');
        $name='';
        $principal='';
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;

        if ($this->modification) {
            if ($this->image) {
                try {
                    $name=Image::traitementMV($this->image,'png',1422,500);
               } catch (\Throwable $th) {
                   $this->message='erreur lors de l\'enregistrement de l\'image.';
                   $this->showSuccesNotification = false;
                   $this->showErrorNotification = true;
               }

               try {
            
                $this->validate();
                $this->maison->image=$this->maison->image.'->'.$name;
                $this->maison->save();
                $this->maison=maison::make();
                $this->message='maison Modifiée avec succès.';
                $this->showSuccesNotification = true;
                $this->showErrorNotification = false;
                $this->modification=false;
                $this->image=null;
                $this->liste=true;
    
            } catch (\Throwable $th) {
                $this->message='erreur lors de la modification du maison.';
                $this->showSuccesNotification = false;
                $this->showErrorNotification = true;
            }
    
            }else {
                try {
            
                    $this->validate();
                    $this->maison->save();
                    $this->maison=maison::make();
                    $this->message='maison Modifiée avec succès.';
                    $this->showSuccesNotification = true;
                    $this->showErrorNotification = false;
                    $this->modification=false;
                    $this->image=null;
                    $this->liste=true;
        
                } catch (\Throwable $th) {
                    $this->message='erreur lors de la modification du maison.';
                    $this->showSuccesNotification = false;
                    $this->showErrorNotification = true;
                }
            }
            

        } else {

        try {
            
             foreach ($this->image as $key => $value) {
             $name=$name.'->'.Image::traitementMV($this->image[$key],'png',1422,500);
            }
        } catch (\Throwable $th) {
            $this->message='erreur lors de l\'enregistrement des images.';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
        }

        $principal=explode('->',$name)[1];
        

        try {
            
            $this->validate();
            $this->maison->image=$name;
            $this->maison->img_principale=$principal;
            $this->maison->save();
            $this->maison=maison::make();
            $this->message='maison ajoutée avec succès.';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
            $this->modification=false;
            $this->image=null;
            $this->liste=true;

        } catch (\Throwable $th) {
            $this->message='erreur lors de l\'enregistrement du maison.';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
        }
        }
    }


    public function getListProjectProperty(){
        return maison::get();
    }

    public function delete($id){
       try {
            $reponse=maison::find($id);
            maison::destroy($id);

            $newProjectImages=explode('->',$reponse->image);
            
            foreach ($newProjectImages as $key => $value) {
                if ($key>0 && $value!=$id ) {
                    File::delete(public_path("/app/maison/$value"));
                }
            }

            

            $this->message='maison supprimée avec succès.';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
       } catch (\Throwable $th) {
            $this->message='erreur lors de la suppression du maison.';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
       }
    }

    public function voir($id){
        $this->maison=maison::find($id);
        $this->liste=false;
        $this->modification=true;
    }

    public function annuler(){

        
        $this->maison=maison::make();
        $this->liste=true;
        $this->modification=false;
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
    }

    public function removeImg($id){


        $newProjectImages=explode('->',$this->maison->image);

        if ($this->maison->img_principale==$id) {
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

        File::delete(public_path("/app/maison/$id"));
        $this->maison->image=$name;
        $this->maison->save();
        }
        }

    }

    public function getServicesProperty(){
        return service::select('id','libelle')
        ->get();
    }


    public function seeImage($id,$idP){
        $this->urlSeeImage=$id;
        $this->idVue=$idP;
       
    }

    public function definrP($id){
        $this->maison->img_principale=$id;
        $this->maison->save();
        $this->message='image principal modifié avec succès';
        $this->showSuccesNotification = true;
        $this->showErrorNotification = false;
    }

    public function save_maison(){
        

        $reponse=maisonpage::count();
        
        if ($reponse==0) {
          

                
    
                maisonpage::where([
                    ['id','<>',0]
                ])
                ->delete();
    
    
                $this->validate(
                    [
                        'maisonpage.description'=> '',
                        'maisonpage.titre'=> '',
                    ]
                );
                $this->maisonpage->save();
                $this->message='Parramétrage de la page es maisons virtuelles enregistré avec succès';
                $this->showSuccesNotification1= true;
                $this->showErrorNotification1 = false;
                $this->imageEnt=null;   
            
        } else {


            $this->validate(
                [
                    'maisonpage.description'=> '',
                    'maisonpage.titre'=> '',
                ]
            );
            
            $this->maisonpage->save();
            $this->message='Parramétrage de la page des maisons virtuelles mis à jour avec succès';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
            $this->imageEnt=null; 


        }
    }

    public function render()
    {
        return view('livewire.maison-virtuelle');
    }
}
