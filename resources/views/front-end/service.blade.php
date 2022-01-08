@extends('front-end/defaut/base', ['title' => 'Servce | '] )
{{--  @extends('front-end/partials/base', ['title' => 'Batipro63 – Notre métier, la construction sur mesure ', 'body_class' => 'detail-service corporate home2-corporate'] )  --}}


@section('content')

@if ($infos)
@if ($infos->imageEnt)

<section class="container-banner" style="background-image:url({{asset('/app/service/'.$infos->imageEnt)}})">
  @else
<section class="container-banner" style="background-image:url({{asset('/front-end/assets/img/pano1.jpg')}})">
    
@endif
  <div class="container">
    <div class="inner-container">
        <div class="content-title-banner">
          <h1>Services</h1>
          <p>{{$infos->descriptionEnt}}</p>
        </div>
    </div>
  </div>
</section>
@else
<section class="container-banner" style="background-image:url({{asset('/front-end/assets/img/pano1.jpg')}})">
  <div class="container">
    <div class="inner-container">
        <div class="content-title-banner">
          <h1>Services</h1>
          <p>Batipro63 c'est une entreprise à taille humaine qui répond à l'ensemble de vos besoins.   De la conception à la réalisation, nous serons présent à toutes les étapes de votre projet.</p>
        </div>
    </div>
  </div>
</section>
@endif



<section class="container-service">
  <div class="container flex between">
    <div class="left-bloc-text">
      <div class="content-text-up">
        <div class="header-title">
          <div class="add-square "><img src="{{ asset('/front-end/assets/img/square.png') }}" alt=""></div>
          <h3 class="green">Savoir-faire</h3>
          @if ($infos)
              <h4>{{$infos->description}}</h4>
          @else
          <h4>Aujourd'hui, l'Entreprise se divise en plusieurs rôles d'activité sous l'enseigne Groupe BATIPRO</h4>
              
          @endif
        </div>
      </div>
    </div>
    <div class="content-liste-service flex">
      <div class="content-bloc-intro-service ">
        <small>Le Groupe</small>
        <h2>Notre métier, la <span>construction</span></h2>
      </div>

      <div class="content-liste-services flex">

        @if (sizeOf($services)==0)
        <div class="service-wrapper">
          <div class="inner-service ">
            <div class="head-service flex between">
              <div class="logo-service ">
                <img src="{{ asset('/front-end/assets/img/entreprise-generale-batipro.jpg')}}" alt="">
              </div>
              <div class="icone-square ">
                <img src="{{ asset('/front-end/assets/img/small-square.jpg')}}" alt="">
              </div>
            </div>
            <div class="content-tex-service ">
              <h2>Aucun service enregistré pour le moment.</h2>
              <p> Consultez notre page facebook ici pour en savoir plus : <a href="http://www.facebook.com/Batipro63/" >Batipro Facebook</a>.</p>
            </div>
          </div>
        </div>
        @else
        @foreach ($services as $service)
        <div class="service-wrapper">
          <div class="inner-service ">
            <a href="@if($service->lien==null)#!@else{{$service->lien}}@endif">
              <div class="head-service flex between">
                <div class="logo-service ">
                 @if ($service->diminutif)
                 <img src="{{ asset('/app/service/'.$service->diminutif)}}" alt="">
                     
                 @else
                 <img src="{{ asset('/front-end/assets/img/entreprise-generale-batipro.jpg')}}" alt="">
                 @endif
                </div>
                <div class="icone-square ">
                  <img src="{{ asset('/front-end/assets/img/small-square.jpg')}}" alt="">
                </div>
              </div>
            
            <div class="content-tex-service ">
              <h2> {{$service->libelle}} </h2>
              <p class="text-justify">{{$service->description}} </p>
            </div>
          </a>
          </div>
        </div>
        @endforeach
        @endif
        
      </div>

    </div>
  </div>
</section>
<section class="container-key-figures">
    <div class="container flex space-around ">
      <div class="key-figure-wrapper">
          <span class="number-key">
            @if ($infos)
            {{$infos->projetnb}}
            @else
                10
            @endif  
          </span>
          <p>Projets <br>réalisés</p>
      </div>
      <div class="key-figure-wrapper">
          <span class="number-key">
            @if ($infos)
                {{$infos->surface}}
            @else
                0
            @endif
          </span>
          <p>M<sup>2</sup> de surfaces <br>crées</p>
      </div>
      <div class="key-figure-wrapper">
        @if ($about)
        <span class="number-key">{{date('Y')-$about->anneeCreat}}</span>
      @else
        <span class="number-key">{{date('Y')-2008}} </span>
          
      @endif
        
          <p>années de <br>savoir-faire</p> 
      </div>
    </div>
</section>
{{-- <section class="container-facebook-testimonials">
  <div class="container flex between">
    <div class="content-text-up">
      <div class="header-title">
        <h3 class="green">ils parlent sur facebook</h3>
        <h4>99% de nos clients sont satisfaits</h4>
        <div class="add-square"><img src="{{ asset('/front-end/assets/img/square2.png') }}" alt=""></div>
      </div>
    </div>
    <div class="content-textimonials">
      <div class="content-inner-text-testimonials">
        <p>Nous collaborons avec Batipro depuis quelques semaines depuis l'élaboration de notre projet de construction et ils ont su s'adapter et être très réactifs à nos différentes demandes, partager leurs idées et répondres à nos questions.</p>
      </div>
      <div class="content-user flex between align-center">
        <div class="content-inner-user flex align-center">
          <div class="icone-profile"><img src="{{ asset('/front-end/assets/img/sofia.png') }}" alt=""></div>
          <p>Sofia</p>
        </div>
        <div class="content-btn-action ">
          <a href=" https://www.facebook.com/Batipro63/reviews/?ref=page_internal" target="_blank">Plus de 100 avis</a>
        </div>
      </div>
    </div>
    <div class="content-icone-facebook"><img src="{{ asset('/front-end/assets/img/facebook.png') }}" alt=""></div>
  </div>
</section> --}}
@if ($infos)
    @if ($infos->imagebas)
<section class="container-cta container-facebook-testimonials" style="background-image:url({{asset('app/service/'.$infos->imagebas)}})">
        
    @else
<section class="container-cta container-facebook-testimonials" style="background-image:url(/front-end/assets/img/bg-cta.jpg)">
        
    @endif
@else
<section class="container-cta container-facebook-testimonials" style="background-image:url(/front-end/assets/img/bg-cta.jpg)">
    
@endif
  <div class="container ">
      <div class="content-text-up">
        <div class="header-title">
          <h4>Prenez contact avec notre service client</h4>
          <div class="add-square"><img src="{{ asset('/front-end/assets/img/square2.png') }}" alt=""></div>
        </div>
      </div>
      <div class="content-btn-action ">
        <a href="{{route('contact')}}">Cliquez ici!</a>
      </div>
  </div>
</section>
@endsection


@section('script')
    
<script src="{{ asset('front-end/assets/js/jquery.countup.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.number-key').countUp({
            'time': 2000,
            'delay': 10
          });
      });
</script>
@endsection