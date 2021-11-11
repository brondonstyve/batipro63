<div class="container-fluid">
    <div class="card card-body blur shadow-blur">



        


        <div class="row gx-4">
            @if ($showSuccesNotification)
            <div
                class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                <span
                    class="alert-text text-white">{{ $message}}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
            @endif
    
            @if ($showErrorNotification)
            <div
                class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                <span
                    class="alert-text text-white">{{ $message}}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
            @endif

            @if($liste)
            <div class="col-xl-4 col-md-8 mb-xl-0 mb-4" wire:click='new'>
                <div class="card h-100 card-plain border">
                    <div class="card-body d-flex flex-column justify-content-center text-center">
                        <a href="javascript:;">
                            <i class="fa fa-plus text-secondary mb-3"></i>
                            <h5 class=" text-secondary"> Nouveau projet </h5>
                        </a>
                    </div>
                </div>
            </div>
            @endif

            

        @if ($liste)
        <div style="float: right;text-align: right">
            <button class="btn btn-info" wire:click="updateService('')">Tout</button>
            <button class="btn btn-info" wire:click="updateService('Maison contemporaine')">Maison contemporaine</button>
            <button class="btn btn-info" wire:click="updateService('Logement collectif')">Logement collectif</button>
            <button class="btn btn-info" wire:click="updateService('Maconnerie générale')">Maconnerie générale</button>
            <button class="btn btn-info" wire:click="updateService('Maison Individuelle')">Maison Individuelle</button>
        </div>
        <div class="col-12 mt-4">
            <div class="card mb-4"> 
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-1">Gestion des projets</h6>
                </div>
               
                <div class="card-body p-3">
                    <div class="row">
                        @foreach ($this->listProject as $item)

                        @if ($supp==$item->id)
                        
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                        <div class="d-flex  flex-column text-justify">
                            <h4 class="mb-3 text-sm alert alert-danger text-white text-center"><i class="fa fa-warning" aria-hidden="true"></i>  Confirmation de suppression de {{ $projet->libelle }}</h4>
                             <span class="mb-2 text-xs">La suppression de ce projet sera irrevoquable et engendrera automatiquement la suppression de toutes les images liées à ce dernier. 
                                 <br>
                             Cliquez sur le bouton en sessous si vous souhaitez continuer la suppression.
                             </span>
                            <div class="mx-auto">
                                <button class="btn btn-danger" wire:click='delete({{$item->id}})'>
                                   Confirmer
                                </button>

                                <button class="btn btn-success" wire:click="$set('supp',{{null}})">
                                 Annuler
                              </button>
                            </div>
                         </div>
                         </div>
                        </div>



                        @else

                        
                        @php
                        $image=explode('->',$item->image);
                        @endphp
                        

                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4 mt-2">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">

                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="@if($urlSeeImage!=null && $item->id==$idVue ){{asset('/app/projet/'.$urlSeeImage)}}@else{{asset('/app/projet/'.$image[1])}}@endif" alt="img-blur-shadow"
                                            class="img-fluid shadow border-radius-xl">
                                    </a>

                                </div>
                                <div class="card-body px-1 pb-0">
                                    <p class="text-gradient text-dark mb-2 text-sm">projet : {{$item->libelle}} </p>
                                    <p class="text-gradient text-dark mb-2 text-sm">service : {{$item->service}} </p>
                                    <a href="javascript:;">
                                        <h5>
                                            Libellé : {{$item->lieu}} 
                                        </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        {{  substr($item->description, 0, 45).'...';  }} 
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <button type="button" class="btn btn-success btn-sm mb-0" wire:click='voir({{$item->id}})'>Voir</button>
                                        <button type="button" class="btn btn-danger btn-sm mb-0" wire:click="$set('supp',{{$item->id}})">Supprimer</button>
                                        <div class="avatar-group mt-2">

                                            @foreach ($image as $key=>$value)
                                                @if ($key!=0)
                                                    <a href="javascript:;" wire:click='seeImage("{{$value}}",{{$item->id}})' class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Visuel {{$key+1}}">
                                                        <img alt="Image placeholder" src="{{asset('/app/projet/'.$value)}}">
                                                    </a>
                                                @endif
                                            @endforeach
                                                                
                                        </div>
                                    </div>
                                    @if ($item->projet_principal==null)
                                        <div class="d-flex align-items-center justify-content-between mt-1" >
                                            <button type="button" class="btn btn-info btn-sm mb-0" wire:click="maisonPrinc({{$item->id}},'{{$item->service}}')">Définir comme image accueil pour @if($item->service=='Maison individuelle') Maison contempaoraine @else {{$item->service}} @endif</button>
                                        </div>
                                    @endif
                                   

                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        
                        
                        

                       
                    </div>
                </div>
            </div>
            <div>
                {{$this->listProject->links()}}
            </div>
        </div>

        @else



        
        <div class="row">

            
            
    
              <div class="col-md-12 mt-4">
                  <div class="card h-100 mb-4">
                      <div class="card-header pb-0 px-3">
                          <div class="row">
                              <div class="col-md-12">
                                  <h6 class="mb-0">Nouveau projet / Modification Projet</h6>
                              </div>
                          </div>
                      </div>
                      <div class="card-body pt-4 p-3">
                        <form wire:submit.prevent="save" action="#" method="POST" role="form text-left" enctype="multipart/form-data">
    
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="projet-name" class="form-control-label">Etiquette du service associé</label>
                                        <div class="">
                                            <select wire:model.lazy="projet.service" class="form-control" required>
                                            <option value=""></option>
                                            <option value="Maison contemporaine">Maison contemporaine</option>
                                            <option value="Logement collectif">Logement collectif </option>
                                            <option value="Maçonnerie générale">Maçonnerie générale</option>

                                            </select>
                                        </div>
                                        @error('projet.service') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projet-name" class="form-control-label">Libellé du projet</label>
                                        <div class="">
                                            <input wire:model.lazy="projet.libelle" class="form-control" type="text" required  placeholder="Libellé du projet" id="projet-name" required>
                                        </div>
                                        @error('projet.libelle') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projet-email" class="form-control-label">{{ __('Année de réalisation') }}</label>
                                        <div class="@error('projet.email')border border-danger rounded-3 @enderror">
                                            <input wire:model.lazy="projet.annee" class="form-control" type="number"
                                                placeholder="Année de réalisation" id="projet-email" required>
                                        </div>
                                        @error('projet.annee') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
    
    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projet-name" class="form-control-label">Lieu</label>
                                        <div class="">
                                            <input wire:model.lazy="projet.lieu" class="form-control" type="text" required  placeholder="Lieu du projet" id="projet-name" required>
                                        </div>
                                        @error('projet.lieu') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="projet-email" class="form-control-label">{{ __('durée de réalisation (en semaine)') }}</label>
                                        <div class="@error('projet.email')border border-danger rounded-3 @enderror">
                                            <input wire:model.lazy="projet.duree" class="form-control" type="number"
                                                placeholder="durée de réalisation" id="projet-email">
                                        </div>
                                        @error('projet.duree') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="projet-email" class="form-control-label">{{ __('Superficie (en m²)') }}</label>
                                        <div class="@error('projet.superficie')border border-danger rounded-3 @enderror">
                                            <input wire:model.lazy="projet.superficie" class="form-control" type="number"
                                                placeholder="superficie" id="projet-email">
                                        </div>
                                        @error('projet.superficie') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projet-name" class="form-control-label">Nom de l'entreprise ou du particulier</label>
                                        <div class="">
                                            <input wire:model.lazy="projet.entreprise" class="form-control" type="text"  placeholder="Nom de l'entreprise ou du particulier" id="projet-name" required>
                                        </div>
                                        @error('projet.entreprise') <div class="text-danger">{{ $message }}</div> @enderror
                                    </div>
                                </div>
    
                               

                                @if ($modification)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projet-name" class="form-control-label">Ajouter un visuel uniquement</label>
                                        <div class="">
                                            <input wire:model="image" class="form-control" type="file" placeholder="Visuel du projet" id="projet-name" accept="image/*"> 
                                        </div>

                                        <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image'>
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            Patientez le chargement de l'image...
                                          </button>

                                        @error('image') <div class="text-danger">erreur lors du téléchargement</div> @enderror
                                        @if(session()->has('image')) <div class="text-danger">{{ session()->get('image')}}</div> @endif
                                    </div>
                                </div>
                                @else
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projet-name" class="form-control-label">Visuel</label>
                                        <div class="">
                                            <input wire:model="image" class="form-control" type="file" required  placeholder="Visuel du projet" id="projet-name" required accept="image/*" multiple max="2"> 
                                        </div>

                                        <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image'>
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            Patientez le chargement de(s) image(s)...
                                          </button>

                                        @error('image') <div class="text-danger">erreur lors du téléchargement</div> @enderror
                                        @if(session()->has('image')) <div class="text-danger">{{ session()->get('image')}}</div> @endif
                                    </div>
                                </div>
                                @endif
                                    
                                
    
                                <div class="form-group">
                                    <label for="about">Description</label>
                                    <div class="">
                                        <textarea wire:model.lazy="projet.description" class="form-control" id="about" rows="7" placeholder="à propos du projet" required></textarea>
                                    </div>
                                 </div>
                            </div>
    

                            @if ($showErrorNotification)
                            <div
                                class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                                <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                                <span
                                    class="alert-text text-white">{{ $message}}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                            </div>
                            @endif

                            @if ($image!=null)
                                
                            @if ($modification)
                            <div class="col-12 mt-4">
                                <div class="card mb-4">
                                    <div class="card-header pb-0 p-3">
                                        <h6 class="mb-1">visuel d'ajout de modification</h6>
                                    </div>
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">
                                                            <img src=" {{$image->temporaryUrl()}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="col-12 mt-4">
                                <div class="card mb-4">
                                    <div class="card-header pb-0 p-3">
                                        <h6 class="mb-1">Liste des visuels</h6>
                                    </div>
                                    <div class="card-body p-3">
                                        <div class="row">
                                            @foreach ($image as $key=>$item)
                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">
                                                            <img src=" {{$item->temporaryUrl()}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                        </a>
                                                    </div>
                                                    <div class="card-body px-1 pb-0">
                                                        <p class="text-gradient text-dark mb-2 text-sm">Visuel {{$key+1}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            

                            @endif


                            @if ($modification==true && !$image)

                                @php
                                    $image=explode('->',$projet->image);
                                @endphp
                                
                            <div class="col-12 mt-4">
                                <div class="card mb-4">
                                    <div class="card-header pb-0 p-3">
                                        <h6 class="mb-1">Liste des visuels</h6>
                                    </div>
                                    <div class="card-body p-3">
                                        <div class="row">
                                            @foreach ($image as $key=>$img)
                                            @if ($key>0)
                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">
                                                            
                                                            <img src="{{asset('/app/projet/'.$img)}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">  
                                                        </a>
                                                        <button type="button" class="btn bg-gradient-danger btn-md mt-4 mb-4" wire:click='removeImg("{{$img}}")'>Enlever</button>

                                                        @if ($projet->img_principale!=$img)
                                                             <button type="button" class="btn bg-gradient-primary btn-md mt-4 mb-4" wire:click='definrP("{{$img}}")'>Image Principale</button> 
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endif
                            
                                
                            <br>
                            <span class="mb-2 text-xs "><span class="text-danger ms-2 font-weight-bold ">
                                S'il vout plait patientez le chargement des images avant de passer à l'enregistrement.    
                            </span></span>
                            
                            <div class="d-flex justify-content-end">
                              @if ($modification==true)
                                
                              <button type="button" class="btn bg-gradient-danger btn-md mt-4 mb-4 mr-" wire:click='annuler'>Annuler</button>
                              <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" >Enregistrer les modification</button>
                              
                              @else                            
                              <button type="button" class="btn bg-gradient-danger btn-md mt-4 mb-4 mr-" wire:click='annuler'>Annuler</button>

                              <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Enregistrer</button>
                              
                              @endif
                            </div>
                        </form>
        
                    </div>
                  </div>
              </div>
          </div>




         

    
        @endif

  

        <div class="container-fluid">
            <div class="card card-body pt-4 p-3">
                
                      <div class="col-md-12 mt-4">

                        @if ($showSuccesNotification1)
                        <div
                            class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span
                                class="alert-text text-white">{{ $message}}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                        @endif

                        @if ($showErrorNotification1)
                        <div
                            class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span
                                class="alert-text text-white">{{ $message}}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                        @endif

                            <h4 class="mb-0">Gestion des visuels</h4>

                            <form  wire:submit.prevent='save_page'>
                                @csrf
                            <div class="row">
                                


                            <h3 for="">Corps de la page</h3>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="service-name" class="form-control-label">Titre</label>
                                    <div class="">
                                        <input wire:model.lazy="projet_page.titre" class="form-control" type="text">
                                    </div>
                                    
                                 </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="service-name" class="form-control-label">Description</label>
                                    <div class="">
                                        <textarea wire:model.lazy="projet_page.description" class="form-control" id="about" rows="3"></textarea>
                                    </div>
                                    
                                 </div>
                            </div>

                            

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Enregistrer</button>
                              </div>
                     </div>
                    </form>
                </div></div>
        </div>

       

    </div>
</div>
</div>

