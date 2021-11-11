@extends('front-end/defaut/base', ['title' => 'A propors de Batipro ','body_class' => 'about-us-page'] )
{{--  @extends('front-end/partials/base', ['title' => 'Batipro63 – Notre métier, la construction sur mesure ', ] )  --}}

@section('css_js')
    <link rel="stylesheet" href="{{ asset('/front-end/assets/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/front-end/assets/slick/slick.css') }}">
        
@endsection
@section('content')
@if ($about)
@if ($about->imageEnt)
<section class="container-banner" style="background-image:url({{ asset('/app/apropos/'.$about->imageEnt)}})">
    
@else
<section class="container-banner" style="background-image:url({{ asset('front-end/assets/img/pano1.jpg')}})">
    
@endif
<div class="container">
    <div class="inner-container">
        <div class="content-title-banner ">
          <h1>A propos</h1>
          <p > {!!$about->descriptionEnt!!} </p>
        </div>
    </div>
  </div>
</section>
@else
<section class="container-banner" style="background-image:url({{ asset('front-end/assets/img/pano1.jpg')}})">
  <div class="container">
    <div class="inner-container">
        <div class="content-title-banner">
          <h1>A propos</h1>
          <p class="text-justify">A l’origine PME familiale, le Groupe Batipro est aujourd’hui un groupe majeur de la conception et construction de maison sur-mesure dans la région Rhône Alpes Auvergne.</p>
        </div>
    </div>
  </div>
</section>
@endif


<section class="container-about-us">
  

  @if ($about)
  <div class="container flex between">
    <div class="left-bloc-text">
      <div class="content-text-up">
        <div class="header-title">
          <h3 class="green">{{$about->titre}}</h3>
          <h4>{!!$about->resume!!}</h4>
        </div>
        <div class="content-bloc-description add-square">
          <p class="jost-style jost-style-100 text-justify">
            {!! $about->description !!}
          <div class="content-number-about-us green">{{$about->anneeCreat}}</div>
          
        </div>
      </div>
    </div>
    <div class="content-img-about-us">
      <div class="inner-img-wrapper">
        <div id="content-innner-slider">
          <img src="{!!asset('/app/apropos/'.$about->imageB1)!!}" alt="">
          <img src="{!!asset('/app/apropos/'.$about->imageB2)!!}" alt="">
        </div>
        <div class="content-btn-navigation">
          <div class="prev ">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 34.075 34.075" style="enable-background:new 0 0 34.075 34.075;" xml:space="preserve">
                    <path style="fill:#010002;" d="M24.57,34.075c-0.505,0-1.011-0.191-1.396-0.577L8.11,18.432c-0.771-0.771-0.771-2.019,0-2.79
                        L23.174,0.578c0.771-0.771,2.02-0.771,2.791,0s0.771,2.02,0,2.79l-13.67,13.669l13.67,13.669c0.771,0.771,0.771,2.021,0,2.792
                        C25.58,33.883,25.075,34.075,24.57,34.075z"/>
            </svg>
          </div>
          <div class="next ">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 34.1 34.1" style="enable-background:new 0 0 34.1 34.1;" xml:space="preserve">

                      <path class="st0" d="M9.1,0.2c0.5,0,1,0.2,1.4,0.5l15.4,14.7c0.8,0.8,0.8,2,0.1,2.8L11.3,33.6c-0.8,0.8-2,0.8-2.8,0.1
                        s-0.8-2-0.1-2.8l13.4-14L7.8,3.6C7,2.8,7,1.6,7.7,0.8C8.1,0.4,8.6,0.2,9.1,0.2z"/>

            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
  @else
  <div class="container flex between">
    <div class="left-bloc-text">
      <div class="content-text-up">
        <div class="header-title">
          <h3 class="green">historique</h3>
          <h4>C'est l'histoire d'une petite entreprise que devient grande</h4>
        </div>
        <div class="content-bloc-description add-square">
          <p class="jost-style jost-style-100">
            @if ($about)
            {!!substr($about->description,0,250).'.' !!}
          <div class="content-number-about-us green">{{$aboute->anneeCreat}}</div>
          @else
            Création de la société Batipro63 Entreprise Générale du Bâtiment par Ahmet Saril et son fils Hakan Saril dans la commune des Matres de Veyre (63). Ils réalisent les travaux d'amélioration de l'habitat et de maçonnerie sur la commune et celle avoisinante.</p>
          <div class="content-number-about-us green">2008</div>
            
            @endif
        </div>
      </div>
    </div>
    <div class="content-img-about-us">
      <div class="inner-img-wrapper">
        <div id="content-innner-slider">
          <img src="{{ asset('/front-end/assets/img/about-us.jpg') }}" alt="">
          <img src="{{ asset('/front-end/assets/img/about-us.jpg') }}" alt="">
        </div>
        <div class="content-btn-navigation">
          <div class="prev ">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 34.075 34.075" style="enable-background:new 0 0 34.075 34.075;" xml:space="preserve">
                    <path style="fill:#010002;" d="M24.57,34.075c-0.505,0-1.011-0.191-1.396-0.577L8.11,18.432c-0.771-0.771-0.771-2.019,0-2.79
                        L23.174,0.578c0.771-0.771,2.02-0.771,2.791,0s0.771,2.02,0,2.79l-13.67,13.669l13.67,13.669c0.771,0.771,0.771,2.021,0,2.792
                        C25.58,33.883,25.075,34.075,24.57,34.075z"/>
            </svg>
          </div>
          <div class="next ">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 34.1 34.1" style="enable-background:new 0 0 34.1 34.1;" xml:space="preserve">

                      <path class="st0" d="M9.1,0.2c0.5,0,1,0.2,1.4,0.5l15.4,14.7c0.8,0.8,0.8,2,0.1,2.8L11.3,33.6c-0.8,0.8-2,0.8-2.8,0.1
                        s-0.8-2-0.1-2.8l13.4-14L7.8,3.6C7,2.8,7,1.6,7.7,0.8C8.1,0.4,8.6,0.2,9.1,0.2z"/>

            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif
