@extends('front-end/defaut/base', ['title' => 'Projets | ', 'body_class' => 'projet-realisation'] )
{{--  @extends('front-end/partials/base', ['title' => 'Batipro63 – Notre métier, la construction sur mesure ', 'body_class' => 'detail-service corporate home2-corporate'] )  --}}

@section('css_js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
@endsection

@section('content')
<section class="container-banner" style="background-image:url({{ asset('/front-end/assets/img/logement-collectif.jpg')}})">
  <div class="container">
    <div class="inner-container">
        <div class="content-title-banner">
          <h1>Projets</h1>
        </div>
    </div>
  </div>
</section>



<section class="container-maison-terrain" id="container-intro-projets">
  <div class="container ">
    <div class="left-bloc-text">
      <div class="content-text-up">
        <div class="header-title">
          @if ($infos)
          <h3 class="green">{{$infos->titre}}</h3>
          <h4>{{$infos->description}}</h4>
          @else
          <h3 class="green">sur le territoire français</h3>
          <h4>Nous avons au fil des années su imposer des oeuvres architecturales de classe mondiale</h4>
          @endif
          
        </div>
      </div>
    </div> 




    @if (sizeOf($projets)==0)
               
    <div class="left-bloc-text">
       <div class="content-text-up">
         <div class="header-title">
          <h4>Aucun projet enregistré pour le moment.</h4>
         </div>
       </div>
     </div> 
 @endif
    <div class="content-list-projects1">
       <div class="projects-categories filter-options"> 

         {{-- @if (sizeOf($projets)!=0) --}}
         @if ($vue==false)
         <button  data-group="Maison contemporaine">Maison Contemporaine</button>
         <button  data-group="Logement collectif">Maçonnerie Logement collectif</button>
         <button  data-group="Maçonnerie générale">Maçonnerie Maison</button>
         @else
         <button  data-group="Maison contemporaine" class="active">{{$vue}}</button>
         @endif
         
         {{-- @foreach ($services as $service)
         <button data-group="{{$service->service}}" >{{$service->service}}</button>
         @endforeach --}}
                
         {{-- @endif --}}
          
       </div>
 

       <div class="content-projects-wrapper1">
        <div id="grid" class="flex my-shuffle-container space-around">
          
        @foreach ($projets as $key=>$projet)
          {{-- <div class="content-project-wrapper1 hg-height" data-groups='["@if($item->service=='Maison individuelle'){{'Maison contemporaine'}}@else{{$item->service}}@endif","all"]'>
            <div class="project-inner">
              <a href="{{route('detailProjet',encrypt($item->id))}}"> 

            
              <img src="{{ asset('/app/projet/'.$item->img_principale)}}" style="width: 100%;height: 300px;"> 
            
              <div class="inner-overlay1"  >
                 <div class="content-overlay1"> 
                    <div class="content-icone-plus"></div>           
                    <div class="title-project">
                       <h3> {{$item->libelle}} </h3>
                    </div>
                    <div class="content-title-category">
                      @if($item->service=='Maison individuelle'){{'Maison contemporaine'}}@else{{$item->service}}@endif  
                    </div>
                 </div>
              </div>


        </a>
          </div>
        </div>
   --}}

   <div class="content-project-wrapper1 hg-height"  data-groups='["@if($projet->service=='Maison individuelle'){{'Maison contemporaine'}}@else{{$projet->service}}@endif","all"]' style="background:url(../app/projet/{{$projet->img_principale}});background-size: cover;background-position: center;background-repeat: no-repeat;height:320px">
    <div class="project-inner">
  <a href="{{route('detailProjet',encrypt($projet->id))}}">

       <div class="inner-overlay1">
          <div class="content-overlay1"> 
             <div class="content-icone-plus"></div>
             <div class="title-project">
                <h3> {{$projet->libelle}} </h3>
             </div>
             <div class="content-title-category">{{$projet->libelleS}}</div>
          </div>
       </div>
     </a>
    </div>
 </div>

        @endforeach
        
      </div>
      <div class="my-sizer-element"></div>

    </div>



{{--  
       <div class="content-projects-wrapper">
          <div id="grid" class="flex my-shuffle-container space-around">

            @foreach ($projets as $projet)
            @if (file_exists(public_path('/app/projet/'.explode('.jpg',$projet->img_principale)[0].'rr.jpg')))
               <div class="content-project-wrapper hg-height"  data-groups='["{{$projet->service}}","all"]' style="background:url({{ asset('/app/projet/'.explode('.jpg',$projet->img_principale)[0].'rr.jpg')}}); background-repeat: no-repeat; ">
                
            @else
               <div class="content-project-wrapper hg-height"  data-groups='["{{$projet->service}}","all"]' style="background:url({{ asset('/app/projet/'.$projet->img_principale)}}); background-repeat: no-repeat; ">
                
            @endif
              
               <div class="project-inner">
              <a href="{{route('detailProjet',encrypt($projet->id))}}">
                 <div class="inner-overlay">
                    <div class="content-overlay"> 
                       <div class="content-icone-plus"></div>           
                       <div class="title-project">
                          <h3> {{$projet->libelle}} </h3>
                       </div>
                       <div class="content-title-category">{{$projet->service}}</div>
                    </div>
                 </div>
               </a>
              </div>
           </div> 
          </div> 
           
          @endforeach 
        

        
       

          </div>
          <div class="my-sizer-element"></div>
       </div>
--}}
<div class="projects-categories filter-options">

 @if ($vue=='Maçonnerie Maison')
 <div class="content-btn-action-" style="margin-bottom: 50px">
  <a href="{{route('projetLc')}}"><span>Voir Logement collectif</span></a>
</div>

<div class="content-btn-action-">
  <a href="{{route('projetMc')}}"><span>Voir Maison Contemporaine</span></a>
</div>
 @endif

 @if ($vue=='Maison contemporaine')
 <div class="content-btn-action-" style="margin-bottom: 50px">
  <a href="{{route('projetMg')}}"><span>Voir Maçonnerie générale</span></a>
</div>
<div class="content-btn-action-">
<a href="{{route('projetLc')}}"><span>Voir Logement collectif</span></a>
</div>
 @endif

 @if ($vue=='Maçonnerie Logement collectif')
 <div class="content-btn-action-" style="margin-bottom: 50px">
  <a href="{{route('projetMg')}}"><span>Voir Maçonnerie générale</span></a>
</div>

<div class="content-btn-action-">
<a href="{{route('projetMc')}}"><span>Voir Maison Contemporaine</span></a>
</div>
 @endif



</div>

    </div>
  </div>
</section>

@endsection


@section('script')
    
<script src='https://unpkg.com/shufflejs@5'></script>
<script  src="{{ asset('/front-end/assets/js/script.js') }}"></script>

@endsection