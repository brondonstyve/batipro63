<div>
  <section class="container-banner" >
      <div class="container">
        <div class="inner-container">
            <div class="content-title-banner"  style="min-width: 100%">
              @if ($this->infos)
              <h1> {{$this->infos->titreEnt}} </h1>
              @else
              <h1>Avis & Vidéos</h1>
              @endif
              <div class="content-subtitle">
                <a href="#" class="@if($type=='Temoignage') text-success @endif"  wire:click="$set('type','Temoignage')"> Avis</a>
                <a href="#" class="@if($type=='Presentation') text-success @endif"  wire:click="$set('type','Presentation')"> Présentation</a> 
                
              </div>
            </div> 
        </div>
      </div>
    </section>


    @if($type=='Temoignage')
<br>
<br>
        
    <section id="qualite" style="">
      <div class="container">
        <div class="inner-wrapper flex" style="width: 100%">
          <div class="item-quality">
            <a href="https://www.google.com/maps/place/Batipro+63/@45.7594377,3.1418807,17z/data=!4m7!3m6!1s0x47f71db3296cf4bb:0xa35a0647e925fe07!8m2!3d45.7594377!4d3.1440694!9m1!1b1" target="_blank">
              <div class="img-quality">
                <img src="{{asset('front-end/assets/img/go.png')}}" alt="">
              </div>
              <div class="content-text-quality">
                <h3>Avis Google</h3>
                <p>Ce que disent les autres sur nous en commentaire depuis google.</p>
              </div>
            </a>
          </div>
          

          <div class="item-quality" style="float: right"> 
            <a href="https://www.facebook.com/Batipro63/reviews/?ref=page_internal" target="_blank">
            <div class="img-quality">
              <img src="{{asset('front-end/assets/img/fb.png')}}" alt="">
            </div>
            <div class="content-text-quality">
              <h3>Avis Facebook</h3>
              <p>99% de nos clients témoignent de leur satisfaction sur Facebook.  </p>
            </div>
          </a>
          </div>


          <div class="item-quality" style="float: right"> 
            <a href="#" wire:click="$set('type','Presentation')">
            <div class="img-quality">
              <img src="{{asset('front-end/assets/img/vid.jpg')}}" alt="">
            </div>
            <div class="content-text-quality">
              <h3>Présentation Vidéo</h3>
              <p>Vidéos de présentation du Groupe Batipro.</p>
            </div>
          </a>
          </div>



        </div>
      </div>
    </section>
@endif


    <section class="container-maison-terrain" id="container-intro-projets" @if($type=='Temoignage') style="margin-top: -4%" @endif>
      <div class="container ">
          @if ($type=='Temoignage')
          <div class="left-bloc-text" >
            <div class="content-text-up">
              <div class="header-title">
                @if ($this->infos)
                <h3 class="green">{{$this->infos->titre}}</h3>
                <h4>{{$this->infos->description}}</h4>
                
                @endif
                
              </div>
            </div>
          </div> 
          @else
          <div class="left-bloc-text">
            <div class="content-text-up">
              <div class="header-title">
                @if ($this->infos)
                <h3 class="green">{{$this->infos->titre1}}</h3>
                <h4>{{$this->infos->description1}}</h4>
                
                @endif
                
              </div>
            </div>
          </div>   
          @endif
      </div>
    </section>
    



    <section class="container-articles" style="background-color: white;scroll-margin-bottom: 3%">
      <div class="container"  style="margin-top: -5%">
        <div class="content-list-projects ">
           <div class="content-articles-wrapper flex space-around">

            @if (sizeOf($this->temoignage)==0)
                <div class="text-center">
                  <h2>
                    Aucune vidéo pour le moment.
                  </h2>
                </div>
            @else
            @foreach ($this->temoignage as $item)
           
            <article class="article-wrapper">
              <div class="image-article " >
                <iframe title="{{$item->description}}" src="{{$item->lien}}" class="frame" style="width: 100%;height: 300px;" width="400" height="300" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>

              </div>
              <div class="conent-text-article-wrapper" style="margin-top: -7%">
                <div class="category-article green"> {{$item->description}} </div>
                <h3>{{$item->auteur}}</h3>

              </div>
            </article>

            @endforeach
            @endif
            
            
            


           </div>
        </div>
      </div>
    </section>
</div>
