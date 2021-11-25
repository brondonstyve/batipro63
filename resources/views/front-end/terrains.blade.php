@extends('front-end/defaut/base', ['title' => 'Brochure ','body_class' => 'service-page-detail service-page brochure-page'] )
{{--  @extends('front-end/partials/base', ['title' => 'Batipro63 – Notre métier, la construction sur mesure ', ] )  --}}

@section('css_js')
    
    <link rel="stylesheet" href="{{ asset('/front-end/assets/masterslider/style/masterslider.css') }}" />
    <!-- MasterSlider default skin -->
    <link rel="stylesheet" href="{{ asset('/front-end/assets/masterslider/skins/default/style.css') }}" />
    <script src="{{ asset('/front-end/assets/masterslider/masterslider.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
@endsection
@section('content')
              <section class="container-banner" style="background-image:url({{asset('/front-end/assets/img/bg-brochure.jpg')}})">
                <div class="container">
                  <div class="inner-container">
                      <div class="content-title-banner">
                        <h1>TERRAINS</h1>
                      </div>
                  </div>
                </div>
              </section>
              <section class="container-maison-terrai" id="container-maison-terrain1" >
                <div class="container ">
                  <div class="left-bloc-text">
                    <div class="content-text-up">
                      <div class="header-title">
                        <h4>Vous recherchez un terrain pour votre projet?</h4>
                      </div>
                    </div>
                  </div>
                  <div class="content-form " >

                    @livewire('send-mail-terrain')
                  </div>

                  
                </div>
              </section>
<section class="container-maison-terrain" id="container-intro-projets">
  <div class="container ">
    {{-- <div class="left-bloc-text">
      <div class="content-text-up">
        <div class="header-title">
          <h3 class="green">sur le territoire français</h3>
          <h4>Des terrains disponibles pour vous.</h4>
        </div>
      </div>
    </div> --}}

    <br>
    <br>
   
    <div class="content-list-projects ">
      <div class="content-projects-wrapper">
        <div id="grid" class="flex my-shuffle-container space-around">

          @foreach ($projets as $projet)
          <div class="content-project-wrapper hg-height" data-groups='["all","all"]'
            style="background:url({{ asset('/app/terrain/'.$projet->img_principale)}});background-repeat: no-repeat">
            <div class="project-inner">
              <a href="{{route('detailTerrain',encrypt($projet->id))}}">
                <div class="inner-overlay">
                  <div class="content-overlay">
                    <div class="content-icone-plus"></div>
                    <div class="title-project">
                      <h3> {{$projet->libelle}} </h3>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>

          @endforeach




        </div>
        <div class="my-sizer-element"></div>
      </div>
    </div>
  </div>
</section>
@endsection