<div>
    

    <div class="row">

            
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

        



         <h3 for="">Bloc des Article(s) de la page</h3>

         

          <div class="col-md-7 mt-4">
              <div class="card">
                  <div class="card-header pb-0 px-3">
                      <h6 class="mb-0">Gestion des articles de page</h6>
                  </div>
                  <div class="card-body pt-4 p-3">
                      <ul class="list-group">
                        
                        @if (sizeOf($this->actualites)==0)
                        <div
                            class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span
                                class="alert-text text-white">{!! __('Aucun article enregistré pour le moment. <br> &nbsp;&nbsp;&nbsp; Veuillez enregistrer un nouvel article dans le formulaire à droite.')!!}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                        @else
                            
                        @endif
                        @foreach ($this->actualites as $key=>$actualite)
                        @if ($supp==$actualite->id)
                        <li class="list-group-item col-md-12 border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg" wire:model='supp'>
                            <div class="d-flex  flex-column text-justify">
                               <h4 class="mb-3 text-sm alert alert-danger text-white text-center"><i class="fa fa-warning" aria-hidden="true"></i>  Confirmation de suppression de l'article {{ $actualite->titre }}</h4>
                                <span class="mb-2 text-xs">La suppression de cette article engendrera automatiquement la suppression de ce dernier ainsi que les images y associés. 
                                    <br>
                                Cliquez sur le bouton ci dessous si vous souhaitez continuer la suppression.
                                </span>
                               <div class="mx-auto">
                                   <button class="btn btn-danger" wire:click='delete({{$actualite->id}})'>
                                      Confirmer
                                   </button>

                                   <button class="btn btn-success" wire:click="$set('supp',-1)">
                                    Annuler
                                 </button>
                               </div>
                            </div>
                        </li>
                        @else
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                            <div class="d-flex flex-column col-md-9 text-justify">
                                <h4 class="mb-3 text-sm">Titre &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$actualite->titre}}</h4>
                                <span class="mb-2 text-xs">Domaine   &nbsp;&nbsp;&nbsp;&nbsp;: <span class="text-dark ms-2 font-weight-bold">{{$actualite->domaine}} </span></span>
                                
                                <span class="text-xs">Description : <span class="text-dark ms-2 font-weight-bold">  {{ substr($actualite->desc_auteur,0,100).'...'; }} </span></span>
                            </div>
                            <div class="ms-auto">
                                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;" wire:click="$set('supp',{{$actualite->id}})"><i class="far fa-trash-alt me-2" aria-hidden="true"></i>Supprimer</a>
                                
                                <a class="btn btn-link text-dark text-gradient px-3 mb-0" href="javascript:;" wire:click="update({{$actualite->id}})"><i class="fas fa-pencil-alt text-dark  me-2" aria-hidden="true"></i>Voir / Modifier</a>
                                
                            </div>
                        </li>
                        @endif
                            
                        @endforeach

                      </ul>
                  </div>
              </div>
          </div>
          
          <div class="col-md-5 mt-4 mx-auto">
              <div class="card h-100 mb-4">
                  <div class="card-header pb-0 px-3">
                      <div class="row">
                          <div class="col-md-12">
                              <h6 class="mb-0">Nouvel article / Modification des articles</h6>
                          </div>
                      </div>
                  </div>
                  <div class="card-body pt-4 p-3">
                    <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="user-name" class="form-control-label">Titre de l'article</label>
                                <div class="">
                                    <input wire:model.lazy="actualite.titre" class="form-control" type="text" placeholder="Titre de l'article" id="user-name" required>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="about">Description</label>
                                <div class="">
                                    <textarea class="form-control" wire:model.lazy="actualite.article1" id="about" rows="5" placeholder="Description de l'article" ></textarea>
                                </div>
                             </div>

                            <div class="form-group">
                                <label for="terrain-name" class="form-control-label">Image</label>
                                <div class="">
                                    <input   wire:model.lazy="image" class="form-control" type="file" id="terrain-name" accept="image/*"    @if ($modification==null) required @endif>  
                                </div>

                                @error('image') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror


                                <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image'>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Patientez le chargement de(s) image(s)...
                                  </button>
                            </div>

                            @if ($modification!=null)
                     
                                    
                                    @if ($image)
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">
                                                            <img src=" {!! $image->temporaryUrl() !!} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                    @else
                                    @if ($actualite->image)
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">
                                                            <img src="{{asset('/app/actualite/'.$actualite->image)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endif

                                    @else
                                        @if ($image)
                                        <div class="card-body p-3">
                                            <div class="row">
                                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {!! $image->temporaryUrl() !!} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                                        
                                     @endif



                            <div class="form-group">
                                <label for="user.location" class="form-control-label">Libellé du lien</label>
                                <div class="">
                                    <input wire:model.lazy="actualite.auteur" class="form-control" type="text" placeholder="Libellé du lien" id="name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="about">Lien de l'article</label>
                                <div class="">
                                    <textarea class="form-control" wire:model.lazy="actualite.desc_auteur" id="about" rows="5" placeholder="Lien de l'article" ></textarea>
                                </div>
                             </div>
                        </div>

                      
                        <br>
                            <span class="mb-2 text-xs "><span class="text-danger ms-2 font-weight-bold ">
                                S'il vout plait patientez le chargement des images avant de passer à l'enregistrement.    
                            </span></span>
                                
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
                   
                <div class="d-flex justify-content-end">
                     


                    @if ($modification!=null)
                      
                    <input type="button" value="Annuler" class="btn bg-gradient-danger btn-md mt-4 mb-4 mr-" wire:click='annuler()'>
                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:loading.remove>Enregistrer les modification</button>
                    
                    @else                            
                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:loading.remove>Enregistrer</button>
                    
                    @endif
                    <button class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:loading >Patienter...</button>
                </div>
                    </form>
    
                </div>
              </div>
          </div>

          <form wire:submit.prevent='save_mcPage()' class="col-md-11 mx-auto">
              <div class="row">

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

          <h3 for="">Bloc 1 et 3</h3>

          <div class="col-md-6">
            <div class="form-group">
                <label for="actualite1-name" class="form-control-label">Image Entête</label>
                <div class="">
                     <input wire:model="imageEnt" class="form-control" type="file"  accept="image/*" > 
                </div>
    @error('imageEnt') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror

                <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='imageEnt'>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Patientez le chargement de l'image...
                  </button>
             </div>
        </div>
        
        <div class="col-md-6">

            <div class="form-group">
                <label for="actualite1-name" class="form-control-label">Visuel</label>
                <div class="">
                    @if ($imageEnt)
                    <div class="row">
                        <div class="col-xl-4 mx-auto col-md-12 mb-xl-0 mt-2">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src=" {{$imageEnt->temporaryUrl()}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    @if ($this->actualite1->imageEnt)
                    <div class="row">
                        <div class="col-xl-4 mx-auto col-md-12 mb-xl-0 mt-2">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src=" {{ asset('/app/maison/'.$this->actualite1->imageEnt)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endif
                </div>
                
             </div>
        </div>

          <div class="col-md-12">
            <div class="form-group">
                <label for="actualite-name" class="form-control-label">Titre du bloc 1</label>
                <div class="">
                    <input wire:model.lazy="actualite1.titre" class="form-control" type="text" required>
                </div>
             </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="actualite-name" class="form-control-label">Description du bloc 1</label>
                <div class="">
                    <textarea name="" id="" rows="5" wire:model.lazy="actualite1.description" class="form-control" required></textarea>
                </div>
             </div>
        </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="actualite-name" class="form-control-label">Description du bloc 3</label>
                                            <div class="">
                                                <textarea wire:model.lazy="actualite1.description2" class="form-control" id="about" rows="3" required ></textarea>
                                            </div>
                                         </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="actualite-name" class="form-control-label">Image 3 </label>
                                            <div class="">
                                                 <input wire:model="imageC2" class="form-control" type="file"  accept="image/*" > 
                                            </div>
                                @error('imageC2') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror

                                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='imageC1'>
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                Patientez le chargement de l'image...
                                              </button>
                                         </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="actualite-name" class="form-control-label">Visuel  </label>
                                            @if ($imageC2)
                                    <div class="row">
                                        <div class="col-xl-8 mx-auto col-md-12 mb-xl-0 mt-2">
                                            <div class="card card-blog card-plain">
                                                <div class="position-relative">
                                                    <a class="d-block shadow-xl border-radius-xl">
                                                        <img src=" {{$imageC2->temporaryUrl()}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                        
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    @if ($this->actualite1->image)
                                    <div class="row">
                                        <div class="col-xl-8 mx-auto col-md-12 mb-xl-0 mt-2">
                                            <div class="card card-blog card-plain">
                                                <div class="position-relative">
                                                    <a class="d-block shadow-xl border-radius-xl">
                                                        <img src=" {{ asset('/app/maison/'.$this->actualite1->image)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endif
                                </div>
                            </div>
                                  
                            <br>
                            <span class="mb-2 text-xs "><span class="text-danger ms-2 font-weight-bold ">
                                S'il vout plait patientez le chargement des images avant de passer à l'enregistrement.    
                            </span></span>
                                <div class="d-flex justify-content-end">
    
                                  <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Enregistrer</button>
                                  
                                </div>
                            </div>
                            </form>
      </div>


      
    

</div>
