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

          <div class="col-md-7 mt-4">
              <div class="card">
                  <div class="card-header pb-0 px-3">
                      <h6 class="mb-0">Gestion des actualites</h6>
                  </div>
                  <div class="card-body pt-4 p-3">
                      <ul class="list-group">
                        
                        @if (sizeOf($this->actualites)==0)
                        <div
                            class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span
                                class="alert-text text-white">{!! __('Aucune actualité enregistrée pour le moment. <br> &nbsp;&nbsp;&nbsp; Veuillez enregistrer une nouvelle actualité dans le formulaire à droite.')!!}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                        @else
                            
                        @endif
                        @foreach ($this->actualites as $key=>$actualite)
                        @if ($supp==$actualite->id)
                        <li class="list-group-item col-md-12 border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg" wire:model='supp'>
                            <div class="d-flex  flex-column text-justify">
                               <h4 class="mb-3 text-sm alert alert-danger text-white text-center"><i class="fa fa-warning" aria-hidden="true"></i>  Confirmation de suppression de l'actualité {{ $actualite->titre }}</h4>
                                <span class="mb-2 text-xs">La suppression de cette actualité engendrera automatiquement la suppression de ce dernier ainsi que les images y associés. 
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
          
          <div class="col-md-5 mt-4">
              <div class="card h-100 mb-4">
                  <div class="card-header pb-0 px-3">
                      <div class="row">
                          <div class="col-md-12">
                              <h6 class="mb-0">Nouvelle actualité / Modification des actualités</h6>
                          </div>
                      </div>
                  </div>
                  <div class="card-body pt-4 p-3">
                    <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="user-name" class="form-control-label">Titre de l'actualité</label>
                                <div class="">
                                    <input wire:model.lazy="actualite.titre" class="form-control" type="text" placeholder="Titre de l'actualité" id="user-name" required>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="user.location" class="form-control-label">Catégorie</label>
                                <div class="">
                                    <input wire:model.lazy="actualite.domaine" class="form-control" type="text" placeholder="Domaine de l'actualité"  required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="terrain-name" class="form-control-label">Image principale de l'article </label>
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
                                <label for="user.location" class="form-control-label">Nom de l'auteur</label>
                                <div class="">
                                    <input wire:model.lazy="actualite.auteur" class="form-control" type="text" placeholder="nom de l'auteur" id="name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="about">A Propos de l'auteur</label>
                                <div class="">
                                    <textarea class="form-control" wire:model.lazy="actualite.desc_auteur" id="about" rows="5" placeholder="à propos de l'auteur" required></textarea>
                                </div>
                             </div>
                        </div>

                        @for ($i = 1; $i < 6; $i++)
                        <span>
                            <a class="btn  
                            @if($i==1) btn-info @endif
                            @if($i==3) bg-gradient-success @endif
                            @if($i==4) bg-gradient-warning @endif
                            @if($i==5) btn-primary @endif
                            @if($i==2) btn-secondary @endif
                            
                            " data-bs-toggle="collapse" href="#bloc{{$i}}" role="button" aria-expanded="false" aria-controls="collapseExample" wire:click="$set('collapse',collapse)">
                            Bloc {{$i}} 
                            </a>
                      </span>

                      


                    <div class="row {{$collapse}}" id="bloc{{$i}}">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="user-name" class="form-control-label">Titre du bloc</label>
                                <div class="">
                                    <input wire:model.lazy="actualite.titre{{$i}}" class="form-control" type="text" placeholder="titre du bloc {{$i}}" id="user-name" @if($i==1) required @endif>
                                </div>
                              </div>
                              
                              
                            
                        
                    <div class="form-group">
                        <label for="about">Article  </label>
                        <div class="">
                            <textarea wire:model.lazy="actualite.article{{$i}}" class="form-control" id="about" rows="7" placeholder="Ecrivez à propos de l'article" @if($i==1) required @endif></textarea>
                        </div>
                     </div>
                     
                     
                        <div class="form-group">
                            <label for="terrain-name" class="form-control-label">Image relative à l'article ?</label>
                            <div class="">
                                <input   wire:model="image{{$i}}" class="form-control" type="file" id="terrain-name" accept="image/*"> 
                            @error('image{{$i}}') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror

                            </div>


                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image{{$i}}'>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Patientez le chargement de(s) image(s)...
                              </button>
                        </div>
                        
                     @if ($modification!=null)
                     
                     @if ($i==1)
                     @if ($image1)
                     <div class="card-body p-3">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                <div class="card card-blog card-plain">
                                    <div class="position-relative">
                                        <a class="d-block shadow-xl border-radius-xl">
                                            <img src=" {!! $image1->temporaryUrl() !!} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                     @else
                     @if ($actualite->image1)
                     <div class="card-body p-3">
                         <div class="row">
                             <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                 <div class="card card-blog card-plain">
                                     <div class="position-relative">
                                         <a class="d-block shadow-xl border-radius-xl">
                                             <img src="{{asset('/app/actualite/'.$actualite->image1)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                         </a>
                                         <button type="button" class="btn bg-gradient-danger btn-md mt-4 mb-4" wire:click='removeImg("{{$actualite->image1}}",{{$i}})'>Enlever</button>

                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     @endif
                     @endif
                    @endif


                    @if ($i==2)
                     @if ($image2)
                     <div class="card-body p-3">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                <div class="card card-blog card-plain">
                                    <div class="position-relative">
                                        <a class="d-block shadow-xl border-radius-xl">
                                            <img src=" {!! $image2->temporaryUrl() !!} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                     @else
                     @if ($actualite->image2)
                     <div class="card-body p-3">
                         <div class="row">
                             <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                 <div class="card card-blog card-plain">
                                     <div class="position-relative">
                                         <a class="d-block shadow-xl border-radius-xl">
                                             <img src="{{asset('/app/actualite/'.$actualite->image2)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                         </a>
                                         <button type="button" class="btn bg-gradient-danger btn-md mt-4 mb-4" wire:click='removeImg("{{$actualite->image2}}",{{$i}})'>Enlever</button>

                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     @endif
                     @endif
                    @endif
                    

                    @if ($i==3)
                     @if ($image3)
                     <div class="card-body p-3">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                <div class="card card-blog card-plain">
                                    <div class="position-relative">
                                        <a class="d-block shadow-xl border-radius-xl">
                                            <img src=" {!! $image3->temporaryUrl() !!} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                     @else
                     @if ($actualite->image3)
                     <div class="card-body p-3">
                         <div class="row">
                             <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                 <div class="card card-blog card-plain">
                                     <div class="position-relative">
                                         <a class="d-block shadow-xl border-radius-xl">
                                             <img src="{{asset('/app/actualite/'.$actualite->image3)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                         </a>
                                         <button type="button" class="btn bg-gradient-danger btn-md mt-4 mb-4" wire:click='removeImg("{{$actualite->image3}}",{{$i}})'>Enlever</button>

                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     @endif
                     @endif
                    @endif


                    @if ($i==4)
                     @if ($image4)
                     <div class="card-body p-3">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                <div class="card card-blog card-plain">
                                    <div class="position-relative">
                                        <a class="d-block shadow-xl border-radius-xl">
                                            <img src=" {!! $image4->temporaryUrl() !!} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                     @else
                     @if ($actualite->image4)
                     <div class="card-body p-3">
                         <div class="row">
                             <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                 <div class="card card-blog card-plain">
                                     <div class="position-relative">
                                         <a class="d-block shadow-xl border-radius-xl">
                                             <img src="{{asset('/app/actualite/'.$actualite->image4)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                         </a>
                                         <button type="button" class="btn bg-gradient-danger btn-md mt-4 mb-4" wire:click='removeImg("{{$actualite->image4}}",{{$i}})'>Enlever</button>
                                        </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     @endif
                     @endif
                    @endif

                    @if ($i==5)
                     @if ($image5)
                     <div class="card-body p-3">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                <div class="card card-blog card-plain">
                                    <div class="position-relative">
                                        <a class="d-block shadow-xl border-radius-xl">
                                            <img src=" {!! $image5->temporaryUrl() !!} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                     @else
                     @if ($actualite->image5)
                     <div class="card-body p-3">
                         <div class="row">
                             <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                 <div class="card card-blog card-plain">
                                     <div class="position-relative">
                                         <a class="d-block shadow-xl border-radius-xl">
                                             <img src="{{asset('/app/actualite/'.$actualite->image5)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                         </a>
                                         <button type="button" class="btn bg-gradient-danger btn-md mt-4 mb-4" wire:click='removeImg("{{$actualite->image5}}",{{$i}})'>Enlever</button>
                                        </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     @endif
                     @endif
                    @endif
                     
                     @else
                         
                    

                        @if ($i==1 && $image1)
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src=" {!! $image1->temporaryUrl() !!} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        @endif

                        @if ($i==2 && $image2)
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src=" {!! $image2->temporaryUrl() !!} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        @endif

                        @if ($i==3 && $image3)
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src=" {!! $image3->temporaryUrl() !!} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        @endif

                        @if ($i==4 && $image4)
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src=" {!! $image4->temporaryUrl() !!} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        @endif

                        @if ($i==5 && $image5)
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src=" {!! $image5->temporaryUrl() !!} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        @endif
                        @endif

                        <div class="form-group">
                            <label for="user.location" class="form-control-label">Lien de vidéo relative à l'article?  (contactez les concepteurs en cas de non comprehension)</label>
                            <div class="">
                                <input wire:model.lazy="actualite.video{{$i}}" class="form-control" type="text" placeholder="ex: https://www.youtube.com/embed/batipro" id="name">
                            </div>
                        </div>

                        
                    </div>
                </div>
                        @endfor
                          
                          
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
                        <br>
                            <span class="mb-2 text-xs "><span class="text-danger ms-2 font-weight-bold ">
                                S'il vout plait patientez le chargement des images avant de passer à l'enregistrement.    
                            </span></span>
                                
                        
                   
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
      </div>
    

</div>