</section>


@if ($about)
<section class="container-experience">
  <div class="container flex">
    <div class="content-left-img ">
      @if ($about->imageC1)
      <img src="{{ asset('/app/apropos/'.$about->imageC1) }}" alt="">
          
      @else
      <img src="{{ asset('/front-end/assets/img/pano-1.jpg') }}" alt="">
          
      @endif
    </div>
      <div class="content-text-up">
        <div class="header-title">
          <h3 class="green">{{$about->titre2 }}</h3>
           
          <h4 class="text-justify">Après {!!$about->annee_experience !!} ans d'expérience, quelques chiffres clés</h4>
         
        </div>
        <div class="content-bloc-description add-square">
          <p class="jost-style jost-style-100 text-justify">{!!$about->description2 !!}</p>
        </div>
      </div>
      <div class="content-key-figures flex">


        <div class="content-key-figure-wrapper flex">
          <div class="content-number number-key">+<span class="spin">{{$about->nombre3 }}</span></div>
          <div class="content-text-key-figure ">
            <h3>{{$about->titre3 }}</h3>
            <p class="text-justify">{!!$about->description3 !!}</p>
          </div>
        </div>

        <div class="content-key-figure-wrapper flex">
          <div class="content-number number-key">+<span class="spin">{{$about->nombre4 }}</span></div>
          <div class="content-text-key-figure ">
            <h3>{{$about->titre4 }}</h3>
            <p class="text-justify">{!!$about->description4 !!}</p>
          </div>
        </div>

        

      </div>
  </div>

</section>




@else
<section class="container-experience">
  <div class="container flex">
    <div class="content-left-img ">
      <img src="{{ asset('/front-end/assets/img/pano-1.jpg') }}" alt="">
    </div>
      <div class="content-text-up">
        <div class="header-title">
          <h3 class="green">Bilan</h3>
            @if ($about)
          <h4>Après {{$about->annee_experience }} ans d'expérience, quelques chiffres clés</h4>
          @else
          <h4>Après 11 ans d'expérience, quelques chiffres clés</h4>
          @endif
        </div>
        <div class="content-bloc-description add-square">
          <p class="jost-style jost-style-100">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna .</p>
        </div>
      </div>
      <div class="content-key-figures flex">
        <div class="content-key-figure-wrapper flex">
          <div class="content-number"><span class="spin">
            @if ($about)
          <h4>{{$about->nb_salarie }}</h4>
          @else
          60
          @endif  
          </span></div>
          <div class="content-text-key-figure ">
            <h3>Salariés & collaborateurs</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
          </div>
        </div>
        <div class="content-key-figure-wrapper flex">
          <div class="content-number">+<span class="spin">6</span></div>
          <div class="content-text-key-figure ">
            <h3>Salariés & collaborateurs</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
          </div>
        </div>
      </div>
  </div>
</section>
@endif





<section id="mot-directeur">
  <div class="container ">
    <div class="content-text-dorecteur">
        <div class="content-quote flex">
          <img src="{{ asset('/front-end/assets/img/quote.png') }}" alt="">
          <img src="{{ asset('/front-end/assets/img/quote.png') }}" alt="">
        </div>

        @if ($about)
            <p class="text-justify">
              {{$about->description5}}
            </p>
        @else
      <p>Depuis 2008, notre métier c'est contruction de maison individuelle, mais aussi l'extension et la rénovation de maison complète. Un savoir faire familial et une passion transmise de père en fils.</p>
            
        @endif

        <div class="content-dir flex align-center">
        <div class="content-img-dir " >
        @if($about)
          @if ($about->image)
          <img src="{{ asset('app/membre/'.$about->image) }}" alt="" style="border-radius: 100%"> 
              
          @else
          <img src="{{ asset('front-end/assets/img/hakan-saril.png') }}" alt="">
              
          @endif
        @else
          <img src="{{ asset('front-end/assets/img/hakan-saril.png') }}" alt="">

        @endif
        
          
        </div>
        <div class="content-text">
        @if($about)
          @if ($about->dg)
          <h3 class="green">{{$about->dg}}</h3>
              
          @else
          <h3 class="green">Hakan Saril</h3>
              
          @endif
        @else
          <h3 class="green">Hakan Saril</h3>

        @endif
          <p>Directeur Général</p>
        </div>
      </div>
    </div>
  </div>
