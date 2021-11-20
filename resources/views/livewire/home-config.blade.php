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
                                    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Image maison contemporaine</label>
                                            <div class="">
                                                <input wire:model="image1" class="form-control" type="file" accept="image/*"> 
                                            </div>
                                            @error('image1') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror
 
                                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image1'>
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                Patientez le chargement de l'image...
                                              </button>
                                            @if ($image1)
                                            <div class="row">
                                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{$image1->temporaryUrl()}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            @if ($this->home->imageMc)
                                            <div class="row">
                                                <div class="col-xl-12 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{ asset('/app/accueil/'.$this->home->imageMc)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
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
                                            <label for="apropos-name" class="form-control-label">Image Logement collectif</label>
                                            <div class="">
                                                <input wire:model="image2" class="form-control" type="file" accept="image/*"> 
                                            </div>
                                            @error('image2') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror

                                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image2'>
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                Patientez le chargement de l'image...
                                              </button>
                                            @if ($image2)
                                            <div class="row">
                                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{$image2->temporaryUrl()}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            @if ($this->home->imageLc)
                                            <div class="row">
                                                <div class="col-xl-12 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{ asset('/app/accueil/'.$this->home->imageLc)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
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
                                            <label for="apropos-name" class="form-control-label">Image maçonnerie générale</label>
                                            <div class="">
                                                <input wire:model="image3" class="form-control" type="file" accept="image/*"> 
                                            </div>
                                            @error('image3') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror
                                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image3'>
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                Patientez le chargement de l'image...
                                              </button>

                                            @if ($image3)
                                            <div class="row">
                                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{$image3->temporaryUrl()}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            @if ($this->home->imageMg)
                                            <div class="row">
                                                <div class="col-xl-12 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{ asset('/app/accueil/'.$this->home->imageMg)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endif
                                        </div>
                                    </div>

                                    <h3 for="">Bloc 1</h3>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Titre Principal</label>
                                            <div class="">
                                                <input wire:model.lazy="home.titreVert1" class="form-control" type="text" >
                                            </div>
                                            
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Résumé Titre Principal</label>
                                            <div class="">
                                                <input wire:model.lazy="home.titre1" class="form-control" type="text" >
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Slogan </label>
                                            <div class="">
                                                <input wire:model.lazy="home.slogan1" class="form-control" type="text" >
                                            </div>
                                         </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Texte</label>
                                            <div class="">
                                                <textarea wire:model.lazy="home.resume1" class="form-control" id="about" rows="10"></textarea>
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Image Bloc1</label>
                                            <div class="">
                                                <input wire:model="image4" class="form-control" type="file" accept="image/*"> 
                                            </div>
                                            @error('image4') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror
                                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image4'>
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                Patientez le chargement de l'image...
                                              </button>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">visuel Bloc1</label>

                                            @if ($image4)
                                            <div class="row">
                                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{$image4->temporaryUrl()}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            @if ($this->home->image1)
                                            <div class="row">
                                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{ asset('/app/accueil/'.$this->home->image1)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endif
                                         </div>
                                    </div>


                                    <h3>Bloc 2</h3>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Titre Principal</label>
                                            <div class="">
                                                <input wire:model.lazy="home.titreVert2" class="form-control" type="text" >
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Résumé Titre Principal</label>
                                            <div class="">
                                                <input wire:model.lazy="home.titre2" class="form-control" type="text" >
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Slogan </label>
                                            <div class="">
                                                <input wire:model.lazy="home.slogan2" class="form-control" type="text" >
                                            </div>
                                         </div>
                                    </div>
                                
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Texte</label>
                                            <div class="">
                                                <textarea wire:model.lazy="home.resume2" class="form-control" id="about" rows="5"></textarea>
                                            </div>
                                         </div>
                                    </div>
    

                                    <h3>Bloc 3</h3>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Titre Principal</label>
                                            <div class="">
                                                <input wire:model.lazy="home.titreVert3" class="form-control" type="text" >
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Résumé Titre Principal</label>
                                            <div class="">
                                                <input wire:model.lazy="home.titre3" class="form-control" type="text" >
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Slogan </label>
                                            <div class="">
                                                <input wire:model.lazy="home.slogan3" class="form-control" type="text" >
                                            </div>
                                         </div>
                                    </div>
                                
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Texte</label>
                                            <div class="">
                                                <textarea wire:model.lazy="home.resume3" class="form-control" id="about" rows="5"></textarea>
                                            </div>
                                         </div>
                                    </div>
    
                                         
                                    <h3>Bloc 4</h3>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Titre 1 + description  1 + image 1</label>
                                            <div class="">
                                                <input wire:model.lazy="home.slogan4" class="form-control mb-1" type="text" placeholder="titre">
                                                <textarea wire:model.lazy="home.resume4" class="form-control" id="about" rows="5" placeholder="description"></textarea>
                                                <input wire:model="image5" class="form-control mt-1" type="file" accept="image/*"> 
                                            @error('image5') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror
                                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image5'>
                                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                    Patientez le chargement de l'image...
                                                  </button>
                                                
                                                @if ($image5)
                                                    <div class="row">
                                                        <div class="col-xl-12 mx-auto col-md-12 mb-xl-0 mt-2">
                                                            <div class="card card-blog card-plain">
                                                                <div class="position-relative">
                                                                    <a class="d-block shadow-xl border-radius-xl">
                                                                        <img src=" {{$image5->temporaryUrl()}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @else
                                                    @if ($this->home->petiteImage1)
                                                    <div class="row">
                                                        <div class="col-xl-12 mx-auto col-md-12 mb-xl-0 mt-2">
                                                            <div class="card card-blog card-plain">
                                                                <div class="position-relative">
                                                                    <a class="d-block shadow-xl border-radius-xl">
                                                                        <img src=" {{ asset('/app/accueil/'.$this->home->petiteImage1)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
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

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Titre 2 + description  2 + image 2</label>
                                            <div class="">
                                                <input wire:model.lazy="home.slogan5" class="form-control mb-1" type="text" placeholder="titre">
                                                <textarea wire:model.lazy="home.resume5" class="form-control" id="about" rows="5" placeholder="description"></textarea>
                                                <input wire:model="image6" class="form-control mt-1" type="file" accept="image/*"> 
                                                @error('image6') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror

                                                <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image6'>
                                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                    Patientez le chargement de l'image...
                                                  </button>

                                                @if ($image6)
                                                <div class="row">
                                                    <div class="col-xl-12 mx-auto col-md-12 mb-xl-0 mt-2">
                                                        <div class="card card-blog card-plain">
                                                            <div class="position-relative">
                                                                <a class="d-block shadow-xl border-radius-xl">
                                                                    <img src=" {{$image6->temporaryUrl()}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
                                                @if ($this->home->petiteImage2)
                                                <div class="row">
                                                    <div class="col-xl-12 mx-auto col-md-12 mb-xl-0 mt-2">
                                                        <div class="card card-blog card-plain">
                                                            <div class="position-relative">
                                                                <a class="d-block shadow-xl border-radius-xl">
                                                                    <img src=" {{ asset('/app/accueil/'.$this->home->petiteImage2)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
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

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Titre 3 + description  3 + image 3</label>
                                            <div class="">
                                                <input wire:model.lazy="home.slogan6" class="form-control mb-1" type="text" placeholder="titre">
                                                <textarea wire:model.lazy="home.resume6" class="form-control" id="about" rows="5" placeholder="description"></textarea>
                                                <input wire:model="image7" class="form-control mt-1" type="file" accept="image/*"> 
                                            @error('image7') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror
                                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image7'>
                                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                    Patientez le chargement de l'image...
                                                  </button>
                                                @if ($image7)
                                                <div class="row">
                                                    <div class="col-xl-12 mx-auto col-md-12 mb-xl-0 mt-2">
                                                        <div class="card card-blog card-plain">
                                                            <div class="position-relative">
                                                                <a class="d-block shadow-xl border-radius-xl">
                                                                    <img src=" {{$image7->temporaryUrl()}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
                                                @if ($this->home->petiteImage3)
                                                <div class="row">
                                                    <div class="col-xl-12 mx-auto col-md-12 mb-xl-0 mt-2">
                                                        <div class="card card-blog card-plain">
                                                            <div class="position-relative">
                                                                <a class="d-block shadow-xl border-radius-xl">
                                                                    <img src=" {{ asset('/app/accueil/'.$this->home->petiteImage3)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
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

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Titre 4 + description  4 + image 4</label>
                                            <div class="">
                                                <input wire:model.lazy="home.slogan7" class="form-control mb-1" type="text" placeholder="titre">
                                                
                                                <textarea wire:model.lazy="home.resume7" class="form-control" id="about" rows="5" placeholder="description"></textarea>
                                                <input wire:model="image8" class="form-control mt-1" type="file" accept="image/*"> 
                                            @error('image8') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror
                                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image8'>
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                    Patientez le chargement de l'image...
                                                  </button>
                                                @if ($image8)
                                                <div class="row">
                                                    <div class="col-xl-12 mx-auto col-md-12 mb-xl-0 mt-2">
                                                        <div class="card card-blog card-plain">
                                                            <div class="position-relative">
                                                                <a class="d-block shadow-xl border-radius-xl">
                                                                    <img src=" {{$image8->temporaryUrl()}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
                                                @if ($this->home->petiteImage4)
                                                <div class="row">
                                                    <div class="col-xl-12 mx-auto col-md-12 mb-xl-0 mt-2">
                                                        <div class="card card-blog card-plain">
                                                            <div class="position-relative">
                                                                <a class="d-block shadow-xl border-radius-xl">
                                                                    <img src=" {{ asset('/app/accueil/'.$this->home->petiteImage4)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
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


                                    





                                          
                                    <h3>Bloc 5</h3>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Titre</label>
                                            <div class="">
                                                <input wire:model.lazy="home.slogan8" class="form-control mb-1" type="text" placeholder="titre">
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Texte</label>
                                            <div class="">
                                                <textarea wire:model.lazy="home.resume8" class="form-control" id="about" rows="5" placeholder="description"></textarea>
                                            </div>
                                         </div>
                                    </div>

                                    <h3 for="">Bloc 6</h3>
                             

                                    <div class="col-md-4">
                                        <div class="form-group">

                                            <label for="apropos-name" class="form-control-label">titre </label>
                                            <div class="">
                                                <input wire:model.lazy="home.titreE" class="form-control" type="text" >
                                            </div>
                                            <label for="apropos-name" class="form-control-label">description de l'équipe</label>
                                            <div class="">
                                                <textarea wire:model.lazy="home.descriptionE" class="form-control" id="about" rows="10"></textarea>
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Image d'équipe</label>
                                            <div class="">
                                                <input wire:model="image9" class="form-control" type="file" accept="image/*"> 
                                            </div>
                                            @error('image9') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror
                                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image9'>
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                Patientez le chargement de l'image...
                                              </button>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">visuel de l'équipe</label>

                                            @if ($image9)
                                            <div class="row">
                                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{$image9->temporaryUrl()}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            @if ($this->home->imageE)
                                            <div class="row">
                                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{ asset('/app/accueil/'.$this->home->imageE)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endif
                                         </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Lien en savoir plus</label>
                                            <div class="">
                                                <input wire:model.lazy="home.savoir" class="form-control mb-1" type="text" placeholder="exemple : https://www.clermont.com/actu">
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Lien en Vidéo</label>
                                            <div class="">
                                                <input wire:model.lazy="home.video" class="form-control mb-1" type="text" placeholder="exemple : https://www.youtube.com/actu">
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Lien de l'offre</label>
                                            <div class="">
                                                <input wire:model.lazy="home.offre" class="form-control mb-1" type="text" placeholder="exemple : https://www.offre.com/actu">
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
    
                                  <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:loading.remove wire:target='save'>Enregistrer</button>
                                  <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:loading >Patientez...</button>
                                  
                                </div>
                            </form>
            
                        </div>
                      </div>
                  </div>
              </div>
        </div>
    </div>



    </div>


</div>
