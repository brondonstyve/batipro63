<div class="content-right-article ">
    <div class="cntent-search bloc-article">
      <form class="" action="" method="get">
        <input type="text" wire:model.debounce.1s="search" placeholder="Rechercher" required>
        {{-- <button type="submit"><img src="{{asset('/front-end/assets/img/search.png')}}" alt=""></button> --}}
      </form>
    </div>

    <div class="content-other-article bloc-article">
      <div class="head-bloc-article ">
        <h4>Récemment publié</h4>
      </div>
      @if (sizeOf($this->actualites)==0)
      <div class="content-list-other-article  align-center">
        @if ($search)
        <p>Resultat de recherche pour "{{$search}}"</p> 
       @endif
        <div class="other-article flex align-center">
          <h5>Auncun article n'inclut ce titre ou domaine pour le moment.</h5>
        </div>
    </a>
      </div>
      @else
        
      @if ($search)
      <p>Resultat de recherche pour "{{$search}}"</p> 
     @endif
      @foreach ($this->actualites as $actualite)
      
      <div class="content-list-other-article  align-center">
          <a href=" {{route('detailActualite',encrypt($actualite->id))}} ">
        <div class="other-article flex align-center">
          <div class="img-article ">
            <img src="{{asset('/app/actualite/'.$actualite->image)}}" alt="">
          </div>
          <div class="cntent-orther-article ">
            <p> 
            {!!substr($actualite->titre,0,50).'...' !!}    
            </p>
          </div>
        </div>
    </a>
      </div>
      @endforeach
      @endif
      
    </div>

    <div class="content-categories-article ">
      <div class="head-bloc-article ">
        <h4>Catégories</h4>
      </div>

      <div class="content-list-categories">
        <ul>
            @foreach ($this->domaines as $item)
            <li><a href=" {{route('actualite-front')}} " class=""> {{$item->domaine.'  ('.($item->nombre).')'}} </a></li>      
            @endforeach
        </ul>
      </div>
    </div>
  </div>