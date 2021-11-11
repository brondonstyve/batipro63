<div>
    <section class="container-maison">
        <div class="content-btn btn-black"><a href=" {{route('projet-front')}} ">voir toutes les maisons</a></div>
        <div class="content-liste-maisons flex between">


          @if (sizeOf($this->projet)==0)
                <h4>Aucun Projet enregistré pour le moment.</h4>
            @else
            @foreach ($this->projet as $item)
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

      </section>
</div>
