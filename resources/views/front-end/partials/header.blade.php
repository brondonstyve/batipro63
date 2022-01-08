    <section id="loading">
        <span></span>
    </section>
    <div class="container-logo-navigation top-fixed">
        <div class="logo">
            <a href="{{ route('home-front') }}"><img src="{{ asset('/front-end/assets/img/logo-vertical.png') }}" alt=""></a>
        </div>
        <div class="container-navigation">
            <ul>
                <li><a class="{{ Route::currentRouteName() == 'aboutus' ? 'active' : '' }}" href="{{ route('aboutus') }}">A propos</a></li>
                <li><a class="@if(in_array(Route::currentRouteName(), ['service-front','mc','lc','mg','mo']))   active @endif"  href="{{ route('service-front') }}">Services</a></li>
                <li><a class="{{ Route::currentRouteName() == 'projet-front' ? 'active' : '' }}"   href=" {{route('projet-front')}} ">Projets</a></li>
                <li><a class="{{ Route::currentRouteName() == 'terrain-front' ? 'active' : '' }}"  href="{{ route('terrain-front') }}">Terrains</a></li>
                <li><a class="{{ Route::currentRouteName() == 'maisonVirtuelle' ? 'active' : '' }}" href="{{ route('maisonVirtuelle') }}">Maisons virtuelles</a></li>
                <li><a class="@if(in_array(Route::currentRouteName(), ['actualite-front','detailActualite']))   active @endif "  href=" {{route('actualite-front')}} ">Actualités</a></li>
                <li><a class="{{ Route::currentRouteName() == 'brochure' ? 'active' : '' }}"   href="{{ route('brochure') }}">Brochure</a></li>
                <li><a class="{{ Route::currentRouteName() == 'temoignage' ? 'active' : '' }}"   href="{{ route('temoignage') }}">Avis & Vidéos</a></li>
            </ul>
        </div>
    </div>


     <div class="container-logo-navigation top-fixed" id="responsive-mode" style="display:none">
        <div class="logo">
           <a href="./"><img src="{{asset('/front-end/assets/img/logo.png')}}" alt=""></a>
        </div>
        <div class="container-navigation">
                 <div class="content-btn-responsive">
                     <span class="bar"></span>
                     <span class="bar"></span>
                     <span class="bar"></span>
                 </div>
                 <ul>
                    <li><a class="{{ Route::currentRouteName() == 'aboutus' ? 'active' : '' }}" href="{{ route('aboutus') }}">A propos</a></li>
                    <li><a class="@if(in_array(Route::currentRouteName(), ['service-front','mc','lc','mg','mo']))   active @endif"  href="{{ route('service-front') }}">Services</a></li>
                    <li><a class="{{ Route::currentRouteName() == 'projet-front' ? 'active' : '' }}"   href=" {{route('projet-front')}} ">Projets</a></li>
                    <li><a class="{{ Route::currentRouteName() == 'terrain-front' ? 'active' : '' }}"  href="{{ route('terrain-front') }}">Terrains</a></li>
                    <li><a class="{{ Route::currentRouteName() == 'maisonVirtuelle' ? 'active' : '' }}" href="{{ route('maisonVirtuelle') }}">Maisons virtuelles</a></li>
                    <li><a class="@if(in_array(Route::currentRouteName(), ['actualite-front','detailActualite']))   active @endif "  href=" {{route('actualite-front')}} ">Actualités</a></li>
                    <li><a class="{{ Route::currentRouteName() == 'brochure' ? 'active' : '' }}"   href="{{ route('brochure') }}">Brochure</a></li>
                    <li><a class="{{ Route::currentRouteName() == 'temoignage' ? 'active' : '' }}"   href="{{ route('temoignage') }}">Avis & Vidéos</a></li>
                </ul>
        </div>
     </div>
