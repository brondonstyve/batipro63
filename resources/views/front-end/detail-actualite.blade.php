@extends('front-end/defaut/base', ['title' => 'Projets | ', 'body_class' => 'projet-realisation'] )
{{--  @extends('front-end/partials/base', ['title' => 'Batipro63 – Notre métier, la construction sur mesure ', 'body_class' => 'detail-service corporate home2-corporate'] )  --}}

@section('css_js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
@endsection

@section('content')


   <body class=" blog blog-detail">
      <div class="container-main-bloc">
        <div class="container flex">
           <div class="container-main">
            <section class="container-banner" style="background-image:url({{asset('assets/img/bg-detail-blog.jpg')}})">

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
                        <div class="content-image-video ">

                            @if ($actualite->image1!=null)
                                <img src="{{asset('/app/actualite/'.$actualite->image1)}}" alt="">
                                
                            @endif
                        
                        
                        </div>

                        <div class="content-image-video ">
                        
                        @if ($actualite->video1!=null)
                        <iframe width="560" height="315" src=" {{$actualite->video1}} " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          
                        @endif
                        </div>

                        <br>
                        <br>

                        @if ($actualite->titre2!=null)
                            <h3>{!!$actualite->titre2!!}</h3>
                            <p class="text-justify">{!!$actualite->article2!!}</p>
                            <div class="content-image-video ">

                                @if ($actualite->image2!=null)
                                    <img src="{{asset('/app/actualite/'.$actualite->image2)}}" alt="">
                                    
                                @endif
                            
                            
                            </div>

                            <div class="content-image-video ">
                            
                            @if ($actualite->video2!=null)
                            <iframe width="560" height="315" src=" {{$actualite->video2}} " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          
                            @endif
                            </div>
                        @endif

                        <br>
                        <br>

                        @if ($actualite->titre3!=null)
                            <h3>{!!$actualite->titre3!!}</h3>
                            <p class="text-justify">{!!$actualite->article3!!}</p>
                            <div class="content-image-video ">

                                @if ($actualite->image3!=null)
                                    <img src="{{asset('/app/actualite/'.$actualite->image3)}}" alt="">
                                    
                                @endif
                            
                            
                            </div>

                            <div class="content-image-video ">
                            
                            @if ($actualite->video3!=null)
                            <iframe width="560" height="315" src=" {{$actualite->video3}} " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          
                            @endif
                            </div>
                        @endif

                        <br>
                        <br>

                        @if ($actualite->titre4!=null)
                            <h3>{!!$actualite->titre4!!}</h3>
                            <p class="text-justify">{!!$actualite->article4!!}</p>
                            <div class="content-image-video ">

                                @if ($actualite->image4!=null)
                                    <img src="{{asset('/app/actualite/'.$actualite->image4)}}" alt="">
                                    
                                @endif
                            
                            
                            </div>

                            <div class="content-image-video ">
                            
                            @if ($actualite->video4!=null)
                            <iframe width="560" height="315" src=" {{$actualite->video4}} " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          
                            @endif
                            </div>
                        @endif

                        <br>
                        <br>

                        @if ($actualite->titre5!=null)
                            <h3>{!!$actualite->titre5!!}</h3>
                            <p class="text-justify">{!!$actualite->article5!!}</p>
                            <div class="content-image-video ">

                                @if ($actualite->image5!=null)
                                    <img src="{{asset('/app/actualite/'.$actualite->image5)}}" alt="">
                                    
                                @endif
                            
                            
                            </div>

                            <div class="content-image-video ">
                            
                            @if ($actualite->video5!=null)
                            <iframe width="560" height="315" src=" {{$actualite->video5}} " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          
                            @endif
                            </div>
                        @endif

                    
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
                        <img src="{{asset('/app/actualite/'.$actualite->image)}}" alt="">
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
           </div>
        </div>
      </div>
   </body>
</html>
