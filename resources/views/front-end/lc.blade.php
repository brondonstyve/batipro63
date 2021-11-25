@extends('front-end/defaut/base', ['title' => 'Projets | ', 'body_class' => 'projet-realisation'] )
{{--  @extends('front-end/partials/base', ['title' => 'Batipro63 – Notre métier, la construction sur mesure ', 'body_class' => 'detail-service corporate home2-corporate'] )  --}}

@section('css_js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
@endsection

@section('content')
   <body class="service-page-detail service-page">
      <div class="container-main-bloc">
        <div class="container flex">
           <div class="container-main">
             @if ($infos)
                 @if ($infos->imageEnt)
              <section class="container-banner" style="background-image:url({{ asset('/app/maison/'.$infos->imageEnt)}})">
                     
                 @else
              <section class="container-banner" style="background-image:url({{ asset('/front-end/assets/img/logement-collectif.jpg')}})">
                     
                 @endif
             @else
              <section class="container-banner" style="background-image:url({{ asset('/front-end/assets/img/logement-collectif.jpg')}})">
                 
             @endif
                <div class="container">
                  <div class="inner-container">
                      <div class="content-title-banner">
                        <h1>Logement collectif</h1>
                        <div class="content-subtitle">
                          <a class="active-sub" href="#">Présentation</a>
                        </div>
                      </div>
                  </div>
                </div>
              </section>
              <section class="container-maison-terrain" id="container-maison-terrain">
                <div class="container ">
                  <div class="left-bloc-text">
                    <div class="content-text-up">
                      <div class="header-title">
                        @if ($infos)
                        <h3 class="green"> {{$infos->titre}} </h3>

                        @else
                        <h3 class="green">Bâtiment d'habitation</h3>
                            
                        @endif

                        @if ($infos)
                        <h4> {{$infos->description}} </h4>
                        <p>{{$infos->resume}}</p>
                        @else
                        <h4>Batipro63, spécialiste des Maison contemporaines, vous propose des solutions personnaisées et adaptées </h4>
                        <p>Pourquoi construire votre maison avec Batipro63 ?</p>
                        @endif
                       
                      </div> 
                    </div>
                    <div class="content-bloc-image">
                      @if ($infos)
                          @if ($infos->imageDesc)
                      <img src="{{ asset('/app/maison/'.$infos->imageDesc)}}" alt="">
                              
                          @else
                      <img src="{{ asset('/front-end/assets/img/log-coll.jpg')}}" alt="">
                              
                          @endif
                      @else
                      <img src="{{ asset('/front-end/assets/img/log-coll.jpg')}}" alt="">
                          
                      @endif
                    </div>
                  </div>
                </div>
              </section>
              <section class="container-liste-lc">
                <div class="container ">
                  <div class="container ">
                    @if (sizeOf($blog)==0)
                    <div class="content-texte-- ">
                      <div class="left-bloc-text">
                        <div class="content-text-up">
                          <div class="header-title">
                            <h4>Aucun élément concernant les logements collectifs enregistré pour le moment. </h4>
                          </div>
                        </div> 
                      </div>
  
                    </div>
                    @else
                    @foreach ($blog as $item)
                    <div class="lc-item-content flex between">
                      <div class="img-item-">
                        <img src="{{asset('/app/actualite/'.$item->image)}}" alt="">
                      </div>
                      <div class="content-texte-- ">
                        <div class="left-bloc-text">
                          <div class="content-text-up">
                            <div class="header-title">
                              <h4> {{$item->titre}} </h4>
                            </div>
                            <div class="content-bloc-description add-square">
                              <p class="jost-style jost-style-100">{!!substr($item->article1,0,255) .'[...]'!!}</p>
                              <div class="content-link ">
                                @if ($item->desc_auteur==null)
                              <a href="#!">
                                  
                              @else
                              <a href="{{$item->desc_auteur}}">
                              @endif
                                <span>{{$item->auteur}}</span>
                                  <img src="{{asset('/front-end/assets/img/right-arrow.png')}}" alt="">
                                </a>
                              </div>
                            </div>
                          </div> 
                        </div>
  
                      </div>
                    </div>
                    @endforeach
                    @endif
                </div>
              </section>
              @livewire('projet3')
           </div>
        </div>
      </div>
   </body>
</html>
