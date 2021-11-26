@extends('front-end/defaut/base', ['title' => 'Projets | ', 'body_class' => 'projet-realisation'] )
{{--  @extends('front-end/partials/base', ['title' => 'Batipro63 – Notre métier, la construction sur mesure ', 'body_class' => 'detail-service corporate home2-corporate'] )  --}}

@section('css_js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    
@endsection


    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{asset('/visuel/magnific-popup.css')}}">

   

        <style>
          .image-source-link {
            color: #98C3D1;
          }

          .mfp-with-zoom .mfp-container,
          .mfp-with-zoom.mfp-bg {
            opacity: 0;
            -webkit-backface-visibility: hidden;
            /* ideally, transition speed should match zoom duration */
            -webkit-transition: all 0.3s ease-out; 
            -moz-transition: all 0.3s ease-out; 
            -o-transition: all 0.3s ease-out; 
            transition: all 0.3s ease-out;
          }

          .mfp-with-zoom.mfp-ready .mfp-container {
              opacity: 1;
          }
          .mfp-with-zoom.mfp-ready.mfp-bg {
              opacity: 0.8;
          }

          .mfp-with-zoom.mfp-removing .mfp-container, 
          .mfp-with-zoom.mfp-removing.mfp-bg {
            opacity: 0;
          }
        </style>


@section('content')
   <body class="about-us-page single-projet ">
      <div class="container-main-bloc">
        <div class="container flex">
            
           <div class="container-main">

              <section class="container-banner" style="background-image:url({{ asset('/app/projet/'.$projet->img_principale)}});background-size: cover;background-position: center;background-repeat: no-repeat;">
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
                      </div>
                      <div class="content-bloc-description add-square">
                         <p class="jost-style jost-style-100">{!!$projet->description!!} </p>
                         <p  class="jost-style jost-style-100"></p>
                      </div>
                   </div>
                   
                   <div class="content-info-cta ">

                   

                     <div class="logo-">
                      <section class="copyright1" style="min-width: 100%">
                        <div class="container flex space-around">
                          @if ($precedent)
                          <a href="{{route('detailProjet',encrypt($precedent->id))}}" title="{{$precedent->libelle}}" style="margin-bottom: 10px">
                            <div style="background-color: #5aa39c; max-width: 100px;padding-left: 10px;padding-right: 10px"> 
                            <img src="{{asset('front-end/assets/img/arrowb.png')}}" alt="">
                              
                            </div>
                            {{-- <span>{{$precedent->libelle}}</span> --}}
                          </a>
                          
                          @endif
                          @if ($suivant)
                          <a href="{{route('detailProjet',encrypt($suivant->id))}}" title="{{$suivant->libelle}}" >
                            <div style="background-color: #5aa39c; max-width: 100px;padding-left: 10px;padding-right: 10px"> 
                            <img src="{{asset('front-end/assets/img/right-arrowb.png')}}" alt="">
                            </div>
                            {{-- <span>{{$suivant->libelle}}</span> --}}
                          </a>
                          @endif
                        </div>
                      </section>
                      
                       <img src="{{ asset('/front-end/assets/img/logo-simple.png')}}" alt="">
                     </div>
                     <div class="content-info ">
                       <div class="line-info- flex">
                         <span class="green">Année :</span>
                         <span > {{$projet->annee}}</span>
                       </div>
                       <div class="line-info- flex">
                         <span class="green">Entreprise :</span>
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

                    
                  <div class="content-list-real-projet popup-gallery flex">

                    @php
                        $image=explode('->',$projet->image)
                    @endphp
                    
                    @foreach ($image as $key=>$item)
                    @if ($key!=0)
                    <a href="{{'../app/projet/'.$item}}" title="{{$projet->libelle}}">
                      <div class="item-projet-wrapper">
                        <div class="content-img" >
                          <img src="{{ asset('/app/projet/'.$item)}}" style="width: 362px;height: 255px;" >
                        </div>
                      </div>
                    </a>
                   
                    @endif
                      
                    @endforeach
                  </div>
                </div>
              </section>
                
           </div>
        </div>
      </div>

      @section('script')
      <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"></script>

 <script src="{{asset('/visuel/magnific-popup.js')}}"></script>
       

      <script type="text/javascript">
        $(document).ready(function() {
          $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
              enabled: true,
              navigateByImgClick: true,
              preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
              tError: '<a href="%url%">The image #%curr%</a> ne parvient pas à charger.',
              titleSrc: function(item) {
                return item.el.attr('title') + '<small>Batipro63</small>';
              }
            }
          });
        });
      </script>
      @endsection
    

   </body>
</html>

