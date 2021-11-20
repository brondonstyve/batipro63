<?php

namespace App\Http\Livewire;

use App\Helpers\Image;
use App\Models\membre;
use App\Models\propo;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Apropos extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public propo $apropos;
    public membre $membre;
    public $showSuccesNotification  = false;
    public $showErrorNotification  = false;
    public $message;
    public $image;
    public $imageB1;
    public $imageB2;
    public $imageC1;
    public $imageEnt;
    public $supp;
    public $mod;
    public $image2;
    public $addMember=false;


    protected $rules=[
        'apropos.email1'=>'required|email',
        'apropos.email2'=>'',
        'apropos.telephone1'=>'required',
        'apropos.telephone2'=>'',
        'apropos.bureau'=>'required', 
        'apropos.depot'=>'required',
        'apropos.annee_experience'=>'',
        'apropos.description'=>'',
        'apropos.dg'=>'required',        
        'apropos.image'=>'',        
        'apropos.facebook'=>'',
        'apropos.twitter'=>'',
        'apropos.instagram'=>'',
        'apropos.linkedin'=>'',

        'apropos.descriptionEnt'=>'',
        'apropos.imageEnt'=>'',


        'membre.nom'=>'required',
        'membre.prenom'=>'',
        'membre.image'=>'required',
        'membre.description'=>'required',

        'apropos.resume'=>'',
        'apropos.titre'=>'',
        'apropos.anneeCreat'=>'',
        
        'apropos.imageB1'=>'',
        'apropos.imageB2'=>'',
        'apropos.imageC1'=>'',

        'apropos.resume2'=>'',
        'apropos.titre2'=>'',
        'apropos.description2'=>'',

        'apropos.titre3'=>'',
        'apropos.description3'=>'',
        'apropos.nombre3'=>'',

        'apropos.titre4'=>'',
        'apropos.description4'=>'',
        'apropos.nombre4'=>'',


        'apropos.description5'=>'',

        'apropos.titre6'=>'',
        'apropos.description6'=>'',
        'apropos.resume6'=>'',
    ];

    public function updatedApropos(){
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
    }

    public function mount(){
        $this->membre=membre::make();
        $reponse=propo::get();
        //dd($reponse);
        if (sizeOf($reponse)!=0) {
            $this->apropos=propo::make();
            $this->apropos=propo::first();
        } else {
            $this->apropos=propo::make();
        }
        
    }

    public function updatedImageEnt()
    {
        $this->validate([
            'imageEnt' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImageB1()
    {
        $this->validate([
            'imageB1' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImageB2()
    {
        $this->validate([
            'imageB2' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImageC1()
    {
        $this->validate([
            'imageC1' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage2()
    {
        $this->validate([
            'image2' => 'image|max:100000', // 1MB Max
        ]);
    }

    public  function annulerMod(){
        $this->image2=null;
        $this->mod=null;
    }

    public function save(){
        ini_set('memory_limit', '-1');
        if(env('IS_DEMO')) { 
            $this->showDemoNotification = true;
         } else {


        $reponse=propo::get();

        try {
            if ($this->image) {
                $this->apropos->image=Image::traitementM($this->image,'jpg',190,190);
            }

            if ($this->imageEnt) {
                $this->apropos->imageEnt=Image::traitementPropos($this->imageEnt,'jpg',1420,800);
            }

            if ($this->imageB1) {
                $this->apropos->imageB1=Image::traitementPropos($this->imageB1,'jpg',441,491);
            }

            if ($this->imageB2) {
                $this->apropos->imageB2=Image::traitementPropos($this->imageB2,'jpg',441,491);
            }

            if ($this->imageC1) {
                $this->apropos->imageC1=Image::traitementPropos($this->imageC1,'jpg',652,595);
            }
    
    } catch (\Throwable $th) {
        $this->message='erreur lors du traitement de l\'image.';
        $this->showSuccesNotification = false;
        $this->showErrorNotification = true;
    }

        //dd($reponse);
        if (sizeOf($reponse)!=0) {
            

    
        try {
            $this->validate(
                [
                    'apropos.email1'=>'required|email',
                    'apropos.email2'=>'',
                    'apropos.telephone1'=>'required',
                    'apropos.telephone2'=>'',
                    'apropos.bureau'=>'required', 
                    'apropos.depot'=>'required', 
                    'apropos.annee_experience'=>'',
                    'apropos.description'=>'',
                    'apropos.dg'=>'required',        
                    'apropos.image'=>'',        
                    'apropos.facebook'=>'',
                    'apropos.twitter'=>'',
                    'apropos.instagram'=>'',
                    'apropos.linkedin'=>'',

                    'apropos.descriptionEnt'=>'',
                    'apropos.imageEnt'=>'',

                    'apropos.anneeCreat'=>'',
                    'apropos.resume'=>'',
                    'apropos.titre'=>'',
                    
                    'apropos.imageB1'=>'',
                    'apropos.imageB2'=>'',
                    'apropos.imageC1'=>'',

                    'apropos.resume2'=>'',
                    'apropos.titre2'=>'',
                    'apropos.description2'=>'',

                    'apropos.titre3'=>'',
                    'apropos.description3'=>'',
                    'apropos.nombre3'=>'',

                    'apropos.titre4'=>'',
                    'apropos.description4'=>'',
                    'apropos.nombre4'=>'',


                    'apropos.description5'=>'',

                    'apropos.titre6'=>'',
                    'apropos.description6'=>'',
                    'apropos.resume6'=>'',

                
                ]
            );
            $this->apropos->email1=$this->apropos->email1;
            $this->apropos->email2=$this->apropos->email2;
            $this->apropos->telephone1=$this->apropos->telephone1;
            $this->apropos->telephone2=$this->apropos->telephone2;
            $this->apropos->bureau=$this->apropos->bureau;
            $this->apropos->depot=$this->apropos->depot;
            $this->apropos->nb_salarie=$this->apropos->nb_salarie;
            $this->apropos->annee_experience=$this->apropos->annee_experience;
            $this->apropos->description=$this->apropos->description;
            $this->apropos->dg=$this->apropos->dg;
            $this->apropos->image= $this->apropos->image  ;
            $this->apropos->facebook=$this->apropos->facebook;
            $this->apropos->twitter=$this->apropos->twitter;
            $this->apropos->instagram=$this->apropos->instagram;
            $this->apropos->linkedin=$this->apropos->linkedin;
            $this->apropos->save();
            $this->message='Informations modifiées avec succès.';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
            $this->modification=null;
            $this->image=null;

        } catch (\Throwable $th) {
            $this->showErrorNotification = true;
            $this->showSuccesNotification = false;

            $this->message='Erreur lors de la modification des informations.Veuillez recommencer!';
        }

        } else {

    
        try {
            $this->validate(
                [
                    'apropos.email1'=>'required|email',
                    'apropos.email2'=>'',
                    'apropos.telephone1'=>'required',
                    'apropos.telephone2'=>'',
                    'apropos.bureau'=>'required', 
                    'apropos.depot'=>'required', 
                    'apropos.annee_experience'=>'',
                    'apropos.description'=>'',
                    'apropos.dg'=>'required',        
                    'apropos.image'=>'',        
                    'apropos.facebook'=>'',
                    'apropos.twitter'=>'',
                    'apropos.instagram'=>'',
                    'apropos.linkedin'=>'',

                    'apropos.descriptionEnt'=>'',
                    'apropos.imageEnt'=>'',

                    'apropos.anneeCreat'=>'',
                    'apropos.resume'=>'',
                    'apropos.titre'=>'',
                    
                    'apropos.imageB1'=>'',
                    'apropos.imageB2'=>'',
                    'apropos.imageC1'=>'',

                    'apropos.resume2'=>'',
                    'apropos.titre2'=>'',
                    'apropos.description2'=>'',

                    'apropos.titre3'=>'',
                    'apropos.description3'=>'',
                    'apropos.nombre3'=>'',

                    'apropos.titre4'=>'',
                    'apropos.description4'=>'',
                    'apropos.nombre4'=>'',


                    'apropos.description5'=>'',

                    'apropos.titre6'=>'',
                    'apropos.description6'=>'',
                    'apropos.resume6'=>'',
                ]
            );
            $this->apropos->save();
            $this->message='Informations enregistrées avec succès.';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
            $this->modification=null;
            $this->image=null;

        } catch (\Throwable $th) {
            $this->showErrorNotification = true;
            $this->showSuccesNotification = false;

            $this->message=$th.'Erreur lors de l\'enregistrement des informations.Veuillez recommencer!';
        }
        }
                
                    
     }
    }


    public function new(){
        $this->addMember=true;
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
    }

    public function saveMember(){
        try {
            if ($this->image2) {
                $name=Image::traitementM($this->image2,'jpg',200,300);
                $this->membre->image=$name;
            }
    
    } catch (\Throwable $th) {
        Session()->flash('error lors du traitement de l\'image.');
    }


    try {
        $this->validate([
            'membre.nom'=>'required',
            'membre.prenom'=>'',
            'membre.image'=>'required',
            'membre.description'=>'required',
        ]);
        $this->membre->save();
        $this->membre=membre::make();
        $this->modification=null;
        $this->image2=null;
        Session()->flash('success','Membre enregistré avec succès.');
        $this->addMember=false;

    } catch (\Throwable $th) {
        Session()->flash('error',$th.'Erreur lors de l\'enregistrement du membre.Veuillez recommencer!');
        
    }
    }

    public function getMembresProperty(){
        return membre::paginate(12);
    }

    public function delete($id,$img){

        File::delete(public_path("/app/membre/$img"));
        membre::destroy($id);
    }


    public function modifier($id){
        $this->membre=membre::find($id);
        $this->mod=$id;
        $this->addMember=false;
    }


    public function updateMember(){
        try {
            if ($this->image2) {
                $name=Image::traitementM($this->image2,'jpg',200,300);
                $this->membre->image=$name;
            }
    
    } catch (\Throwable $th) {
        Session()->flash('error lors du traitement de l\'image.');
    }


    try {
        $this->validate([
            'membre.nom'=>'required',
            'membre.prenom'=>'',
            'membre.image'=>'required',
            'membre.description'=>'required',
        ]);
        $this->membre->save();
        $this->membre=membre::make();
        $this->modification=null;
        $this->mod=null;
        $this->image2=null;
        Session()->flash('success','Membre modifié avec succès.');
        $this->addMember=false;

    } catch (\Throwable $th) {
        Session()->flash('error',$th.'Erreur lors de la modification du membre.Veuillez recommencer!');
        
    }
    }

    public function render()
    {
        return view('livewire.apropos');
    }
}
