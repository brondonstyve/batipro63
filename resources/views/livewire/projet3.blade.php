<div>
    <section class="container-vente-maisons container-realisation">
        <div class="container ">
          <div class="left-bloc-text">
            <div class="content-text-up">
              <div class="header-title">
                <h3 class="green">Réalisations</h3>
                @if (Route::currentRouteName()=='lc')
                <h4>Voici quelques projets de logements collectifs réalisés récemment </h4>
                    
                @else
                <h4>Voici quelques projets de maisons contemporaines réalisées récemment </h4>
                    
                @endif
                <p>Retrouvez tous les chantiers dans la section  <a href="{{route('projet-front')}}">projets</a> </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="container-maison">
        <div class="content-btn btn-black"><a href=" {{route('projet-front')}} ">voir tous les projets</a></div>
        <div class="content-liste-maisons flex between">

          @if (sizeOf($this->projets)==0)
              <h4>Aucun Projet enregistré pour le moment.</h4>
          @else
          @foreach ($this->projets as $item)
          <div class="item-maison-wrapper">
            <a href='{{route("detailProjet",encrypt($item->id))}}'>

                    <div class="inner-maisons">
                      <div class="image-maison " style="background-image:url({{ asset('/app/projet/'.$item->img_principale)}})">
                        <p>Superficie : {{$item->superficie}} m<sup>2</sup></p>
                      </div>
                    </div>
                    <div class="content-description text-justify">
                        <p>{!!$item->description!!}</p>
                    </div>
            </a>
          </div>
     
          @endforeach 
          @endif
            
            

        </div>
        <br>
        <br>
        {{-- <div  style="float:right"> 
            {{$this->projets->links()}}
        </div> --}}
      </section>
</div>
