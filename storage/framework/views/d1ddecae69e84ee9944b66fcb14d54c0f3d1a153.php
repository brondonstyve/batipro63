<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <?php if(isset($seo)): ?>

   <meta name="description" content="<?php echo e($seo->description); ?>">
   <title><?php echo e($seo->titre); ?></title>
   <?php else: ?>

   <?php if(isset($actualite)): ?>
   <meta name="description" content="<?php echo e($actualite->descriptionSeo); ?>">
   <?php if($actualite->titreSeo): ?>
   <title><?php echo e($actualite->titreSeo); ?></title>
   <?php else: ?>
   <title><?php echo e('Actualité | Batipro63'); ?></title>       
   <?php endif; ?>
   <?php else: ?>
   <title><?php echo e(env('APP_NAME')); ?></title>
       
   <?php endif; ?>
   
   <?php endif; ?>
  

   <link rel="stylesheet" href="<?php echo e(asset('/front-end/assets/css/master.css')); ?>">

   <script src="<?php echo e(asset('/front-end/assets/js/jquery-1.8.2.min.js')); ?>"></script>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<?php echo \Livewire\Livewire::styles(); ?>


</head>

<body class="blog blog-detail" >
   <div class="container-main-bloc">
      <div class="container flex">
         <?php echo $__env->make("front-end/partials/header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <div class="container-main">

            <section class="container-banner" style="background-image:url(<?php echo e(asset('assets/img/bg-detail-blog.jpg')); ?>);">

                <div class="container">
                  <div class="inner-container">
                      <div class="content-title-banner">
                        <h3 class="green"><?php echo e($actualite->domaine); ?></h3>
                        <h1><?php echo $actualite->titre; ?></h1>
                        <div class="content-date-article"> 
                            <?php echo e(date_format($actualite->created_at, 'd-M-Y')); ?>

                        </div>
                      </div>
                  </div>
                </div>
                
              </section>
              <section class="container-article-detail">
                <div class="container flex between">
                  <div class="content-article-text">


                    
                        <h3><?php echo $actualite->titre1; ?></h3>
                        <p class="text-justify"><?php echo $actualite->article1; ?></p>
                        <div class="content-image-video">

                            <?php if($actualite->image1!=null): ?>
                                <img src="<?php echo e(asset('/app/actualite/'.$actualite->image1)); ?>" alt="" style="max-height: 500px;max-width: 500;"> 
                                
                            <?php endif; ?>
                        
                        
                        </div>

                        <div class="content-image-video ">
                        
                        <?php if($actualite->video1!=null): ?>
                        <iframe width="560" height="315" src=" <?php echo e($actualite->video1); ?> " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          
                        <?php endif; ?>
                        </div>

                        <br>
                        <br>

                        
                            <h3><?php echo $actualite->titre2; ?></h3>
                            <p class="text-justify"><?php echo $actualite->article2; ?></p>
                            <div class="content-image-video ">

                                <?php if($actualite->image2!=null): ?>
                                    <img src="<?php echo e(asset('/app/actualite/'.$actualite->image2)); ?>" alt="" style="max-height: 500px;max-width: 500;"> 
                                    
                                <?php endif; ?>
                            
                            
                            </div>

                            <div class="content-image-video ">
                            
                            <?php if($actualite->video2!=null): ?>
                            <iframe width="560" height="315" src=" <?php echo e($actualite->video2); ?> " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          
                            <?php endif; ?>
                            </div>
                            

                        <br>
                        <br>

                        
                            <h3><?php echo $actualite->titre3; ?></h3>
                            <p class="text-justify"><?php echo $actualite->article3; ?></p>
                            <div class="content-image-video ">

                                <?php if($actualite->image3!=null): ?>
                                    <img src="<?php echo e(asset('/app/actualite/'.$actualite->image3)); ?>" alt="" style="max-height: 500px;max-width: 500;">
                                    
                                <?php endif; ?>
                            
                            
                            </div>

                            <div class="content-image-video ">
                            
                            <?php if($actualite->video3!=null): ?>
                            <iframe width="560" height="315" src=" <?php echo e($actualite->video3); ?> " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          
                            <?php endif; ?>
                            </div>
                            

                        <br>
                        <br>

                        
                            <h3><?php echo $actualite->titre4; ?></h3>
                            <p class="text-justify"><?php echo $actualite->article4; ?></p>
                            <div class="content-image-video ">

                                <?php if($actualite->image4!=null): ?>
                                    <img src="<?php echo e(asset('/app/actualite/'.$actualite->image4)); ?>" alt="" style="max-height: 500px;max-width: 500;">
                                    
                                <?php endif; ?>
                            
                            
                            </div>

                            <div class="content-image-video ">
                            
                            <?php if($actualite->video4!=null): ?>
                            <iframe width="560" height="315" src=" <?php echo e($actualite->video4); ?> " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          
                            <?php endif; ?>
                            </div>

                        <br>
                        <br>

                        
                            <h3><?php echo $actualite->titre5; ?></h3>
                            <p class="text-justify"><?php echo $actualite->article5; ?></p>
                            <div class="content-image-video ">

                                <?php if($actualite->image5!=null): ?>
                                    <img src="<?php echo e(asset('/app/actualite/'.$actualite->image5)); ?>" alt="" style="max-height: 500px;max-width: 500;">
                                    
                                <?php endif; ?>
                            
                            
                            </div>

                            <div class="content-image-video ">
                            
                            <?php if($actualite->video5!=null): ?>
                            <iframe width="560" height="315" src=" <?php echo e($actualite->video5); ?> " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          
                            <?php endif; ?>
                            </div>

                    
                    <div class="content-social-media">
                        <?php if($about): ?>
                        <a href="<?php echo e($about->instagram); ?>"><img src="<?php echo e(asset('front-end/assets/img/instagram-share.png')); ?>" alt=""></a>
                        <?php else: ?>
                        <a href="https://instagram.com"><img src="<?php echo e(asset('front-end/assets/img/instagram-share.png')); ?>" alt=""></a>
                        <?php endif; ?>
                  
                          <?php if($about): ?>
                        <a href=" <?php echo e($about->facebook); ?> "><img src="<?php echo e(asset('front-end/assets/img/facebook-share.png')); ?>" alt=""></a>
                        <?php else: ?>
                        <a href="https://www.facebook.com/Batipro63/"><img src="<?php echo e(asset('front-end/assets/img/facebook-share.png')); ?>" alt=""></a>
                        <?php endif; ?>
                  
                          <?php if($about): ?>
                        <a href=" <?php echo e($about->twitter); ?> "><img src="<?php echo e(asset('front-end/assets/img/linkedin-share.png')); ?>" alt=""></a>
                        <?php else: ?>
                        <a href="https://twitter.com"><img src="<?php echo e(asset('front-end/assets/img/linkedin-share.png')); ?>" alt=""></a>
                        <?php endif; ?>
                    </div>

                    <br>
                    <div class="content-author flex">
                      <div class="content-img-Author">
                        <img src="<?php echo e(asset('/app/actualite/'.$actualite->image)); ?>" alt="" style="max-height: 70px;max-width: 80;">
                      </div>
                      <div class="cntent-name ">
                        <h6><?php echo e($actualite->auteur); ?></h6>
                        <p><?php echo e($actualite->desc_auteur); ?></p>
                      </div>
                    </div>
                  </div>
                  <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('recherche')->html();
} elseif ($_instance->childHasBeenRendered('C5NJVa8')) {
    $componentId = $_instance->getRenderedChildComponentId('C5NJVa8');
    $componentTag = $_instance->getRenderedChildComponentTagName('C5NJVa8');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('C5NJVa8');
} else {
    $response = \Livewire\Livewire::mount('recherche');
    $html = $response->html();
    $_instance->logRenderedChild('C5NJVa8', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>

              </section>
          
<?php echo $__env->make("front-end/partials/footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
    </div>
</div>
</div>
</div>

</body>
<?php echo \Livewire\Livewire::scripts(); ?>

</html>
<?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/detail-actualite.blade.php ENDPATH**/ ?>