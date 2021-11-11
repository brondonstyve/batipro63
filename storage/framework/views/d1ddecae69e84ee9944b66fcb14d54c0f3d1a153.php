<?php $__env->startSection('css_js'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


   <body class=" blog blog-detail">
      <div class="container-main-bloc">
        <div class="container flex">
           <div class="container-main">
            <section class="container-banner" style="background-image:url(<?php echo e(asset('assets/img/bg-detail-blog.jpg')); ?>)">

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
                        <div class="content-image-video ">

                            <?php if($actualite->image1!=null): ?>
                                <img src="<?php echo e(asset('/app/actualite/'.$actualite->image1)); ?>" alt="">
                                
                            <?php endif; ?>
                        
                        
                        </div>

                        <div class="content-image-video ">
                        
                        <?php if($actualite->video1!=null): ?>
                        <iframe width="560" height="315" src=" <?php echo e($actualite->video1); ?> " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          
                        <?php endif; ?>
                        </div>

                        <br>
                        <br>

                        <?php if($actualite->titre2!=null): ?>
                            <h3><?php echo $actualite->titre2; ?></h3>
                            <p class="text-justify"><?php echo $actualite->article2; ?></p>
                            <div class="content-image-video ">

                                <?php if($actualite->image2!=null): ?>
                                    <img src="<?php echo e(asset('/app/actualite/'.$actualite->image2)); ?>" alt="">
                                    
                                <?php endif; ?>
                            
                            
                            </div>

                            <div class="content-image-video ">
                            
                            <?php if($actualite->video2!=null): ?>
                            <iframe width="560" height="315" src=" <?php echo e($actualite->video2); ?> " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          
                            <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <br>
                        <br>

                        <?php if($actualite->titre3!=null): ?>
                            <h3><?php echo $actualite->titre3; ?></h3>
                            <p class="text-justify"><?php echo $actualite->article3; ?></p>
                            <div class="content-image-video ">

                                <?php if($actualite->image3!=null): ?>
                                    <img src="<?php echo e(asset('/app/actualite/'.$actualite->image3)); ?>" alt="">
                                    
                                <?php endif; ?>
                            
                            
                            </div>

                            <div class="content-image-video ">
                            
                            <?php if($actualite->video3!=null): ?>
                            <iframe width="560" height="315" src=" <?php echo e($actualite->video3); ?> " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          
                            <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <br>
                        <br>

                        <?php if($actualite->titre4!=null): ?>
                            <h3><?php echo $actualite->titre4; ?></h3>
                            <p class="text-justify"><?php echo $actualite->article4; ?></p>
                            <div class="content-image-video ">

                                <?php if($actualite->image4!=null): ?>
                                    <img src="<?php echo e(asset('/app/actualite/'.$actualite->image4)); ?>" alt="">
                                    
                                <?php endif; ?>
                            
                            
                            </div>

                            <div class="content-image-video ">
                            
                            <?php if($actualite->video4!=null): ?>
                            <iframe width="560" height="315" src=" <?php echo e($actualite->video4); ?> " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          
                            <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <br>
                        <br>

                        <?php if($actualite->titre5!=null): ?>
                            <h3><?php echo $actualite->titre5; ?></h3>
                            <p class="text-justify"><?php echo $actualite->article5; ?></p>
                            <div class="content-image-video ">

                                <?php if($actualite->image5!=null): ?>
                                    <img src="<?php echo e(asset('/app/actualite/'.$actualite->image5)); ?>" alt="">
                                    
                                <?php endif; ?>
                            
                            
                            </div>

                            <div class="content-image-video ">
                            
                            <?php if($actualite->video5!=null): ?>
                            <iframe width="560" height="315" src=" <?php echo e($actualite->video5); ?> " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          
                            <?php endif; ?>
                            </div>
                        <?php endif; ?>

                    
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
                        <img src="<?php echo e(asset('/app/actualite/'.$actualite->image)); ?>" alt="">
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
} elseif ($_instance->childHasBeenRendered('0u6AJEK')) {
    $componentId = $_instance->getRenderedChildComponentId('0u6AJEK');
    $componentTag = $_instance->getRenderedChildComponentTagName('0u6AJEK');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('0u6AJEK');
} else {
    $response = \Livewire\Livewire::mount('recherche');
    $html = $response->html();
    $_instance->logRenderedChild('0u6AJEK', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>

              </section>
           </div>
        </div>
      </div>
   </body>
</html>

<?php echo $__env->make('front-end/defaut/base', ['title' => 'Projets | ', 'body_class' => 'projet-realisation'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/detail-actualite.blade.php ENDPATH**/ ?>