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

          <h1>Maitrise d'œuvre</h1>
          
        </div>
    </div>
  </div>
</section>


<iframe title="maitrise d'oeuvre" src="{{route('etape')}}" width="100%" height="1100" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>





@endsection

<script src="{{asset('/front-end/assets/js/jquery-1.8.2.min.js')}}"></script>



@section('script')



@endsection