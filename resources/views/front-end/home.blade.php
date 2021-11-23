@extends('front-end/defaut/base', ['title' => 'Accueil | '] )
{{--  @extends('front-end/partials/base', ['title' => 'Batipro63 – Notre métier, la construction sur mesure ', 'body_class' => 'detail-service corporate home2-corporate'] )  --}}

@section('css_js')
    
    <link rel="stylesheet" href="{{ asset('/front-end/assets/masterslider/style/masterslider.css') }}" />
    <!-- MasterSlider default skin -->
    <link rel="stylesheet" href="{{ asset('/front-end/assets/masterslider/skins/default/style.css') }}" />
    <script src="{{ asset('/front-end/assets/masterslider/masterslider.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
 
    <link rel="stylesheet" href="{{ asset('/modal/fonts/icomoon/style.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/modal/css/bootstrap.min.css')}}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('/modal/css/style.css')}}">
@endsection

@section('content')
    <section class="container-banner line-plus line-3">
        <!-- masterslider -->
        <div class="master-slider ms-skin-default" id="masterslider">
        <!-- new slide -->
        <div class="ms-slide">
            <!-- slide background -->
            @if ($infos)
                @if ($infos->imageMc)
            <img src="{{ asset('/app/accueil/'.$infos->imageMc) }}" data-src="{{ asset('/app/accueil/'.$infos->imageMc) }}" alt="lorem ipsum dolor sit"/>
                    
                @else
            <img src="{{ asset('/front-end/assets/masterslider/style/blank.gif') }}" data-src="{{ asset('/front-end/assets/img/pano1.jpg') }}" alt="lorem ipsum dolor sit"/>
                    
                @endif
            @else
            <img src="{{ asset('/front-end/assets/masterslider/style/blank.gif') }}" data-src="{{ asset('/front-end/assets/img/pano1.jpg') }}" alt="lorem ipsum dolor sit"/>
                
            @endif
            <!-- slide text layer -->
            <div class="ms-thumb" onmouseover="bigImg()">
                <a href=" {{route('mc')}} ">
                    <div class="content-thumbs">
                        <h3>Maison</h3>
                        <p>Contemporaine</p>
                    </div>
                </a>
                
            </div>
        </div>
        <!-- end of slide -->
        <!-- new slide -->
        <div class="ms-slide">
            <!-- slide background -->
            @if ($infos)
            @if ($infos->imageMc)
                <img src="{{ asset('/app/accueil/'.$infos->imageLc) }}" data-src="{{ asset('/app/accueil/'.$infos->imageLc) }}" alt="lorem ipsum dolor sit"/>
                        
                    @else
                <img src="{{ asset('/front-end/assets/masterslider/style/blank.gif') }}" data-src="{{ asset('/front-end/assets/img/pano1.jpg') }}" alt="lorem ipsum dolor sit"/>
                        
                    @endif
                @else
                <img src="{{ asset('/front-end/assets/masterslider/style/blank.gif') }}" data-src="{{ asset('/front-end/assets/img/pano1.jpg') }}" alt="lorem ipsum dolor sit"/>
            
            @endif
            <!-- slide text layer -->
            <div class="ms-thumb"  onmouseover="bigImg()">
                <a href=" {{route('lc')}} ">
                    <div class="content-thumbs ">
                    <h3>Logement</h3>
                    <p>Collectif</p>
                </div>
            </a>

            </div>
        </div>
        <!-- end of slide -->
        <!-- new slide -->
        <div class="ms-slide">
            <!-- slide background -->
            @if ($infos)
                    @if ($infos->imageMc)
                <img src="{{ asset('/app/accueil/'.$infos->imageMg) }}" data-src="{{ asset('/app/accueil/'.$infos->imageMg) }}" alt="lorem ipsum dolor sit"/>
                        
                    @else
                <img src="{{ asset('/front-end/assets/masterslider/style/blank.gif') }}" data-src="{{ asset('/front-end/assets/img/pano1.jpg') }}" alt="lorem ipsum dolor sit"/>
                        
                    @endif
                    @else
            <img src="{{ asset('/front-end/assets/masterslider/style/blank.gif') }}" data-src="{{ asset('/front-end/assets/img/pano1.jpg') }}" alt="lorem ipsum dolor sit"/>
            
        @endif
            <!-- slide text layer -->
            <div class="ms-thumb"  onmouseover="bigImg()">
                <a href=" {{route('mg')}} ">
                    <div class="content-thumbs ">
                    <h3>Maçonnerie</h3>
                    <p>Générale</p>
                </div>
            </a>
        </div>
        </div>
        <!-- end of slide -->
        </div>
        <!-- end of masterslider -->
    </section>

    @if ($infos)
        

    <section class="container-why line-plus" id="why">
        <div class="container flex ">
        <div class="left-bloc-text">
            <div class="header-title">
                <h3 class="green">{!! $infos->titreVert1 !!}</h3>
                <h4>{!! $infos->titre1 !!}</h4>
            </div>
            <div class="content-bloc-description add-square">
                <p class="head green">
                    {!! $infos->slogan1 !!}
                </p>
                <p class="jost-style jost-style-100">
                    {!! $infos->resume1 !!}
                </p>
                <div class="content-exp flex align-center">
                    <div class="numb bebas"> 
                    @if ($about)
                        {{date('Y')-$about->anneeCreat}}
                    @else
                    {{date('Y')-2008}}

                    @endif    
                    </div>
                    <div class="content-text-">
                    <p class="jost-style jost-style-100">En construction</p>
                    <p class="caveat-style">ans d'expérience</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-bloc-img ">
            @if ($infos->image1)
            <img src="{{ asset('/app/accueil/'.$infos->image1)}}" alt="">
                
            @else
            <img src="{{ asset('/front-end/assets/img/why.jpg')}}" alt="">
                
            @endif
        </div>
        </div>
    </section>


    @else
        <section class="container-why line-plus" id="why">
            <div class="container flex ">
            <div class="left-bloc-text">
                <div class="header-title">
                    <h3 class="green">Pourquoi BATIPRO ?</h3>
                    <h4>Ici nous concevons votre maison sur mesure</h4>
                </div>
                <div class="content-bloc-description add-square">
                    <p class="head green">Notre métier la construction</p>
                    <p class="jost-style jost-style-100">Fort d’une expérience de plus de 10 années Batipro a dévéloppé pour votre futur villa un concept novateur alliant design architectural et technologies odernes, afin de répondre au mieux à vos atentes d’élégance et de fonctionnalités</p>
                    <p  class="jost-style jost-style-100">Votre projet est unique, nous vous accompagnons tout au long de la réalisation grâce à notre équipe réactive et à l’écoute.</p>
                    <div class="content-exp flex align-center">
                        <div class="numb bebas">11</div>
                        <div class="content-text-">
                        <p class="jost-style jost-style-100">En construction</p>
                        <p class="caveat-style">ans d'expérience</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-bloc-img ">
                <img src="{{ asset('/front-end/assets/img/why.jpg')}}" alt="">
            </div>
            </div>
        </section>
    @endif
   
    <div class="content-separator after-white"></div>
                <section class="container-projects line-plus line-2" >
                    <div class="container">
                        @if ($infos)
                        <div class="content-text-up">
                            <div class="header-title">
                                <h3 class="green"> {!!$infos->titreVert2!!} </h3>
                                <h4>{!!$infos->titre2!!} </h4>
                            </div>
                            <div class="content-bloc-description add-square" style="max-width: 60%;text-align: justify; ">
                                <p class="head green">{!! $infos->slogan2 !!}</p>
                                @if ($infos->resume2)
                                <p class="jost-style jost-style-100">{!!$infos->resume2!!}</p>
                                    
                                @else
                                <p class="jost-style jost-style-100">Fort Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    
                                @endif
                            </div>
                        </div>
                        @else
                        <div class="content-text-up">
                            <div class="header-title">
                                <h3 class="green">Nos réalisations</h3>
                                <h4>Votre projet est aussi le nôtre</h4>
                            </div>
                            <div class="content-bloc-description add-square" style="max-width: 60%;text-align: justify; ">
                                <p class="head green">Il n’y a pas de pétit projet, chaque projet est unique ...</p>
                                <p class="jost-style jost-style-100">Fort Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                        @endif
                        <br>
                        <br>

                                {{-- <div class="content-list-projects1 line-plus line-3"> --}}
                                    {{-- <div class="projects-categories filter-options">
                                        @if (sizeOf($projets)!=0)
                                        <button class="active" data-group="all">Tout</button>
                                        @foreach ($services as $service)
                                        <button style="text-transform: lowercase" data-group="{{$service->service}}" >{{$service->service}}</button>
                                        @endforeach
                                            
                                        @endif 

                                        <button class="active" data-group="all">Tout</button>
                                        <button  data-group="Maison individuelle">Maison individuelle</button>
                                        <button  data-group="Logement collectif">Logement collectif</button>
                                        <button  data-group="Maçonnerie générale">Maçonnerie générale</button>
                                        <button  data-group="Projet 3D">Projet 3D</button>
                                    </div> --}}
                                    {{-- <div class="content-projects-wrapper">
                                        <div id="grid" class="flex my-shuffle-container space-around">
                                        
                                            @foreach ($projets as $projet)
                                                <div class="content-project-wrapper hg-height"  data-groups='["@if($projet->service=='Maison contemporaine'){{'Maison individuelle'}}@else{{$projet->service}}@endif"]' style="background:url({{ asset('/app/projet/'.$projet->img_principale)}});background-repeat: no-repeat;">
                                                    <div class="project-inner">
                                                    <a href="{{route('detailProjet',encrypt($projet->id))}}">
                                                        <img alt="Image placeholder" src="{{asset('/app/projet/'.$projet->img_principale)}}" style="height: 400px">

                                                    <div class="inner-overlay">
                                                        <div class="content-overlay"> 
                                                        <div class="content-icone-plus"></div>
                                                        <div class="title-project">
                                                            <h3> {{$projet->libelle}} </h3>
                                                        </div>
                                                        <div class="content-title-category">{{$projet->service}}</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                            </div>
                                        
                                        @endforeach
                                        
                                        </div>
                                        <div class="my-sizer-element"></div>
                                    </div> --}}


                                    {{-- <div class="content-projects-wrapper1">
                                        <div id="grid" class="flex my-shuffle-container space-around">
                                          
                                        @foreach ($projets as $key=>$item)
                                        @if ($item->service=='Maison individuelle' || $item->service=='Maison contemporaine')
                                        <div class="content-project-wrapper1 hg-height"  style="margin-bottom: -5%">
                                            <div class="project-inner">
                                              <a href="{{route('detailProjet',encrypt($item->id))}}">
                                
                                            
                                              <img src="{{ asset('/app/projet/'.$item->img_principale)}}" style="width: 100%;height: 350px;">
                                            
                                
                                              <div class="inner-overlay">
                                                 <div class="content-overlay text-center"> 
                                                    <div class="content-icone-plus text-center"></div>           
                                                    <div class="title-project">
                                                       <h3> {{$item->libelle}} </h3>
                                                    </div>
                                                    <div class="content-title-category">
                                                      @if($item->service=='Maison individuelle'){{'Maison contemporaine'}}@else{{$item->service}}@endif  
                                                    </div>
                                                 </div>
                                              </div>
                                        </a>
                                          </div>
                                        </div>
                                        @endif
                                        @endforeach

                                        @foreach ($projets as $key=>$item)
                                        @if ($item->service=='Logement collectif')
                                        <div class="content-project-wrapper1 hg-height"  style="margin-bottom: -5%">
                                            <div class="project-inner">
                                              <a href="{{route('detailProjet',encrypt($item->id))}}">
                                
                                            
                                              <img src="{{ asset('/app/projet/'.$item->img_principale)}}" style="width: 100%;height: 350px;">
                                            
                                
                                              <div class="inner-overlay">
                                                 <div class="content-overlay"> 
                                                    <div class="content-icone-plus"></div>           
                                                    <div class="title-project">
                                                       <h3> {{$item->libelle}} </h3>
                                                    </div>
                                                    <div class="content-title-category">
                                                      @if($item->service=='Maison individuelle'){{'Maison contemporaine'}}@else{{$item->service}}@endif  
                                                    </div>
                                                 </div>
                                              </div>
                                        </a>
                                          </div>
                                        </div>
                                        @endif
                                        @endforeach

                                        @foreach ($projets as $key=>$item)
                                        @if ($item->service=='Maçonnerie générale')
                                        <div class="content-project-wrapper1 hg-height"  style="margin-bottom: -5%">
                                            <div class="project-inner">
                                              <a href="{{route('detailProjet',encrypt($item->id))}}">
                                
                                            
                                              <img src="{{ asset('/app/projet/'.$item->img_principale)}}" style="width: 100%;height: 350px;">
                                            
                                
                                              <div class="inner-overlay">
                                                 <div class="content-overlay"> 
                                                    <div class="content-icone-plus"></div>           
                                                    <div class="title-project">
                                                       <h3> {{$item->libelle}} </h3>
                                                    </div>
                                                    <div class="content-title-category">
                                                      @if($item->service=='Maison individuelle'){{'Maison contemporaine'}}@else{{$item->service}}@endif  
                                                    </div>
                                                 </div>
                                              </div>
                                        </a>
                                          </div>
                                        </div>
                                        @endif
                                        @endforeach

                                        
                                        
                                      </div>
                                      <div class="my-sizer-element"></div>
                                
                                    </div>

                                </div> --}}

                                <div class="content-list-projects line-plus line-3">
                                    <br>
                                    <br>
                                    <div class="content-projects-wrapper">
                                       <div id="grid" class="flex my-shuffle-container space-around shuffle" style="position: relative; overflow: hidden; height: 995px; transition: height 250ms cubic-bezier(0.4, 0, 0.2, 1) 0s;">
                                          
                                        @if ($infos)

                                        <div class="content-project-wrapper hg-height shuffle-item shuffle-item--visible" style="background: url({{ asset('/app/accueil/'.$infos->projetMC)}}); position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;background-repeat:no-repeat">
                                            <a href="{{route('mc')}}">
                                                <div class="project-inner">
                                                    <div class="inner-overlay">
                                                       <div class="content-overlay">
                                                          <div class="title-project">
                                                             <h3>Maisons Contemporaines</h3>
                                                          </div>
                                                         </div>
                                                    </div>
                                                 </div>
                                            </a>
                                            
                                         </div>

                                         <div class="content-project-wrapper hg-height shuffle-item shuffle-item--visible" style="background: url({{ asset('/app/accueil/'.$infos->projetLC)}}); position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;background-repeat:no-repeat">
                                            <a href="{{route('lc')}}">
                                                <div class="project-inner">
                                                    <div class="inner-overlay">
                                                       <div class="content-overlay">
                                                          <div class="title-project">
                                                             <h3>Logements Collectifs</h3>
                                                          </div>
                                                         </div>
                                                    </div>
                                                 </div>
                                            </a>
                                            
                                         </div>

                                         <div class="content-project-wrapper hg-height shuffle-item shuffle-item--visible" style="background: url({{ asset('/app/accueil/'.$infos->projetMg)}}); position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;background-repeat:no-repeat">
                                            <a href="{{route('mg')}}">
                                                <div class="project-inner">
                                                    <div class="inner-overlay">
                                                       <div class="content-overlay">
                                                          <div class="title-project">
                                                             <h3>Maçonnerie Générale</h3>
                                                          </div>
                                                         </div>
                                                    </div>
                                                 </div>
                                            </a>
                                            
                                         </div>


                                        @endif

                                        {{-- @foreach ($projets as $key=>$item)
                                        @if ($item->service=='Maison individuelle' || $item->service=='Maison contemporaine')

                                        <div class="content-project-wrapper hg-height shuffle-item shuffle-item--visible" style="background: url({{ asset('/app/projet/'.$item->img_principale)}}); position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                                            <div class="project-inner">
                                               <div class="inner-overlay">
                                                  <div class="content-overlay">
                                                     <div class="content-icone-plus"><a href="#!">+</a></div>
                                                     <div class="title-project">
                                                        <h3>{{$item->libelle}}</h3>
                                                     </div>
                                                     <div class="content-title-category"> @if($item->service=='Maison individuelle'){{'Maison contemporaine'}}@else{{$item->service}}@endif  </div>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                        @endif
                                        @endforeach
                                       

                                        @foreach ($projets as $key=>$item)
                                        @if ($item->service=='Logement collectif')
                                        <div class="content-project-wrapper hg-height shuffle-item shuffle-item--visible" style="background: url({{ asset('/app/projet/'.$item->img_principale)}}); position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                                            <div class="project-inner">
                                               <div class="inner-overlay">
                                                  <div class="content-overlay">
                                                     <div class="content-icone-plus"><a href="#!">+</a></div>
                                                     <div class="title-project">
                                                        <h3>{{$item->libelle}}</h3>
                                                     </div>
                                                     <div class="content-title-category"> @if($item->service=='Maison individuelle'){{'Maison contemporaine'}}@else{{$item->service}}@endif  </div>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>

                                        @endif
                                        @endforeach

                                        @foreach ($projets as $key=>$item)
                                        @if ($item->service=='Maçonnerie générale')
                                       
                                        <div class="content-project-wrapper hg-height shuffle-item shuffle-item--visible" style="background: url({{ asset('/app/projet/'.$item->img_principale)}}); position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                                            <div class="project-inner">
                                               <div class="inner-overlay">
                                                  <div class="content-overlay">
                                                     <div class="content-icone-plus"><a href="#!">+</a></div>
                                                     <div class="title-project">
                                                        <h3>{{$item->libelle}}</h3>
                                                     </div>
                                                     <div class="content-title-category"> @if($item->service=='Maison individuelle'){{'Maison contemporaine'}}@else{{$item->service}}@endif  </div>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                        
                                        @endif
                                        @endforeach --}}

                                         

                                       </div>
                                       <div class="my-sizer-element"></div>
                                    </div>
                                 </div>



                                <br>

                                <div class="content-btn-action-">
                                    <a href=" {{route('projet-front')}} "><span>voir toutes les réalisations</span></a>
                                </div>
                    </section>
                    <div class="content-separator after-black"></div>
                    <section class="container-solution line-plus" id="solution">
                    <div class="container">


        @if ($infos)
        <div class="content-text-up">
            <div class="header-title">
                <h3 class="green"> {{$infos->titreVert3}} </h3>
                <h4>{{$infos->titre3}} </h4>
            </div>
            <div class="content-bloc-description add-square">
                <p class="head green">{{$infos->slogan3}} </p>
                <p class="jost-style jost-style-100">
                    {{$infos->resume3}} 
                </p>
            </div>
            <div class="content-btn-action-">
                <a href="{{route('contact')}}"><span>Un projet, parlons-en !</span></a>
            </div>
            </div>
        @else
        <div class="content-text-up">
            <div class="header-title">
                <h3 class="green">SOLUTION CLÉ EN MAIN</h3>
                <h4>Une expertise portée par notre diversité technique</h4>
            </div>
            <div class="content-bloc-description add-square">
                <p class="head green">Batipro63, spécialiste des Maison contemporaines ...</p>
                <p class="jost-style jost-style-100">Vous propose des maisons sur mesure, personnalisables, adaptables. En collaboration avec nos architectes et dessinateurs, nous concevons vos maisons comme vous les avez imaginées.</p>
            </div>
            <div class="content-btn-action-">
                <a href="{{route('contact')}}"><span>Un projet, parlons-en !</span></a>
            </div>
            </div>
        @endif


        <div class="content-list-plus">

            @if ($infos)
            <div class="content-plus-wrapper flex">
                <div class="item-wrapper">
                <div class="item-inner-">
                <div class="content-icon-">
                <img src="{{ asset('/app/accueil/'.$infos->petiteImage1)}}" alt="">
                </div>
                <div class="title-plus green">{{$infos->slogan4}}</div>
                <p>{{$infos->resume4}}</p>
                </div>
                </div>
                <div class="item-wrapper">
                <div class="item-inner-">
                <div class="content-icon-">
                    <img src="{{ asset('/app/accueil/'.$infos->petiteImage2)}}" alt="">
                </div>
                <div class="title-plus green">{{$infos->slogan5}}</div>
                <p>{{$infos->resume5}}</p>
                </div>
                </div>
                <div class="item-wrapper">
                <div class="item-inner-">
                <div class="content-icon-">
                    <img src="{{ asset('/app/accueil/'.$infos->petiteImage3)}}" alt="">
                </div>
                <div class="title-plus green">{{$infos->slogan6}}</div>
                <p>{{$infos->resume6}}</p>
                </div>
                </div>
                <div class="item-wrapper">
                <div class="item-inner-">
                <div class="content-icon-">
                    <img src="{{ asset('/app/accueil/'.$infos->petiteImage4)}}" alt="">
                </div>
                <div class="title-plus green">{{$infos->slogan7}}</div>
                <p>{{$infos->resume7}}</p>
                </div>
                </div>
                </div>
            @else
            <div class="content-plus-wrapper flex">
                <div class="item-wrapper">
                <div class="item-inner-">
                <div class="content-icon-">
                <img src="{{ asset('/front-end/assets/img/architect.png')}}" alt="">
                </div>
                <div class="title-plus green">Architecture</div>
                <p>Profitez de la compétence et de l’expérience de notre architecte, de l’architecture d’intérieur et de nos dessinateurs.</p>
                </div>
                </div>
                <div class="item-wrapper">
                <div class="item-inner-">
                <div class="content-icon-">
                <img src="{{ asset('/front-end/assets/img/features.png')}}" alt="">
                </div>
                <div class="title-plus green">customisation</div>
                <p>Vous avez la possibilité de personnaliser vos plans suivant vos besoins.</p>
                </div>
                </div>
                <div class="item-wrapper">
                <div class="item-inner-">
                <div class="content-icon-">
                <img src="{{ asset('/front-end/assets/img/budget.png')}}" alt="">
                </div>
                <div class="title-plus green">Adaptabilté</div>
                <p>Tous nos projets sont modifiables en fonction de votre terrain et de votre budget.</p>
                </div>
                </div>
                <div class="item-wrapper">
                <div class="item-inner-">
                <div class="content-icon-">
                <img src="{{ asset('/front-end/assets/img/certificate.png')}}" alt="">
                </div>
                <div class="title-plus green">Expérience</div>
                <p>Bénéficiez du savoir-faire d’une entreprise familiale qui a réalisé plus de 400 projets sur la région Auvergne.</p>
                </div>
                </div>
                </div>
            @endif


        



        </div>
    </div>
    </section>
    <section class="content-partner-bloc">
    <div class="container flex between">
        <div class="content-maillot">
        <img src="{{ asset('/front-end/assets/img/maillot.png')}}" alt="">
        </div>
        <div class="content-logo-button ">
        <div class="logo-clermont">
            <img src="{{ asset('/front-end/assets/img/clermont-foot.png')}}" alt="">
        </div>
        <p>​PARTENAIRE OFFICIEL DU CLERMONT FOOT 63</p>
        <div class="content-btn-action-">
            @if ($infos)
            <a href="{{($infos)? $infos->savoir : ''}}" target="_blank"><span>En savoir +</span></a>
                
            @else
                
            <a href="#!" target="_blank"><span>En savoir +</span></a>
            @endif
        </div>
        </div>
    </div>
    </section>



    <br>
    <br>
    <br>

    @if ($infos)
    <div class="header-title">
        <h3 class="green"> {{$infos->titreE}}</h3>
        <h4>{{$infos->descriptionE}}</h4>
    </div>
    <br>
    <br>
    <br>
    <section class="work-method">
        <div class="container">
    @if ($infos->imageE)
          <img src="{{asset('/app/accueil/'.$infos->imageE)}}" alt="" >
        @else
                <img src="{{asset('front-end/assets/img/equipe.png')}}" alt="">

        @endif
        
    @else
    <div class="header-title">
        <h3 class="green">  NOTRE FORCE</h3>
        <h4>UNE ENTREPRISE À TAILLE HUMAINE</h4>
    </div>
    <br>
    <br>
    <br>
    <section class="work-method">
        <div class="container">
          <img src="{{asset('front-end/assets/img/equipe.png')}}" alt="">
        
    @endif

    

          <input type="hidden" name="" data-toggle="modal" data-target="#exampleModalCenter" id='s'>
  
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content rounded-0">
            <div class="modal-body py-0">
  
              
              <div class="d-flex main-content">
                <div class="bg-image promo-img mr-3" style="background-image: url({{asset('app/accueil/DIrmfSRaeVLKxRlp1636971327.jpg')}});">
                  <span class="price">$2000</span>
                </div>
                <div class="content-text p-4 px-5 align-item-stretch">
                  <div class="text-center">
                      <a href="#" class="share"><span class="icon-share"></span></a>
                      <h3 class="mb-3 line">Grand Prix 4000</h3>
                      <p class="mb-5">All their equipment and instruments are alive. The sky was this is cloudless and of a deep dark blue. A shining crescent far beneath the flying vessel.</p>
  
                  </div>
                </div>
              </div>
  
            </div>
          </div>
        </div>
      </div>
  
    

@endsection


@section('script')
    

  
<script src='https://unpkg.com/shufflejs@5'></script>
<script  src="{{ asset('/front-end/assets/js/script.js') }}"></script>
<script type="text/javascript">
   var slider = new MasterSlider();
   slider.setup('masterslider' , {
        width:800,    // slider standard width
        height:650,   // slider standard height
        space:5,
         fullwidth:true,
         autoplay: true,start           : 1,
       layout          : "boxed",
       loop            : true,
       shuffle         : false,
       smoothHeight    : true,
        // more slider options goes here...
        // check slider options section in documentation for more options.
   });

   // adds Arrows navigation control to the slider.
    slider.control('thumblist' , {autohide:false  , dir:"h",align:'bottom',type:'thumbs'});
    slider.control('timebar'    ,{ autohide:false, overVideo:false, align:'bottom', color:'#51bbb1' , hideUnder:3 , width:5 });

   
</script>


<script src="{{asset('/modal/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/modal/js/popper.min.js')}}"></script>
    <script src="{{asset('/modal/js/bootstrap.min.js')}}"></script>

    <script>
        /*$( document ).ready(function() {
            $('#s').click();
        });*/
    </script>
@endsection