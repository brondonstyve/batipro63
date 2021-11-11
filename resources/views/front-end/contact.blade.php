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
                        <h1>Formulaire de contact</h1>
                      </div>
                  </div>
                </div>
              </section>
              <section class="container-maison-terrai" id="container-maison-terrain1" >
                <div class="container ">
                  <div class="left-bloc-text">
                    <div class="content-text-up">
                      <div class="header-title">
                        <h4>Envoyez nous un message à travers ce formulaire.</h4>
                      </div>
                    </div>
                  </div>
                  <div class="content-form " >

                    @livewire('send-mail')
                  </div>

                  
                </div>
              </section>
@endsection