</section>



<section id="qualite">
  <div class="container">
    <div class="inner-wrapper flex">
      <div class="item-quality">
        <div class="img-quality">
          <img src="{{ asset('/front-end/assets/img/innovation.jpg') }}" alt="">
        </div>
        <div class="content-text-quality">
          <h3>Innovations</h3>
          <p>Proposer plus de solutions, plus de produits, plus de technologies</p>
        </div>
      </div>
      <div class="item-quality">
        <div class="img-quality">
          <img src="{{ asset('/front-end/assets/img/solution-verte.jpg') }}" alt="">
        </div>
        <div class="content-text-quality">
          <h3>Solution verte</h3>
          <p>Ne plus gaspiller, proposer un chantier propre, revaloriser les déchets de chantier</p>
        </div>
      </div>
      <div class="item-quality">
        <div class="img-quality">
          <img src="{{ asset('/front-end/assets/img/retour-client.jpg') }}" alt="">
        </div>
        <div class="content-text-quality">
          <h3>Retour client</h3>
          <p>99% de nos clients nous recommandent</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="container-team">
  <div class="container ">
    @if ($about)
    <div class="inner-sideleft">
      <div class="content-text-up">
        <div class="header-title">
          <h3 class="green">{{$about->titre6}}</h3>
          <h4> {{$about->resume6}} </h4>
        </div>
        <div class="content-bloc-description add-square">
          <p class="jost-style jost-style-100 text-justify">{{$about->description6}}</p>
        </div>
      </div>
    </div>
    @else
    <div class="inner-sideleft">
      <div class="content-text-up">
        <div class="header-title">
          <h3 class="green">Bilan</h3>
          <h4>Une équipe d'experts, jeunes et dynamiques</h4>
        </div>
        <div class="content-bloc-description add-square">
          <p class="jost-style jost-style-100">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna .</p>
        </div>
      </div>
    </div>
    @endif
    

    @if (sizeOf($membres)==0)
        <div class="inner-sideleft">
          <h4>Aucun membre enregistré pour le moment.</h4>
        </div>
        @endif

    <div class="content-wrap-team">
      <div id="inner-team">

        @if (sizeOf($membres)==0)
        
        <div class="single-team-wrapper">
          <div class="inner-single-team">
            <div class="img-team">
             <span></span>
             <span></span>
             <span></span>
             <span></span>
            </div>
              
          </div>
        </div>
        <div class="single-team-wrapper">
          <div class="inner-single-team">
            <div class="img-team">
             <span></span>
             <span></span>
             <span></span>
             <span></span>
            </div>
              
          </div>
        </div>
        <div class="single-team-wrapper">
          <div class="inner-single-team">
            <div class="img-team">
             <span></span>
             <span></span>
             <span></span>
             <span></span>
            </div>
              
          </div>
        </div>
        <div class="single-team-wrapper">
          <div class="inner-single-team">
            <div class="img-team">
             <span></span>
             <span></span>
             <span></span>
             <span></span>
            </div> 
              
          </div>
        </div>
        <div class="single-team-wrapper">
          <div class="inner-single-team">
            <div class="img-team">
             <span></span>
             <span></span>
             <span></span>
             <span></span>
            </div>
              
          </div>
        </div>
        <div class="single-team-wrapper">
          <div class="inner-single-team">
            <div class="img-team">
             <span></span>
             <span></span>
             <span></span>
             <span></span>
            </div>
              
          </div>
        </div>
        <div class="single-team-wrapper">
          <div class="inner-single-team">
            <div class="img-team">
             <span></span>
             <span></span>
             <span></span>
             <span></span>
            </div>
              
          </div>
        </div>
        @else
        @foreach ($membres as $membre)
        <div class="single-team-wrapper">
          <div class="inner-single-team" style="background: url({{ asset('/app/membre/'.$membre->image)}})">
            <div class="img-team"  style="background: url({{ asset('/app/membre/'.$membre->image)}})">
             <span></span>
             <span></span>
             <span></span>
             <span></span>
            </div>
              <div class="content">
                <h2> {{$membre->nom.' '.$membre->prenom}}</h2>
                <h2>{{$membre->description}}</h2>
    
              </div>
          </div>
        </div>
        @endforeach
        @endif
          
      </div>
      <div class="content-navigation">
          <div class="prev"><img src="{{ asset('/front-end/assets/img/arrow.png') }}" alt=""></div>
          <div class="next"><img src="{{ asset('/front-end/assets/img/right-arrow.png') }}" alt=""></div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('script')
<script src="{{ asset('/front-end/assets/slick/slick.min.js') }}"></script>
<script type="text/javascript">
  $('#content-innner-slider').slick({
    prevArrow: $('#inner-team .prev'),
    nextArrow: $('#inner-team .next'),
  });
  $('#inner-team').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 1,
    prevArrow: $('.inner-img-wrapper .prev'),
    nextArrow: $('.inner-img-wrapper .next'),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 6,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
</script>

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