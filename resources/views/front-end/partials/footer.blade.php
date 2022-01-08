<section class="footer">
  <div class="container flex between">
    <div class="item-footer ">

      <br>
      <br>
      <div class="content-text-footer ">
        @if ($about)
        Tél: <a href="tel:{{$about->telephone1}}">{{$about->telephone1}}</a>
        @endif
        <br>
        @if ($about)
        @if ($about->telephone2)
        Tél: <a href="tel:{{$about->telephone2}}">{{$about->telephone2}}</a>
        @endif
        @endif

        @if ($about)
        @if (!$about->telephone2 && !$about->telephone1)
        T : <a href="tel:04 73 31 23 97">04 73 31 23 97</a>

        @endif
        @else
        T : <a href="tel:04 73 31 23 97">04 73 31 23 97</a>

        @endif

        <p>Du lundi au vendredi <br>De 09h à 12h et de 14h à 18h</p>
        <div class="content-btn-action-" style="float: left;margin-top: 7%">
          <a href=" {{route('contact')}} "><span>Contactez-nous</span></a>
        </div>
      </div>
    </div>

    @if ($about)
    <div class="item-footer">
      <div class="title-footer-">
        <h6>Bureau</h6>
      </div>
      <div class="content-text-footer ">
        <p> {!!$about->bureau!!} </p>
      </div>
      {{-- <div class="title-footer-">
        <h6>Dépôt</h6>
      </div>
      <div class="content-text-footer ">
        <p>{!!$about->depot!!} </p>
      </div> --}}

    </div>
    @else
    <div class="item-footer ">
      <div class="title-footer-">
        <h6>Bureau</h6>
      </div>
      <div class="content-text-footer ">
        <p>1 rue de l'Eminée 63000 Clermont-Ferrand</p>
      </div>
      {{-- <div class="title-footer-">
        <h6>Dépôt</h6>
      </div>
      <div class="content-text-footer ">
        <p>7 route du Cendre 63800 Cournon d'Auvergne</p>
      </div> --}}
    </div>
    @endif

    <div class="item-footer ">
      <div class="title-footer-">
        <h6>Suivez-nous</h6>
      </div>
      <div class="content-text-footer ">

        @if ($about)
        @if ($about->linkedin)
        <a href="{{$about->linkedin}}" target="_blank"><img src="{{ asset('front-end/assets/img/hou.png') }}"
            alt=""></a>
        @else
        <a href="#" target="_blank"><img src="{{ asset('front-end/assets/img/hou.png') }}" alt=""></a>
        @endif

        @if ($about->instagram)
        <a href="{{$about->instagram}}" target="_blank"><img src="{{ asset('front-end/assets/img/insta.png') }}"
            alt=""></a>
        @else
        <a href="https://instagram.com" target="_blank"><img src="{{ asset('front-end/assets/img/insta.png') }}"
            alt=""></a>
        @endif

        @if ($about->facebbok)
        <a href=" {{$about->facebook}}" target="_blank"><img src="{{ asset('front-end/assets/img/face.png') }}"
            alt=""></a>
        @else
        <a href="https://www.facebook.com/Batipro63/" target="_blank"><img
            src="{{ asset('front-end/assets/img/face.png') }}" alt=""></a>
        @endif

        @if ($about->twitter)
        <a href=" {{$about->twitter}}" target="_blank"><img src="{{ asset('front-end/assets/img/twit.png') }}"
            alt=""></a>
        @else
        <a href="https://twitter.com" target="_blank"><img src="{{ asset('front-end/assets/img/twit.png') }}"
            alt=""></a>
        @endif

        @else

        <a href="#" target="_blank"><img src="{{ asset('front-end/assets/img/hou.png') }}" alt=""></a>

        <a href="https://instagram.com" target="_blank"><img src="{{ asset('front-end/assets/img/insta.png') }}"
            alt=""></a>

        <a href="https://www.facebook.com/Batipro63/" target="_blank"><img
            src="{{ asset('front-end/assets/img/face.png') }}" alt=""></a>

        <a href="https://twitter.com" target="_blank"><img src="{{ asset('front-end/assets/img/twit.png') }}"
            alt=""></a>

        @endif

        <br>
        <br>

        <div class="ffb">
          <img src=" {{asset('/front-end/assets/img/rge.png')}} " alt="" style="max-width: 30%;margin-top:20px;"
            class="rge">
          <img src=" {{asset('/front-end/assets/img/ffb.png')}} " alt="" style="max-width: 70%;margin-top:20px"
            class="ffb">

        </div>
      </div>
    </div>
  </div>
</section>
<section class="copyright">
  <div class="container flex space-around">
    <span>© {{ date('Y').' '.env('APP_NAME') }}</span>
    <a href="{{route('mention')}}">Mentions légales</a>
    <a href="{{route('cookies')}}"> Politique de Cookies</a>
    <a href="javascript:void(0)" class="js-lcc-settings-toggle">@lang('cookie-consent::texts.alert_settings_lien')</a>
  </div>

</section>

<section class="copyright" style="margin-top: -2%">
  @livewire('mail-sty')
</section>
</div>

<section id="nav-off">
  <div class="infobul">
    <ul class="icon" style="">
      <li></li>
      <li></li>
      <li></li>
    </ul>
    <i class="icon" style="display: none;"></i>
    <ul class="list">
      {{-- --}}
      <li>
        <a href="tel:{{$about->telephone1}}" class="a">
          <div class="call">
            <h6>Appelez au</h6>
            @if ($about)
            <p>{{$about->telephone1}}</p>
            <p>{{$about->telephone2}}</p>
            @else
            <p>04 73 31 23 97</p>
            @endif
          </div>
        </a>
      </li>




      <li>
        <a href=" {{route('contact')}} ">
          <div class="mail">
            <h6>Envoyez</h6>
            <p>Un message</p>
          </div>
        </a>
      </li>

      {{-- --}}
      <li>
        <a href="https://www.facebook.com/messages/t/704364726335638" target="_blank">
          <div class="tchat">
            <h6>Tchatez</h6>
            <p>Sur messenger</p>
          </div>
        </a>
      </li>


      {{--
      --}}

      <li>
        <a href="{{route('brochure')}}">
          <div class="pdf">
            <h6>Consultez</h6>
            <p>La brochure</p>
          </div>
        </a>
      </li>

    </ul>
  </div>
</section>

  
<script type="text/javascript">
  $('.list').click(function(){
      $('.infobul').toggleClass('open')
    })
    $('i.icon').click(function(){
      $('.infobul').removeClass('open')
    })
  
    jQuery( document ).ready(function(){
  
                    setTimeout(function(){ jQuery('#loading').fadeOut(1000); }, 2000);
  
  });
  $('.content-btn-responsive').click(function(){
                      $(this).parent().toggleClass("active-menu-responsive")
                    })
</script>

