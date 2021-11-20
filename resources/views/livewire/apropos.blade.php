<div>
    
    
    <div class="container-fluid">
        <div class="card card-body blur shadow-blur">
            <div class="row gx-4">
                    <div class="row">
                  <div class="col-md-12 mt-4">
                      <div class="card h-100 mb-4">

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


                          <div class="card-header pb-0 px-3">
                              <div class="row">
                                  <div class="col-md-12">
                                      <h6 class="mb-0">Gestion des informations à propos</h6>
                                  </div>
                              </div>
                          </div>
                          <div class="card-body pt-4 p-3">
                            <form wire:submit.prevent="save" action="#" method="POST" role="form text-left" enctype="multipart/form-data">
        
                                <div class="row">
                                    
                                    <h3 for="">Entête</h3>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Description</label>
                                            <div class="">
                                                <textarea wire:model.lazy="apropos.descriptionEnt" class="form-control" id="about" rows="7" required ></textarea>
                                            </div>
                                            
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Image Entête</label>
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

                                    <div class="col-md-4">
                                    
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Visuel</label>
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
                                                @if ($this->apropos->imageEnt)
                                                <div class="row">
                                                    <div class="col-xl-4 mx-auto col-md-12 mb-xl-0 mt-2">
                                                        <div class="card card-blog card-plain">
                                                            <div class="position-relative">
                                                                <a class="d-block shadow-xl border-radius-xl">
                                                                    <img src=" {{ asset('/app/apropos/'.$this->apropos->imageEnt)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
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

                                    <h3 for="">Bloc 1</h3>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Année de création</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.anneeCreat" class="form-control" type="number" min="1800" max="{{date('Y')}}" required>
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Titre Principal</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.titre" class="form-control" type="text" required>
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Résumé Titre Principal</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.resume" class="form-control" type="text" required>
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Description</label>
                                            <div class="">
                                                <textarea wire:model.lazy="apropos.description" class="form-control" id="about" rows="7" required ></textarea>
                                            </div>
                                            
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Image 1</label>
                                            <div class="">
                                                 <input wire:model="imageB1" class="form-control" type="file"  accept="image/*" > 
                                @error('imageB1') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror

                                                 <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='imageB1'>
                                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                    Patientez le chargement de l'image...
                                                  </button>
                                            </div>
                                            @if ($imageB1)
                                                <div class="row">
                                                    <div class="col-xl-4 mx-auto col-md-12 mb-xl-0 mt-2">
                                                        <div class="card card-blog card-plain">
                                                            <div class="position-relative">
                                                                <a class="d-block shadow-xl border-radius-xl">
                                                                    <img src=" {{$imageB1->temporaryUrl()}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
                                                @if ($this->apropos->imageB1)
                                                <div class="row">
                                                    <div class="col-xl-4 mx-auto col-md-12 mb-xl-0 mt-2">
                                                        <div class="card card-blog card-plain">
                                                            <div class="position-relative">
                                                                <a class="d-block shadow-xl border-radius-xl">
                                                                    <img src=" {{ asset('/app/apropos/'.$this->apropos->imageB1)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endif
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Image 2</label>
                                            <div class="">
                                                 <input wire:model="imageB2" class="form-control" type="file"  accept="image/*" > 
                                @error('imageB2') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror

                                                 <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='imageB2'>
                                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                    Patientez le chargement de l'image...
                                                  </button>
                                            </div>
                                            @if ($imageB2)
                                            <div class="row">
                                                <div class="col-xl-3 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{$imageB2->temporaryUrl()}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            @if ($this->apropos->imageB2)
                                            <div class="row">
                                                <div class="col-xl-3 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{ asset('/app/apropos/'.$this->apropos->imageB2)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endif
                                         </div>
                                    </div>



                                    <h3 for="">Bloc 2</h3>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Titre Principal</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.titre2" class="form-control" type="text" required>
                                            </div>

                                            <label for="apropos-name" class="form-control-label">Résumé Titre Principal</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.resume2" class="form-control" type="text" required> 
                                            </div>

                                            <label for="apropos-name" class="form-control-label">Description</label>
                                            <div class="">
                                                <textarea wire:model.lazy="apropos.description2" class="form-control" id="about" rows="7" ></textarea>
                                            </div>
                                         </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Image </label>
                                            <div class="">
                                                 <input wire:model="imageC1" class="form-control" type="file"  accept="image/*" > 
                                            </div>
                                @error('imageC1') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror

                                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='imageC1'>
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                Patientez le chargement de l'image...
                                              </button>
                                         </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Visuel  </label>
                                            @if ($imageC1)
                                    <div class="row">
                                        <div class="col-xl-8 mx-auto col-md-12 mb-xl-0 mt-2">
                                            <div class="card card-blog card-plain">
                                                <div class="position-relative">
                                                    <a class="d-block shadow-xl border-radius-xl">
                                                        <img src=" {{$imageC1->temporaryUrl()}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                        
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    @if ($this->apropos->imageC1)
                                    <div class="row">
                                        <div class="col-xl-8 mx-auto col-md-12 mb-xl-0 mt-2">
                                            <div class="card card-blog card-plain">
                                                <div class="position-relative">
                                                    <a class="d-block shadow-xl border-radius-xl">
                                                        <img src=" {{ asset('/app/apropos/'.$this->apropos->imageC1)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="apropos-name" class="form-control-label">Titre Principal 1 (bloc vert)</label>
                                    <div class="">
                                        <input wire:model.lazy="apropos.titre3" class="form-control" type="text" required>
                                    </div>

                                    <label for="apropos-name" class="form-control-label">Nombre</label>
                                    <div class="">
                                        <input wire:model.lazy="apropos.nombre3" class="form-control" type="number" min="1" required>
                                    </div>

                                    <label for="apropos-name" class="form-control-label">Description</label>
                                    <div class="">
                                        <textarea wire:model.lazy="apropos.description3" class="form-control" id="about" rows="5"></textarea>
                                    </div>
                                 </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="apropos-name" class="form-control-label">Titre Principal 2 (bloc vert)</label>
                                    <div class="">
                                        <input wire:model.lazy="apropos.titre4" class="form-control" type="text" required>
                                    </div>

                                    <label for="apropos-name" class="form-control-label">Nombre</label>
                                    <div class="">
                                        <input wire:model.lazy="apropos.nombre4" class="form-control" type="number" min="1" required>
                                    </div>

                                    <label for="apropos-name" class="form-control-label">Description</label>
                                    <div class="">
                                        <textarea wire:model.lazy="apropos.description4" class="form-control" id="about" rows="5" ></textarea>
                                    </div>
                                 </div>
                            </div>

                            <h3>Bloc 3</h3>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="apropos-name" class="form-control-label">Nom du directeur général</label>
                                    <div class="">
                                        <input wire:model.lazy="apropos.dg" class="form-control" type="text" required  placeholder="Nom du directeur général" id="apropos-name">
                                    </div>
                                 </div>
                            </div>
                           

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="apropos-name" class="form-control-label">Photo  de directeur général</label>
                                    <div class="">
                                        <input wire:model="image" class="form-control" type="file" placeholder="Visuel du apropos" id="apropos-name" accept="image/*" > 
                                    </div>
                                @error('image') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror

                                    <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image'>
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        Patientez le chargement de l'image...
                                      </button>
                                </div>

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

                                  @if ($apropos->image)
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">
                                                            <img src=" {{asset('/app/membre/'.$apropos->image)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                  @endif

                                @endif
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">

                                    <label for="apropos-name" class="form-control-label">Description</label>
                                    <div class="">
                                        <textarea wire:model.lazy="apropos.description5" class="form-control" id="about" rows="7"  required></textarea>
                                    </div>
                                 </div>
                            </div>

                            <h3>Bloc 4</h3>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="apropos-name" class="form-control-label">Titre Principal</label>
                                    <div class="">
                                        <input wire:model.lazy="apropos.titre6" class="form-control" type="text" required>
                                    </div>
                                 </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="apropos-name" class="form-control-label">Résumé Titre Principal</label>
                                    <div class="">
                                        <input wire:model.lazy="apropos.resume6" class="form-control" type="text" required>
                                    </div>
                                 </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="apropos-name" class="form-control-label">Description</label>
                                    <div class="">
                                        <textarea wire:model.lazy="apropos.description6" class="form-control" id="about" rows="7"  required></textarea>
                                    </div>
                                    
                                 </div>
                            </div>



                            <h3>Information Complémentaires</h3>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Email 1</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.email1" class="form-control" type="email" required="" placeholder="Email 1" id="apropos-name">
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Email 2</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.email2" class="form-control" type="email"  placeholder="Email 2" id="apropos-name">
                                            </div>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Téléphone 1</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.telephone1" class="form-control" type="text" required="" placeholder="Téléphone 1" id="apropos-name">
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Téléphone 2</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.telephone2" class="form-control" type="text"  placeholder="Téléphone 2" id="apropos-name">
                                            </div>
                                         </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Bureau</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.bureau" class="form-control" type="text" required="" placeholder="Bureau" id="apropos-name" required> 
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Dépot</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.depot" class="form-control" type="text"  placeholder="Dépot" id="apropos-name" required>
                                            </div>
                                         </div>
                                    </div>

        
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Nombre d'année d'expérience</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.annee_experience" class="form-control" type="number" placeholder="Nombre d'année d'expérience" id="apropos-name" min="1">
                                            </div>
                                         </div>
                                    </div>
        
                                   
                                            
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Adresse facebook</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.facebook" class="form-control" type="text"  placeholder="Adresse facebook" id="apropos-name">
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Adresse twitter</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.twitter" class="form-control" type="text"  placeholder="Adresse twitter" id="apropos-name">
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Adresse instagram</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.instagram" class="form-control" type="text"  placeholder="Adresse instagram" id="apropos-name">
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Adresse linkedin</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.linkedin" class="form-control" type="text"  placeholder="Adresse linkedin" id="apropos-name">
                                            </div>
                                         </div>


                                    </div>
                                </div>
        
    
                                
                                
    
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
    
                                  <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Enregistrer</button>
                                  
                                </div>
                            </form>
            
                        </div>
                      </div>
                  </div>
              </div>
        </div>
    </div>







    <div class="col-12 mt-4">
        <div class="card mb-4">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-1">Membres</h6>
                <p class="text-sm">Liste des différents membres de l'entreprise</p>
            </div>
            <div class="card-body p-3">
                <div class="row">


                    @if ($mod!=null)
                      


                        <div class="col-md-12">
                            <div class="card h-100 mb-4">
                                <div class="card-header pb-0 px-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="mb-0">Modifier un membre</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-4 p-3">
                                  <form wire:submit.prevent="updateMember" action="#" method="POST" role="form text-left">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <label for="user-name" class="form-control-label">Nom</label>
                                                  <div class="">
                                                      <input wire:model.lazy="membre.nom" class="form-control" type="text" placeholder="nom" id="user-name" required>
                                                  </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="user-name" class="form-control-label">Prenom</label>
                                                    <div class="">
                                                        <input wire:model.lazy="membre.prenom" class="form-control" type="text" placeholder="prenom" id="user-name">
                                                    </div>
                                                  </div>
                                                
                                              <div class="form-group">
                                                  <label for="user.location" class="form-control-label">Image</label>
                                                  <div class="">
                                                      <input wire:model.lazy="image2" class="form-control" type="file" id="name" >
                                                  </div>
                                @error('image2') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror

                                                  <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image2'>
                                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                    Patientez le chargement de l'image...
                                                  </button>
                                                @if ($image2)
                                                <div class="card-body p-3">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-md-5 mb-xl-0 mb-4">
                                                            <div class="card card-blog card-plain">
                                                                <div class="position-relative">
                                                                    <a class="d-block shadow-xl border-radius-xl">
                                                                        <img src="{{$image2->temporaryUrl()}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                @else
    
                                                <div class="card-body p-3">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-md-5 mb-xl-0 mb-4">
                                                            <div class="card card-blog card-plain">
                                                                <div class="position-relative">
                                                                    <a class="d-block shadow-xl border-radius-xl">
                                                                        <img src="{{asset('/app/membre/'.$membre->image)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
    
    
    
                                              </div>
                                          
                                        <div class="form-group">
                                          <label for="about">Description</label>
                                          <div class="">
                                              <textarea wire:model.lazy="membre.description" class="form-control" id="about" rows="7" placeholder="à propos du membre" required></textarea>
                                          </div>
                                       </div>
                                      <div class="d-flex justify-content-end">                          
                                        <button type="button" class="btn bg-gradient-danger btn-md mt-4 mb-4" wire:click="annulerMod()">Annuler</button>
                                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Modifier</button>
                                      </div>
                                  </form>
                  
                              </div>
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>

                        
                        @else
                        @foreach ($this->membres as $key=>$memb)

                        @if ($supp==$memb->id)
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                        <div class="d-flex  flex-column text-justify">
                            <h4 class="mb-3 text-sm alert alert-danger text-white text-center"><i class="fa fa-warning" aria-hidden="true"></i>  Confirmation de suppression de {{ $memb->nom }}</h4>
                             <span class="mb-2 text-xs">La suppression de ce membre sera irrevoquable et engendrera automatiquement la suppression de toutes les images liées à ce dernier. 
                                 <br>
                             Cliquez sur le bouton en sessous si vous souhaitez continuer la suppression.
                             </span>
                            <div class="mx-auto">
                                <button class="btn btn-danger" wire:click='delete({{$memb->id}},"{{$memb->image}}")'>
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
                            
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="{{asset('/app/membre/'.$memb->image)}}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <p class="text-gradient text-dark mb-2 text-sm">{{$memb->prenom}}</p>
                                    <a href="javascript:;">
                                        <h5>
                                            {{$memb->nom}}
                                        </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        {{ substr($memb->description,0,70 ).'...' }}
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <button type="button" class="btn btn-danger btn-sm mb-0" wire:click="$set('supp',{{$memb->id}})">Supprimer</button>
                                        <button type="button" class="btn btn-success btn-sm mb-0" wire:click="modifier({{$memb->id}})">Modifier</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                           
                        @endforeach

                    @endif

                    
                    

                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

                        @if ($addMember)
                        
                        @if (session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span
                                class="alert-text text-white">{{ session()->get('error')}}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                            </div>
                        @endif
                        <div class="col-md-12">
                            <div class="card h-100 mb-4">
                                <div class="card-header pb-0 px-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="mb-0">Nouveau membre</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-4 p-3">
                                  <form wire:submit.prevent="saveMember" action="#" method="POST" role="form text-left">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <label for="user-name" class="form-control-label">Nom</label>
                                                  <div class="">
                                                      <input wire:model.lazy="membre.nom" class="form-control" type="text" placeholder="nom" id="user-name" required>
                                                  </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="user-name" class="form-control-label">Prenom</label>
                                                    <div class="">
                                                        <input wire:model.lazy="membre.prenom" class="form-control" type="text" placeholder="prenom" id="user-name">
                                                    </div>
                                                  </div>
                                                
                                              <div class="form-group">
                                                  <label for="user.location" class="form-control-label">Image</label>
                                                  <div class="">
                                                      <input wire:model.lazy="image2" class="form-control" type="file" id="name" required>
                                @error('image2') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror
                                                      
                                                      <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image2'>
                                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                        Patientez le chargement de l'image...
                                                      </button>
                                                  </div>

                                                @if ($image2)
                                                <div class="card-body p-3">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-md-5 mb-xl-0 mb-4">
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
                                              </div>
                                          
                                        <div class="form-group">
                                          <label for="about">Description</label>
                                          <div class="">
                                              <textarea wire:model.lazy="membre.description" class="form-control" id="about" rows="7" placeholder="à propos du membre" required></textarea>
                                          </div>
                                       </div>
                                       <br>
                            <span class="mb-2 text-xs "><span class="text-danger ms-2 font-weight-bold ">
                                S'il vout plait patientez le chargement des images avant de passer à l'enregistrement.    
                            </span></span>
                                      <div class="d-flex justify-content-end">                          
                                        <button  class="btn bg-gradient-danger btn-md mt-4 mb-4" wire:click="$set('addMember',false)">Annuler</button>
                                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Enregistrer</button>
                                      </div>
                                  </form>
                  
                              </div>
                            </div>
                        </div>


                    @endif

                    @if ($mod==null)
                    @if (!$addMember)
                    <div class="card h-100 card-plain border"  wire:click='new'>

                        @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span class="alert-text text-white">{{ session()->get('success')}}</span>
                        </div>
                      @endif

                        <div class="card-body d-flex flex-column justify-content-center text-center">
                            <a href="javascript:;"  wire:click='new'>
                                <i class="fa fa-plus text-secondary mb-3" aria-hidden="true"></i>
                                <h5 class=" text-secondary"> Nouveau Membre </h5>
                            </a>
                        </div>
                    </div>
                        
                    @endif
                    @endif
                   
                    

                    </div>


                   


                </div>
                <div class="mt-3 d-flex justify-content-end">
                    <div>
                        {{$this->membres->links()}}
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>











    </div>


</div>
