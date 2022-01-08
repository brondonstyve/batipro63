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
   @if ($actualite->titreSeo)
   <title>{{ $actualite->titreSeo}}</title>
   @else
   <title>{{'Actualité | Batipro63'}}</title>       
   @endif
   @else
   <title>{{ env('APP_NAME') }}</title>
       
   @endif
   
   @endif
  

   <link rel="stylesheet" href="{{ asset('/front-end/assets/css/master.css') }}">

   <script src="{{ asset('/front-end/assets/js/jquery-1.8.2.min.js') }}"></script>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

@livewireStyles

</head>

<body class="blog blog-detail" >
   <div class="container-main-bloc">
      <div class="container flex">
         @include ("front-end/partials/header")
         <div class="container-main">

            <section class="container-banner" style="background-image:url({{asset('assets/img/bg-detail-blog.jpg')}});">

                <div class="container">
                  <div class="inner-container">
                      <div class="content-title-banner">
                        <h3 class="green">{{$actualite->domaine}}</h3>
                        <h1>{!!$actualite->titre!!}</h1>
                        <div class="content-date-article"> 
                            {{date_format($actualite->created_at, 'd-M-Y')}}
                        </div>
                      </div>
                  </div>
                </div>
                
              </section>
              <section class="container-article-detail">
                <div class="container flex between">
                  <div class="content-article-text">


                    
                        <h3>{!!$actualite->titre1!!}</h3>
                        <p class="text-justify">{!!$actualite->article1!!}</p>
                        <div class="content-image-video">

                            @if ($actualite->image1!=null)
                                <img src="{{asset('/app/actualite/'.$actualite->image1)}}" alt="" style="max-height: 500px;max-width: 500;"> 
                                
                            @endif
                        
                        
                        </div>

                        <div class="content-image-video ">
                        
                        @if ($actualite->video1!=null)
                        <iframe width="560" height="315" src=" {{$actualite->video1}} " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          
                        @endif
                        </div>

                        <br>
                        <br>

                        
                            <h3>{!!$actualite->titre2!!}</h3>
                            <p class="text-justify">{!!$actualite->article2!!}</p>
                            <div class="content-image-video ">

                                @if ($actualite->image2!=null)
                                    <img src="{{asset('/app/actualite/'.$actualite->image2)}}" alt="" style="max-height: 500px;max-width: 500;"> 
                                    
                                @endif
                            
                            
                            </div>

                            <div class="content-image-video ">
                            
                            @if ($actualite->video2!=null)
                            <iframe width="560" height="315" src=" {{$actualite->video2}} " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          
                            @endif
                            </div>
                            

                        <br>
                        <br>

                        
                            <h3>{!!$actualite->titre3!!}</h3>
                            <p class="text-justify">{!!$actualite->article3!!}</p>
                            <div class="content-image-video ">

                                @if ($actualite->image3!=null)
                                    <img src="{{asset('/app/actualite/'.$actualite->image3)}}" alt="" style="max-height: 500px;max-width: 500;">
                                    
                                @endif
                            
                            
                            </div>

                            <div class="content-image-video ">
                            
                            @if ($actualite->video3!=null)
                            <iframe width="560" height="315" src=" {{$actualite->video3}} " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          
                            @endif
                            </div>
                            

                        <br>
                        <br>

                        
                            <h3>{!!$actualite->titre4!!}</h3>
                            <p class="text-justify">{!!$actualite->article4!!}</p>
                            <div class="content-image-video ">

                                @if ($actualite->image4!=null)
                                    <img src="{{asset('/app/actualite/'.$actualite->image4)}}" alt="" style="max-height: 500px;max-width: 500;">
                                    
                                @endif
                            
                            
                            </div>

                            <div class="content-image-video ">
                            
                            @if ($actualite->video4!=null)
                            <iframe width="560" height="315" src=" {{$actualite->video4}} " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          
                            @endif
                            </div>

                        <br>
                        <br>

                        
                            <h3>{!!$actualite->titre5!!}</h3>
                            <p class="text-justify">{!!$actualite->article5!!}</p>
                            <div class="content-image-video ">

                                @if ($actualite->image5!=null)
                                    <img src="{{asset('/app/actualite/'.$actualite->image5)}}" alt="" style="max-height: 500px;max-width: 500;">
                                    
                                @endif
                            
                            
                            </div>

                            <div class="content-image-video ">
                            
                            @if ($actualite->video5!=null)
                            <iframe width="560" height="315" src=" {{$actualite->video5}} " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          
                            @endif
                            </div>

                    
                    <div class="content-social-media">
                        @if ($about)
                        <a href="{{$about->instagram}}"><img src="{{ asset('front-end/assets/img/instagram-share.png') }}" alt=""></a>
                        @else
                        <a href="https://instagram.com"><img src="{{ asset('front-end/assets/img/instagram-share.png') }}" alt=""></a>
                        @endif
                  
                          @if ($about)
                        <a href=" {{$about->facebook}} "><img src="{{ asset('front-end/assets/img/facebook-share.png') }}" alt=""></a>
                        @else
                        <a href="https://www.facebook.com/Batipro63/"><img src="{{ asset('front-end/assets/img/facebook-share.png') }}" alt=""></a>
                        @endif
                  
                          @if ($about)
                        <a href=" {{$about->twitter}} "><img src="{{ asset('front-end/assets/img/linkedin-share.png') }}" alt=""></a>
                        @else
                        <a href="https://twitter.com"><img src="{{ asset('front-end/assets/img/linkedin-share.png') }}" alt=""></a>
                        @endif
                    </div>

                    <br>
                    <div class="content-author flex">
                      <div class="content-img-Author">
                        <img src="{{asset('/app/actualite/'.$actualite->image)}}" alt="" style="max-height: 70px;max-width: 80;">
                      </div>
                      <div class="cntent-name ">
                        <h6>{{$actualite->auteur}}</h6>
                        <p>{{$actualite->desc_auteur}}</p>
                      </div>
                    </div>
                  </div>
                  @livewire('recherche')
                </div>

              </section>
          
@include("front-end/partials/footer")
   
    </div>
</div>
</div>
</div>

</body>
@livewireScripts
</html>
