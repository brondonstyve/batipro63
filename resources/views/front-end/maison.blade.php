@extends('front-end/defaut/base', ['title' => 'maisons | ', 'body_class' => 'projet-realisation'] )
{{--  @extends('front-end/partials/base', ['title' => 'Batipro63 – Notre métier, la construction sur mesure ', 'body_class' => 'detail-service corporate home2-corporate'] )  --}}

@section('css_js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
@endsection

@section('content')
<section class="container-banner" style="background-image:url({{asset('/front-end/assets/img/logement-collectif.jpg')}})">
  <div class="container">
    <div class="inner-container">
        <div class="content-title-banner">

          @if ($infos)
          <h1> {{$infos->titre}} </h1>
          @else
          <h1>Maisons Virtuelles</h1>
          @endif
          
        </div>
    </div>
  </div>
</section>
<section class="container-maison-terrain" id="container-intro-maisons">
  <div class="container ">
  
   

   

    <br>
    <br>
    <div  style="text-align: center">
      <div >
        <div > 
          @if ($infos)
          <h3 class="green"> {!!$infos->description!!} </h3>
          @else
          <h3 class="green">Maisons Virtuelles</h3 >
          @endif
        </div>
      </div>
    </div> 

    <div class="containerEmbed">
      <iframe class="responsive-iframe" src="http://preprod2.batipro63.fr/BatiPro%2063%20-%20Web/" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
    </div>
    {{-- @if (sizeOf($maisons)==0)
               
    <div class="">
       <div style="text-align: center;margin-top: 5px">
         <div class="" >
          <h2>Aucune maison virtuelle enregistrée pour le moment.</h2>
         </div>
       </div>
     </div> 
     <br>
     <br>
 @endif
    <div class="content-list-projects ">
       <div class="content-projects-wrapper">
          <div id="grid" class="flex my-shuffle-container space-around">

            @foreach ($maisons as $maison)
               <div class="content-project-wrapper hg-height"  data-groups='["all","all"]' style="background:url({{asset('/app/maison/'.$maison->img_principale)}});background-repeat: no-repeat">
              <div class="project-inner">
            <a href="{{route('detailmaisonVirtuelle',encrypt($maison->id))}}">
                 <div class="inner-overlay">
                    <div class="content-overlay">
                       <div class="content-icone-plus"></div>
                       <div class="title-project">
                          <h3> {{$maison->libelle}} </h3>
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
    </div> --}}



  </div>
</section>

@endsection


@section('script')
    
<script src='https://unpkg.com/shufflejs@5'></script>
<script  src="{{ asset('/front-end/assets/js/script.js') }}"></script>

@endsection