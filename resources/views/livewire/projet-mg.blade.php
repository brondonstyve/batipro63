<div>


  <section class="container-maison-terrain" id="container-intro-projets">
    <div class="container ">
      @if (sizeOf($this->projets)==0)

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

          <button data-group="Maçonnerie générale">Maçonnerie Maison</button>
          <button data-group="Logement collectif">Maçonnerie Logement collectif</button>
        

        </div>


        <div class="content-projects-wrapper1">
          <div id="grid" class="flex my-shuffle-container space-around">

            @foreach ($this->projets as $key=>$projet)
            

            <div class="content-project-wrapper1 hg-height" data-groups='["@if($projet->service==' Maison
              individuelle'){{'Maison contemporaine'}}@else{{$projet->service}}@endif","all"]'
              style="background:url(../app/projet/{{$projet->img_principale}});background-size:
              cover;background-position: center;background-repeat: no-repeat;height:320px">
              <div class="project-inner">
                <a href="{{route('detailProjet',encrypt($projet->id))}}">

                  <div class="inner-overlay1">
                    <div class="content-overlay1">
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

            @endforeach

          </div>
          <div class="my-sizer-element"></div>

        </div>


      </div>
    </div>
  </section>





</div>
<div class="content-btn btn-black"><a href=" {{route('projet-front')}} ">voir toutes les maisons</a></div>