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
              <section class="container-banner" style="background-image:url({{asset('/app/maison/'.$maison->img_principale)}}); width: 1422px;height: 500px;background-repeat: no-repeat">
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
                          <h4>{{$maison->libelle}}</h4>
                        </div>
                       <div class="content-bloc-description add-square">
                          <p class="jost-style jost-style-100">{!!$maison->description!!}. </p>
                       </div>
                    </div>
                    <div class="content-info-cta ">
                      <div class="logo-">
                        <img src="{{asset('/front-end/assets/img/logo-simple.png')}}" alt="">
                      </div>
                      <div class="content-info ">
                        <div class="line-info- flex">
                          <span class="green">Durée de vie:</span>
                          <span > {{$maison->annee}}</span>
                        </div>
                        <div class="line-info- flex">
                            <span class="green">Durée de réalisation:</span>
                            <span > {{$maison->duree}}</span>
                          </div>
                        <div class="line-info- flex">
                          <span class="green">Exemple de lieu :</span>
                          <span > {{$maison->lieu}}</span>
                        </div>
                      </div>
                    </div>
                 </div>
              </section>
              @php
                        $image=explode('->',$maison->image);
                    @endphp
              <section class="container-realisation-projets">
                <div class="container ">

                    
                  <div class="content-list-real-projet flex">

                    
                    
                    @foreach ($image as $item)
                        @if ($item!='')
                        <div class="item-projet-wrapper">
                            <div class="content-img-projet" >
                              <img src="{{asset('/app/maison/'.$item)}}" style="width: 362px;height: 255px;">
                            </div>
                            <div class="content-text-projets">
                              <h4> {{$maison->libelle}} </h4>
                              <a href="#">Voir en images</a>
                            </div>
                          </div>
                        @endif
                    @endforeach
                    

                  </div>
                </div>
              </section>
              
           </div>
        </div>
      </div>
   </body>
</html>