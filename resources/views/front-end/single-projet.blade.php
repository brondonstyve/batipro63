@extends('front-end/defaut/base', ['title' => 'Projets | ', 'body_class' => 'projet-realisation'] )
{{--  @extends('front-end/partials/base', ['title' => 'Batipro63 – Notre métier, la construction sur mesure ', 'body_class' => 'detail-service corporate home2-corporate'] )  --}}

@section('css_js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
@endsection

@section('content')
   <body class="about-us-page single-projet ">
      <div class="container-main-bloc">
        <div class="container flex">
            
           <div class="container-main">
              <section class="container-banner" style="background-image:url({{ asset('/app/projet/'.$projet->img_principale)}}); width: 1422px;height: 500px;background-repeat: no-repeat">
                <div class="container">
                  <div class="inner-container">
                      <div class="content-title-banner">

                      </div>
                  </div>
                </div>
              </section>
              <section class="container-description">
                 <div class="container flex ">
                    <div class="left-bloc-text">
                       <div class="header-title">
                          <h4>{{$projet->libelle}}</h4>
                          <br>
                          <h3 class="jost-style jost-style-100">{{$projet->libelles }}. </h3>
                        </div>
                       <div class="content-bloc-description add-square">
                          <p class="jost-style jost-style-100">{!!$projet->description!!}. </p>
                       </div>
                    </div>
                    <div class="content-info-cta ">
                      <div class="logo-">
                        <img src="{{ asset('/front-end/assets/img/logo-simple.png')}}" alt="">
                      </div>
                      <div class="content-info ">
                        <div class="line-info- flex">
                          <span class="green">Année :</span>
                          <span > {{$projet->annee}}</span>
                        </div>
                        <div class="line-info- flex">
                          <span class="green">Entreprise / Particulié:</span>
                          <span > {{$projet->entreprise}}</span>
                        </div>
                        <div class="line-info- flex">
                          <span class="green">Lieu :</span>
                          <span > {{$projet->lieu}}</span>
                        </div>
                        <div class="line-info- flex">
                          <span class="green">Durée du projet :</span>
                          <span > {{$projet->duree}} semaines</span>
                        </div>
                      </div>
                    </div>
                 </div>
              </section>
              
              <section class="container-realisation-projets">
                <div class="container ">

                    
                  <div class="content-list-real-projet flex">

                    
                    
                    @foreach ($projets as $item)
                    <a href="{{route('detailProjet',encrypt($item->id))}}">
                      <div class="item-projet-wrapper">
                        <div class="content-img-projet" >
                          <img src="{{ asset('/app/projet/'.$item->img_principale)}}" style="width: 362px;height: 255px;">
                        </div>
                        <div class="content-text-projets">
                          <h4> {{$item->libelle}} </h4>
                        </div>
                      </div>
                    </a>

                        
                    @endforeach
                    

                  </div>
                  
                </div>
              </section>
              
           </div>
        </div>
      </div>
   </body>
</html>