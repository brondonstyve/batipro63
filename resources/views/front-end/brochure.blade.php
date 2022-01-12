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
              <section class="container-banner" style="background-image:url({{ asset('/front-end/assets/img/bg-brochure.jpg')}})">
                <div class="container">
                  <div class="inner-container">
                      <div class="content-title-banner">
                        <h1>Brochure</h1>
                      </div>
                  </div>
                </div>
              </section>
              <section class="container-maison-terrain" id="container-maison-terrain" >
                <div class="container ">
                  <div class="left-bloc-text">
                    <div class="content-text-up">
                      <div class="header-title">
                        <h4>Téléchargez gratuitement notre brochure</h4>
                      </div>
                    </div>
                  </div>
                  <div class="content-form " >
                    <p>Remplissez les informations  ci-dessous et téléchargez la brochure
                    </p>

                    @livewire('brochure')
                  </div>
                </div>
              </section>
@endsection