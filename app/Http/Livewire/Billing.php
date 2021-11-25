<?php

namespace App\Http\Livewire;

use App\Helpers\Image;
use App\Models\projet;
use App\Models\projetpage;
use App\Models\service;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Billing extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme='bootstrap';
    public $showSuccesNotification  = false;
    public $showErrorNotification  = false;
    public $showSuccesNotification1  = false;
    public $showErrorNotification1  = false;
    public $message;
    public $messageMod;
    public $modification=false;
    public $liste=true;
    public projet $projet;
    public projetpage $projet_page;
    public $image;
    public $supp=null;
    public $urlSeeImage;
    public $idVue;
    public $service;
    

    protected $rules=[
        'projet.libelle'=>'required',
        'projet.annee'=>'',
        'projet.duree'=>'',
        'projet.description'=>'',
        'projet.lieu'=>'required',
        'projet.entreprise'=>'',
        'projet.service'=>'required',
        'projet.superficie'=>'',

        'projet_page.titre'=>'',
        'projet_page.description'=>'',
    ];

    public function mount(){
        $reponse=projetpage::get();
        if (sizeOf($reponse)!=0) {
            $this->projet_page=projetpage::make();
            $this->projet_page=projetpage::first();
        } else {
            $this->projet_page=projetpage::make();

        }

        $this->projet=projet::make();
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
            
        }
        
        
    }

    public function save(){

        ini_set('memory_limit', '-1');

        if ($this->projet->duree==null) {
             $this->projet->duree=0;
        }
        $name='';
        $principal='';
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;

        if ($this->modification) {
            if ($this->image) {
                try {
                    $name=Image::traitement($this->image,'png',1422,500);
               } catch (\Throwable $th) {
                   $this->message='erreur lors de l\'enregistrement de l\'image.';
                   $this->showSuccesNotification = false;
                   $this->showErrorNotification = true;
               }

               try {
            
                $this->validate(
                    [
                        'projet.libelle'=>'required',
                        'projet.annee'=>'',
                        'projet.duree'=>'',
                        'projet.description'=>'',
                        'projet.lieu'=>'required',
                        'projet.entreprise'=>'',
                        'projet.service'=>'required',
                        'projet.superficie'=>'',
                    ]
                );
                $this->projet->image=$this->projet->image.'->'.$name;
                $this->projet->save();
                $this->projet=projet::make();
                $this->message='projet Modifié avec succès.';
                $this->showSuccesNotification = true;
                $this->showErrorNotification = false;
                $this->modification=false;
                $this->image=null;
                $this->liste=true;
    
            } catch (\Throwable $th) {
                $this->message=$th.'erreur lors de la modification du projet.';
                $this->showSuccesNotification = false;
                $this->showErrorNotification = true;
            }
    
            }else {
                try {
            
                    $this->validate(
                        [
                            'projet.libelle'=>'required',
                            'projet.annee'=>'',
                            'projet.duree'=>'',
                            'projet.description'=>'',
                            'projet.lieu'=>'required',
                            'projet.entreprise'=>'',
                            'projet.service'=>'required',
                            'projet.superficie'=>'',
                        ]
                    );
                    $this->projet->save();
                    $this->projet=projet::make();
                    $this->message='projet Modifié avec succès.';
                    $this->showSuccesNotification = true;
                    $this->showErrorNotification = false;
                    $this->modification=false;
                    $this->image=null;
                    $this->liste=true;
        
                } catch (\Throwable $th) {
                    $this->message='erreur lors de la modification du projet.';
                    $this->showSuccesNotification = false;
                    $this->showErrorNotification = true;
                }
            }
            

        } else {

        try {
            
             foreach ($this->image as $key => $value) {
                 
             $name=$name.'->'.Image::traitement($this->image[$key],'png',1422,500);
             if($key==0){
                $this->projet->img_principale=explode('->',$name)[1];
             }
            }
        } catch (\Throwable $th) {
            $this->message=$th.'erreur lors de l\'enregistrement des images.';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
        }


        

        try {
            
            $this->validate(
                [
                    'projet.libelle'=>'required',
                    'projet.annee'=>'',
                    'projet.duree'=>'',
                    'projet.description'=>'required',
                    'projet.lieu'=>'required',
                    'projet.entreprise'=>'required',
                    'projet.service'=>'required',
                    'projet.superficie'=>'',
                ]
            );
            $this->projet->image=$name;
            $this->projet->save();
            $this->projet=projet::make();
            $this->message='projet ajouté avec succès.';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
            $this->modification=false;
            $this->image=null;
            $this->liste=true;

        } catch (\Throwable $th) {
            $this->message='erreur lors de l\'enregistrement du projet.';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
        }
        
        }

    }


    public function getListProjectProperty(){
        return projet::where([['service','like',"%$this->service%"]])
        ->orderBy('id','desc')
        ->paginate(8);
    }

    public function delete($id){
       try {
            $reponse=projet::find($id);
            projet::destroy($id);

            $newProjectImages=explode('->',$reponse->image);
            
            foreach ($newProjectImages as $key => $value) {
                if ($key>0 && $value!=$id ) {
                    File::delete(public_path("/app/projet/$value"));
                }
            }

            

            $this->message='projet supprimé avec succès.';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
       } catch (\Throwable $th) {
            $this->message='erreur lors de la suppression du projet.';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
       }
    }

    public function voir($id){
        $this->projet=projet::find($id);
        $this->liste=false;
        $this->modification=true;
    }

    public function annuler(){

        
        $this->projet=projet::make();
        $this->liste=true;
        $this->modification=false;
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
        $this->image = null;
    }

    public function removeImg($id){


        $newProjectImages=explode('->',$this->projet->image);

        if ($this->projet->img_principale==$id) {
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

        File::delete(public_path("/app/projet/$id"));
        $this->projet->image=$name;
        $this->projet->save();
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
        $this->projet->img_principale=$id;
        $this->projet->save();
        $this->message='image principal modifié avec succès';
        $this->showSuccesNotification = true;
        $this->showErrorNotification = false;
    }

    public function maisonPrinc($id,$service){

        switch ($service) {
            case 'Maison contemporaine':
                projet::where([
                    ['service','Maison contemporaine']
                    ])
                    ->orWhere([
                        ['service','Maison individuelle']
                        ])
                ->update(['projet_principal'=>null]);
                
                projet::whereId($id)
                ->update([
                    'projet_principal'=>$id
                ]);

                break;


                case 'Maison individuelle':
                    projet::where([
                        ['service','Maison contemporaine']
                        ])
                        ->orWhere([
                            ['service','Maison individuelle']
                            ])
                    ->update(['projet_principal'=>null]);
                    
                    projet::whereId($id)
                    ->update([
                        'projet_principal'=>$id
                    ]);
    
                    break;


                    case "$service":
                        projet::where([
                            ['service',$service]
                            ])
                        ->update(['projet_principal'=>null]);
                        
                        projet::whereId($id)
                        ->update([
                            'projet_principal'=>$id
                        ]);
        
                        break;


        }
        
        
        
    }

    public function updateService($service){
        $this->resetPage();
        $this->service=$service;
    }


    public function save_page(){
        

        $reponse=projetpage::count();
        
        if ($reponse==0) {

                projetpage::where([
                    ['id','<>',0]
                ])
                ->delete();
    
    
                $this->validate(
                    [
                        'projet_page.description'=> '',
                        'projet_page.titre'=> '',
                    ]
                );
                $this->projet_page->save();
                $this->message='Parramétrage de la page projet enregistré avec succès';
                $this->showSuccesNotification1= true;
                $this->showErrorNotification1 = false;
                $this->imageEnt=null;   
            
        } else {


            $this->validate(
                [
                    'projet_page.description'=> '',
                    'projet_page.titre'=> '',
                ]
            );
            
            $this->projet_page->save();
            $this->message='Parramétrage de la page des projet mis à jour avec succès';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
            $this->imageEnt=null; 


        }
    }

    public function render()
    {
        return view('livewire.projet');
    }
}
