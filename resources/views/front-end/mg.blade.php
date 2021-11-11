@extends('front-end/defaut/base', ['title' => 'Projets | ', 'body_class' => 'projet-realisation'] )
{{--  @extends('front-end/partials/base', ['title' => 'Batipro63 – Notre métier, la construction sur mesure ', 'body_class' => 'detail-service corporate home2-corporate'] )  --}}

@section('css_js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
@endsection

@section('content')
   <body class="service-page-detail ">
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
                        <h1>Maçonnerie Générale</h1>
                        <div class="content-subtitle">
                          <a class="active-sub" href="{{route('aboutus')}} ">Présentation</a>
                          <a href=" {{route('projet-front')}} ">Maisons</a>
                          <a href="{{route('terrain-front')}} ">Terrains</a>
                          <a href="{{route('service-front')}} ">Nos conseils</a>
                        </div>
                      </div>
                  </div>
                </div>
              </section>



              {{-- <section class="container-maison-terrain" id="container-maison-terrain">
                <div class="container ">
                  <div class="left-bloc-text">
                    <div class="content-text-up">
                      <div class="header-title">
                        <h3 class="green">Maisons & terrains</h3>
                        <h4>Notre branche de promotion immobilière pour vous accompagner de A à Z</h4>
                      </div>
                    </div>
                    
                  </div>
                </div> --}}
              {{-- </section>
              <section class="container-vente-maisons">
                <div class="container flex between">
                  <div class="left-bloc-text">
                    <div class="content-text-up">
                      <div class="header-title">
                        <h3 class="green">Vente de maisons</h3>
                        <h4>Efficacité et transparence au service des familles </h4>
                      </div>
                      <div class="content-bloc-description add-square">
                        <p class="jost-style jost-style-100">Pourquoi peu de souplesse et de transparence, quand la technologie permet de simplifier l'expérience ? Prenez rendez-vous en ligne, suivez les prcédure de visites et d'acquisition de la maison choisie.</p>
                      </div>
                    </div>
                  </div>
                  <div class="content-right-bloc ">
                    <div class="inner-right- flex">
                      <div class="item-wrapper flex">
                        <div class="icone-"><img src="{{asset('/front-end/assets/img/vip-card.png')}}" alt=""></div>
                        <div class="icone-text">Annonces exclusives sur <a href="https://batipro63.com">batipro63</a></div>
                      </div>
                      <div class="item-wrapper flex">
                        <div class="icone-"><img src="{{asset('/front-end/assets/img/phone.png')}}" alt=""></div>
                        <div class="icone-text">Prise de contact avec le service client</div>
                      </div>
                      <div class="item-wrapper flex">
                        <div class="icone-"><img src="{{asset('/front-end/assets/img/3d.png')}}" alt=""></div>
                        <div class="icone-text">Photographies professionnelles & visite 3D</div>
                      </div>
                      <div class="item-wrapper flex">
                        <div class="icone-"><img src="{{asset('/front-end/assets/img/chat.png')}}" alt=""></div>
                        <div class="icone-text">Négociation avec les acheteurs</div>
                      </div>
                      <div class="item-wrapper flex">
                        <div class="icone-"><img src="{{asset('/front-end/assets/img/tour-guide.png')}}" alt=""></div>
                        <div class="icone-text">Organisation des visites et procédures</div>
                      </div>
                      <div class="item-wrapper flex">
                        <div class="icone-"><img src="{{asset('/front-end/assets/img/keys.png')}}" alt=""></div>
                        <div class="icone-text">Accord et signature de l'acte de vente</div>
                      </div>
                    </div>
                  </div>
                </div>
              </section> --}}
            @livewire('projet-mg')
              {{-- <section id="container-vente-terrains">
                <div class="container ">

                  <div class="left-bloc-text">
                    <div class="content-text-up">
                      <div class="header-title">
                        <h3 class="green">Vente de terrains</h3>
                        <h4>Vous cherchez un terrain ou vous avez un terrain à vendre ? Nous commercialisons gratuitement votre terrain</h4>
                        <p>Découvrir les avantages à vendre mon terrain via BATIPRO63</p>
                      </div>
                      <div class="content-discover">
                        <div class="content-btn btn-black"><a href=" {{route('terrain-front')}} " class="">Voir tous les terrains</a></div>
                        <div class="image-immobilier">
                          <img src="{{asset('/front-end/assets/img/img-immob.jpg')}}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section> --}}



           </div>
        </div>
      </div>
   </body>
</html>
