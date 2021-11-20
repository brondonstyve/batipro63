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
          <h1> {{$infos->titreEnt}} </h1>
          @else
          <h1>Vidéos</h1>
          @endif
          
        </div>
    </div>
  </div>
</section>


<section class="container-maison-terrain" id="container-intro-projets">
  <div class="container ">
    @if (sizeOf($temoignage)==0)
               
    <div class="left-bloc-text">
       <div class="content-text-up">
         <div class="header-title">
          <h4>Aucun témoignage enregistré pour le moment.</h4>
         </div>
       </div>
     </div> 
 @endif

 <div class="left-bloc-text" data-groups='["t"]'>
  <div class="content-text-up">
    <div class="header-title">
      @if ($infos)
      <h3 class="green">{{$infos->titre}}</h3>
      <h4>{{$infos->description}}</h4>
      
      @endif
      
    </div>
  </div>
</div> 
    <div class="content-list-projects1">

      <div class="projects-categories filter-options">

        {{-- @if (sizeOf($projets)!=0) --}}
        <button  data-group="p">Présentation</button>
        <button  data-group="t">Témoignage</button>
        {{-- @foreach ($services as $service)
        <button data-group="{{$service->service}}" >{{$service->service}}</button>
        @endforeach --}}
               
        {{-- @endif --}}
         
      </div>

       <div class="content-projects-wrapper1">
        <div id="grid" class="flex my-shuffle-container space-around">
          
        @foreach ($temoignage as $key=>$item)
        @if ($item->type=='Temoignage') 
        <div class="content-project-wrapper1 hg-height" data-groups='["t"]'>
          <div class="project-inner">
          
            <iframe title="{{$item->description}}" src="{{$item->lien}}" class="frame" style="width: 100%;height: 300px;" width="400" height="300" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>

               <div class="content-overlay">          
                  <div class="title-project">
                     <h3> {{$item->auteur}} </h3>
                  </div>
                  <div class="content-title-category">
                    {{$item->description}}
                  </div>
               </div>

        </div>
      </div>

      @else
      <div class="content-project-wrapper1 hg-height" data-groups='["p"]'>
        <div class="project-inner">
        
          <iframe title="{{$item->description}}" src="{{$item->lien}}" class="frame" style="width: 100%;height: 300px;" width="400" height="300" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>

             <div class="content-overlay">          
                <div class="title-project">
                   <h3> {{$item->auteur}} </h3>
                </div>
                <div class="content-title-category">
                  {{$item->description}}
                </div>
             </div>

      </div>
    </div>
        @endif
         
  
            
        @endforeach
        
      </div>
      <div class="my-sizer-element"></div>

    </div>

    </div>
  </div>
</section>



{{-- 

<section class="container-maison-terrain" id="container-intro-projets">
  <div class="container ">
    @if (sizeOf($temoignage)==0)
               
    <div class="left-bloc-text">
       <div class="content-text-up">
         <div class="header-title">
          <h4>Aucune présentation enregistrée pour le moment.</h4>
         </div>
       </div>
     </div> 
 @endif

 <div class="left-bloc-text">
  <div class="content-text-up">
    <div class="header-title">
      @if ($infos)
      <h3 class="green">{{$infos->titre1}}</h3>
      <h4>{{$infos->description1}}</h4>
      
      @endif
      
    </div>
  </div>
</div> 
    <div class="content-list-projects1">
       <div class="content-projects-wrapper1">
        <div id="grid" class="flex my-shuffle-container space-around">
          
        @foreach ($temoignage as $key=>$item)
        @if ($item->type=='Presentation')
        <div class="content-project-wrapper1 hg-height" data-groups='t'>
          <div class="project-inner">
          
            <iframe title="{{$item->description}}" src="{{$item->lien}}" class="frame" style="width: 500px;height: 300px;" width="400" height="300" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>

               <div class="content-overlay">          
                  <div class="title-project">
                     <h3> {{$item->auteur}} </h3>
                  </div>
                  <div class="content-title-category">
                    {{$item->description}}
                  </div>
               </div>

        </div>
      </div>
        @endif
         
  
            
        @endforeach
        
      </div>
      <div class="my-sizer-element"></div>

    </div>

    </div>
  </div>
</section> --}}




@endsection

<script src="{{asset('/front-end/assets/js/jquery-1.8.2.min.js')}}"></script>

<script>

$( document ).ready(function() {
  jQuery('#t').hide();
    jQuery('#p').show();
    jQuery('#present').addClass("activation_l");
    jQuery('#temoignage').removeClass("activation_l");
});


  function present(){
    jQuery('#t').hide();
    jQuery('#p').show();
    jQuery('#present').addClass("activation_l");
    jQuery('#temoignage').removeClass("activation_l");
  };

  function temoignage(){
    jQuery('#p').hide();
    jQuery('#t').show();
    jQuery('#temoignage').addClass("activation_l");
    jQuery('#present').removeClass("activation_l");
  }


</script>
<script src='https://unpkg.com/shufflejs@5'></script>
<script  src="{{ asset('/front-end/assets/js/script.js') }}"></script>
@section('script')



@endsection