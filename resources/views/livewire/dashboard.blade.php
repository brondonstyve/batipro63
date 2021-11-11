 <main>  
    <div class="container-fluid py-4">
      <div class="row">



        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Services</p>
                    <h5 class="font-weight-bolder mb-0">
                      {{$service}}
                      <span class="text-success text-sm font-weight-bolder">+</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Projet</p>
                    <h5 class="font-weight-bolder mb-0">
                      {{$projet}}
                      <span class="text-success text-sm font-weight-bolder">+</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">terrain</p>
                    <h5 class="font-weight-bolder mb-0">
                      {{$terrain}}
                      <span class="text-danger text-sm font-weight-bolder">+</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Maison virtuelle</p>
                    <h5 class="font-weight-bolder mb-0">
                      {{$maison}}
                      <span class="text-success text-sm font-weight-bolder">+</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-spaceship text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="row mt-4">

      @if ($service!=0)
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-6">
                  <div class="d-flex flex-column h-100">
                    <p class="mb-1 pt-2 text-bold">Service</p>
                    <h5 class="font-weight-bolder">{{ substr($this->services->libelle,0,35).'...' }}</h5>
                    <p class="mb-5">{{ substr($this->services->description,0,150).'...' }}</p>
                    <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{route('services')}}">
                      Voir tout
                      <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                  <div class="bg-gradient-primary border-radius-lg h-100">
                    <img src="{{asset('/assets/img/shapes/waves-white.svg')}}" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                    <div class="position-relative d-flex align-items-center justify-content-center h-100">
                      <img class="w-100 position-relative z-index-2 pt-4" src="/assets/img/illustrations/warning-rocket.png">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      
      @else
      
      
      <div class="col-lg-7 mb-lg-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-lg-6">
                <div class="d-flex flex-column h-100">
                    <p class="mb-1 pt-2 text-bold">Service</p>
                    <p class="mb-5">Aucun service Enregistré pour le moment</p>
                  <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{route('services')}}">
                    Ajouter un service
                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
              <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                <div class="bg-gradient-primary border-radius-lg h-100">
                  <img src="{{asset('/assets/img/shapes/waves-white.svg')}}" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                  <div class="position-relative d-flex align-items-center justify-content-center h-100">
                    <img class="w-100 position-relative z-index-2 pt-4" src="{{asset('/assets/img/illustrations/warning-rocket.png')}}">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      




      @endif

      @if ($this->actualite!=null)
      <div class="col-lg-5">
        <div class="card h-100 p-3">
          <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url({{asset('/app/actualite/'.$this->actualite->image)}});">
            <span class="mask bg-gradient-dark"></span>
            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
              <h5 class="text-white font-weight-bolder mb-4 pt-2">Dernière actualité</h5>
              <h6 class="text-white font-weight-bolder mb-4 pt-2">{{ substr($this->actualite->titre,0,35).'...' }}</h6>
              <p class="text-white">{{ substr($this->actualite->article1,0,150).'...' }}.</p>
              <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{route('actualite')}}">
                Ajouter une actualité
                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      @else
      <div class="col-lg-5">
        <div class="card h-100 p-3">
          <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url({{asset('/assets/img/ivancik.jpg')}});">
            <span class="mask bg-gradient-dark"></span>
            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
              <h5 class="text-white font-weight-bolder mb-4 pt-2">Actualité</h5>
              <p class="text-white">Aucune actualité enregistré pour le moment.</p>
              <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{route('actualite')}}">
                Ajouter une actualité
                <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      @endif
      


    </div>



    </div>
  </main>