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
                      
                  @endif                <div class="container">
                  <div class="inner-container">
                      <div class="content-title-banner">
                        <h1>Maisons Contemporaines</h1>
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

                        @else
                        <h4>Batipro63, spécialiste des Maison contemporaines, vous propose des solutions personnaisées et adaptées </h4>
                        
                        @endif
                        <p>Pourquoi construire votre maison avec Batipro63 ?</p>
                      </div>
                    </div>
                    <div class="content-bloc-image">
                      <img src="{{asset('/front-end/assets/img/mc.jpg')}}" alt="">
                    </div>
                  </div>
                </div>
              </section>
              <section class="container-liste-lc">
                <div class="container ">
                  @if (sizeOf($blog)==0)
                  <div class="content-texte-- ">
                    <div class="left-bloc-text">
                      <div class="content-text-up">
                        <div class="header-title">
                          <h4>Aucun élément concernant les maisons contemporaines enregistré pour le moment. </h4>
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

              @if ($infos)
              @if ($infos->image)
              <section class="container-cta container-facebook-testimonials" style="background-image:url({{asset('/app/maison/'.$infos->image)}})">

              @else
              <section class="container-cta container-facebook-testimonials" style="background-image:url({{asset('/front-end/assets/img/bg-cta.jpg')}})">

              @endif
                  
              @else
              <section class="container-cta container-facebook-testimonials" style="background-image:url({{asset('/front-end/assets/img/bg-cta.jpg')}})">

                  
              @endif

              

                <div class="container ">
                    <div class="content-text-up">
                      <div class="header-title">
                        <h4>Démarrons ensemble votre maison individuelle</h4>
                        <div class="add-square"><img src="{{asset('/front-end/assets/img/square2.png')}}" alt=""></div>
                      </div>
                    </div>
                    <div class="content-btn-action ">
                      <a href=" {{route('contact')}} ">Commencez ici!</a>
                    </div>
                </div>
              </section>


              


           </div>
        </div>
      </div>
   </body>
</html>
