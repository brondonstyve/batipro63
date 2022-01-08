<?php

namespace App\Http\Livewire;


use App\Models\seo as modelseo;
use Livewire\Component;

class Seo extends Component
{


    public $modification;
    public $supp;
    public $showSuccesNotification  = false; 
    public $showErrorNotification  = false;

    public $showSuccesNotification1  = false;
    public $showErrorNotification1  = false;
    public $message;
    public modelseo $seo;

    protected $rules = [
        'seo.page' => 'required',
        'seo.titre' => '',
        'seo.description' => '',
        ];


    public function mount(){
        $this->seo=modelseo::make();
        
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
    }



    public function getseosProperty(){
        return modelseo::get();
    }

    public function save(){
        ini_set('memory_limit', '-1');
        if(env('IS_DEMO')) { 
            $this->showDemoNotification = true;
         } else {

            
            if ($this->modification==null) {
                $reponse= modelseo::wherePage($this->seo->page)->first();
                
                if ($reponse) {
                    $this->message='Cette page dispose déjà d\'un enregistrement. veuillez plutot procéder à une modification de celui ci.';
                        $this->showSuccesNotification = false;
                        $this->showErrorNotification = true;
                }else {
                    try {
                        $this->validate(
                            [
                                'seo.page' => 'required',
                                'seo.titre' => '',
                                'seo.description' => '',
                            ]
                        );
                        $this->seo->save();
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
                }
                
                
            } else {
                
                
                    try {
                        
                            $this->validate(
                                [
                                    'seo.page' => 'required',
                                    'seo.titre' => '',
                                    'seo.description' => '',
                                ]
                        );

                        $this->seo->save();
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

        $reponse=modelseo::find($id);

        try {
            $reponse=modelseo::destroy($id);
            modelseo::make();
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
        
        $this->seo=modelseo::find($id);
        $this->modification=2;
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
        $this->message = null;

        $this->collapse="";
        
    }

  


    public function annuler(){
        
        $this->modification=false;
        $this->seo=modelseo::make();
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
        $this->message = null;
        $this->collapse='collapse';
    }

    public function render()
    {
        return view('livewire.seo');
    }
}
