<div>
    <section class="container-banner" >
        <div class="container">
          <div class="inner-container">
              <div class="content-title-banner">
                <h1>Blog</h1>
                <div class="content-subtitle">
                  @if (sizeOf($this->domain)>0)
                      
                  <a href="#" class="@if($domaine=='') text-success @endif"  wire:click="$set('domaine','')"> Tout</a>
                  @endif
                  @foreach ($this->domain as $dom)
                  <a href="#" class="@if($domaine==$dom->domaine) text-success @endif"  wire:click="$set('domaine','{{$dom->domaine}}')"> {{$dom->domaine.' ('.$dom->nombre.')'}} </a>
                  @endforeach
                </div>
              </div> 
          </div>
        </div>
      </section>
      <section class="container-articles">
        <div class="container ">
          <div class="content-list-projects ">
             <div class="content-articles-wrapper flex space-around">

              @if (sizeOf($this->actualite)==0)
                  <div class="text-center">
                    <h2>
                      Aucune actualité pour le moment.
                    </h2>
                  </div>
              @else
              @foreach ($this->actualite as $actua)
              <article class="article-wrapper">
                <div class="image-article ">
                  <img src="{{asset('/app/actualite/'.$actua->image)}}" alt="">
                </div>
                <div class="conent-text-article-wrapper">
                  <div class="category-article green"> {{$actua->domaine}} </div>
                  <h3>{!!$actua->titre!!}</h3>
                  <p class="text-justify">{!!substr($actua->article1,0,255)!!}[...] </p>

                </div>
                <div class="content-anim-elit">
                  <div class="content-date-square">
                    
                      <div class="date- green">{{date_format($actua->created_at, 'd-M-Y')}}</div>
                  </div>
                  <div class="content-lean-more-action ">
                    <div class="content-btn ">
                      <a href=" {{route('detailActualite',encrypt($actua->id))}} ">En savoir +</a>
                    </div>
                  </div>
                </div>
              </article>
              @endforeach
              @endif
              

             </div>
          </div>
        </div>
        <div class="content-pagination">
          {{$this->actualite->links()}}
        </div>
      </section>
</div>
