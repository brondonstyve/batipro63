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
                                      <h6 class="mb-0">Gestion des étapes de construction</h6>
                                  </div>
                              </div>
                          </div>

                          <div class="card-body pt-4 p-3">
                            <form wire:submit.prevent="save" action="#" method="POST" role="form text-left" enctype="multipart/form-data">
        
                                <div class="row">
                                    
                                    <h3 for="">Entête</h3>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="etape-name" class="form-control-label">Titre de l'entête</label>
                                            <div class="">
                                                <input wire:model.lazy="etape.titreEnt" class="form-control" type="text" >
                                            </div>
                                            
                                         </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="etape-name" class="form-control-label">Description de l'entête</label>
                                            <div class="">
                                                <textarea wire:model.lazy="etape.descriptionEnt" class="form-control" id="about" rows="3"  ></textarea>
                                            </div>
                                            
                                         </div>
                                    </div>

                                   

                                    <h3 for="">Etape</h3>

                                    @for ($i = 1; $i < 11; $i++)
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="etape-name" class="form-control-label">Libellé de l'étape {{$i}}</label>
                                            <div class="">
                                                <input wire:model.lazy="etape.etape{{$i}}" class="form-control" type="text" >
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="etape-name" class="form-control-label">Titre de l'étape {{$i}}</label>
                                            <div class="">
                                                <input wire:model.lazy="etape.titre{{$i}}" class="form-control" type="tex3" >
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="etape-name" class="form-control-label">Description de l'étape {{$i}}</label>
                                            <div class="">
                                                <textarea rows="5" wire:model.lazy="etape.description{{$i}}" class="form-control"></textarea>
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="etape-name" class="form-control-label">Image de l'étape {{$i}}</label>
                                            <div class="">
                                                 <input wire:model="image{{$i}}" class="form-control" type="file"  accept="image/*" > 
                                                @error("image$i") <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror

                                                 <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image{{$i}}'>
                                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                    Patientez le chargement de l'image...
                                                  </button>
                                            </div>

                                            {{-- 
                                            @if ($image1)
                                            <div class="row">
                                                <div class="col-xl-3 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{$image1->temporaryUrl()}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @else--}}
                                            @if ($this->etape->image1 && $i==1)
                                            <div class="row">
                                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{ asset('/app/maison/'.$this->etape->image1)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                            @if ($this->etape->image2 && $i==2)
                                            <div class="row">
                                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{ asset('/app/maison/'.$this->etape->image2)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                            @if ($this->etape->image3 && $i==3)
                                            <div class="row">
                                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{ asset('/app/maison/'.$this->etape->image3)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                            @if ($this->etape->image4 && $i==4)
                                            <div class="row">
                                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{ asset('/app/maison/'.$this->etape->image4)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                            @if ($this->etape->image5 && $i==5)
                                            <div class="row">
                                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{ asset('/app/maison/'.$this->etape->image5)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif


                                            @if ($this->etape->image6 && $i==6)
                                            <div class="row">
                                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{ asset('/app/maison/'.$this->etape->image6)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                            @if ($this->etape->image7 && $i==7)
                                            <div class="row">
                                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{ asset('/app/maison/'.$this->etape->image7)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                            @if ($this->etape->image8 && $i==8)
                                            <div class="row">
                                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{ asset('/app/maison/'.$this->etape->image8)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                            @if ($this->etape->image9 && $i==9)
                                            <div class="row">
                                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{ asset('/app/maison/'.$this->etape->image9)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                            @if ($this->etape->image10 && $i==10)
                                            <div class="row">
                                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{ asset('/app/maison/'.$this->etape->image10)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            {{--@endif--}}


                                         </div>
                                    </div>

                                    @endfor



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












    </div>


</div>
