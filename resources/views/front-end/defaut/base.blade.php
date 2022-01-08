<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   @if (isset($seo))

   <meta name="description" content="{{$seo->description}}">

   <title>{{ $seo->titre}}</title>
   
   @else

   @if (isset($actualite))
   
   <meta name="description" content="{{$actualite->descriptionSeo}}">

   <title>{{ $actualite->titreSeo}}</title>
   @else
   <title>{{ isset($title) ? $title .' | '.config('app.name') : config('app.name') }}</title>
       
   @endif
   
   @endif
  

   <link rel="stylesheet" href="{{ asset('/front-end/assets/css/master.css') }}">

   <link rel="stylesheet" type="text/css" href="{{asset("vendor/cookie-consent/css/cookie-consent.css")}}">
   
   <script src="{{ asset('/front-end/assets/js/jquery-1.8.2.min.js') }}"></script>

   @yield('css_js')
</head>
@livewireStyles

<body @unless(empty($body_class)) class="{{$body_class}}" @endunless>
   <div class="container-main-bloc">
      <div class="container flex">
         @include ("front-end/partials/header")
         <div class="container-main">

            @yield('content')

            @include("front-end/partials/footer")
         </div>
      </div>
   </div>
   </div>
   @yield('script')

   @livewireScripts
</body>

</html>