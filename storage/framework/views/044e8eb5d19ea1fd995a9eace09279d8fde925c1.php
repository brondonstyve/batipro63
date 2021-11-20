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
                        <h1><?php echo e($actualite->titre); ?></h1>
                        <div class="content-date-article"> 
                            <?php echo e($actualite->created_at); ?>

                        </div>
                      </div>
                  </div>
                </div>
              </section>
              <section class="container-article-detail">
                <div class="container flex between">
                  <div class="content-article-text">


                    
                        <h3><?php echo e($actualite->titre1); ?></h3>
                        <p><?php echo $actualite->article1; ?></p>
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
                            <h3><?php echo e($actualite->titre2); ?></h3>
                            <p><?php echo $actualite->article2; ?></p>
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
                            <h3><?php echo e($actualite->titre3); ?></h3>
                            <p><?php echo $actualite->article3; ?></p>
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
                            <h3><?php echo e($actualite->titre4); ?></h3>
                            <p><?php echo $actualite->article4; ?></p>
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
                            <h3><?php echo e($actualite->titre5); ?></h3>
                            <p><?php echo $actualite->article5; ?></p>
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
                  <div class="content-right-article ">
                    <div class="cntent-search bloc-article">
                      <form class="" action="" method="get">
                        <input type="text" name="" placeholder="Rechercher" required>
                        <button type="submit"><img src="<?php echo e(asset('/front-end/assets/img/search.png')); ?>" alt=""></button>
                      </form>
                    </div>

                    <div class="content-other-article bloc-article">
                      <div class="head-bloc-article ">
                        <h4>Récemment publié</h4>
                      </div>
                      <?php $__currentLoopData = $actualites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actualite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="content-list-other-article  align-center">
                          <a href=" <?php echo e(route('detailLc',encrypt($actualite->id))); ?> ">
                        <div class="other-article flex align-center">
                          <div class="img-article ">
                            <img src="<?php echo e(asset('/app/actualite/'.$actualite->image)); ?>" alt="">
                          </div>
                          <div class="cntent-orther-article ">
                            <p>
                            <?php echo substr($actualite->titre,0,50).'...'; ?>    
                            </p>
                          </div>
                        </div>
                    </a>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="content-categories-article ">
                      <div class="head-bloc-article ">
                        <h4>Catégories </h4>
                      </div>

                      <div class="content-list-categories">
                        <ul>
                            <?php $__currentLoopData = $domaine; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href=" <?php echo e(route('lc')); ?> " class=""> <?php echo e($item->domaine.'  ('.($item->nombre).')'); ?> </a></li>      
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

              </section>
           </div>
        </div>
      </div>
   </body>
</html>

<?php echo $__env->make('front-end/defaut/base', ['title' => 'Projets | ', 'body_class' => 'projet-realisation'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/detail-lc.blade.php ENDPATH**/ ?>