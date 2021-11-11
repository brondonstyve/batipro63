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
          
          <div class="content-subtitle filter-options">  
            <a href="#"  onclick="present()" id="present"> PRéSENTATIONS </a>
            <a href="#"  onclick="temoignage()" id='temoignage' > Témoignages </a>
         </div>
        </div>
    </div>
  </div>
</section>



<section class="container-maison-terrain" id="container-intro-maisons">
  <div class="container ">
    <br>
    <br>

    <div id="p">
      <div  class="text-center">
        <div >
          <div >
            @if ($infos)
          <h3 class="green" style="text-transform: uppercase"> {{$infos->titre1}} </h3>
          <h1> {{$infos->description1}} </h1>
              
          @else
          <h3 class="green" style="text-transform: uppercase"> Présentation </h3>
          <h1>Parcourez nos différentes presentations vidéo ici.</h1>

              
          @endif
          </div>
        </div>
      </div> 
      <br>


      <div class="flex" style=" padding: 30px" > 
        @if (sizeOf($temoignage)==0)
            <h1>Aucune presentation enregistrée pour le moment.</h1>
            
        @else
            @foreach ($temoignage as $item)
            @if ($item->type=='Presentation')
                  <div class="" style="margin-right: 1%">
                    <div class="" >
                        <iframe title="{{$item->description}}" src="{{$item->lien}}" width="560" height="400" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                    </div>
                    <div class="wpb_wrapper">
                      <p><strong>{{$item->auteur}}</strong>
                        <br>
                        <br>
                       {{$item->description}}
                    </p>
                
                    </div>
                    
                  </div>
                  @endif
          @endforeach
      @endif
</div>

</div>


  <div id="t">

    <div  class="text-center">
      <div >
        <div >
          

          <br>
          @if ($infos)
          <h3 class="green" style="text-transform: uppercase"> {{$infos->titre}} </h3>
          <h1> {{$infos->description}} </h1>
              
          @else
          <h3 class="green" style="text-transform: uppercase"> Témoignages </h3>
          <h1>Parcourez nos différents témoignages vidéo ici.</h1>

              
          @endif
        </div>
      </div>
    </div> 
    <br>

   

          
        <div class="flex" style=" padding: 30px"> 
              @if (sizeOf($temoignage)==0)
                  <h1>Aucun témoignage enregistré pour le moment.</h1>
                  
              @else
                  @foreach ($temoignage as $item)
                  @if ($item->type=='Temoignage')
                  <div class="" style="margin-right: 1%">
                    <div class="" >
                        <iframe title="{{$item->description}}" src="{{$item->lien}}" width="560" height="400" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                    </div>
                    <div class="wpb_wrapper">
                      <p><strong>{{$item->auteur}}</strong>
                        <br>
                        <br>
                       {{$item->description}}
                    </p>
                
                    </div>
                    
                  </div>
                  @endif
                 
                  @endforeach
              @endif
      </div>
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

@section('script')



@endsection