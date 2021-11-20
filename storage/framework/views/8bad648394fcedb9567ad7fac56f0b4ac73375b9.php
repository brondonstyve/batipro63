<?php $__env->startSection('css_js'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   <body class="about-us-page single-projet ">
      <div class="container-main-bloc">
        <div class="container flex">
            
           <div class="container-main">
              <section class="container-banner" style="background-image:url(<?php echo e(asset('/app/maison/'.$maison->img_principale)); ?>); width: 1422px;height: 500px;background-repeat: no-repeat">
                <div class="container">
                  <div class="inner-container">
                      <div class="content-title-banner">

                      </div>
                  </div> 
                </div>
              </section>
              <section class="container-description">
                 <div class="container flex ">
                    <div class="left-bloc-text">
                       <div class="header-title">
                          <h4><?php echo e($maison->libelle); ?></h4>
                        </div>
                       <div class="content-bloc-description add-square">
                          <p class="jost-style jost-style-100"><?php echo $maison->description; ?>. </p>
                       </div>
                    </div>
                    <div class="content-info-cta ">
                      <div class="logo-">
                        <img src="<?php echo e(asset('/front-end/assets/img/logo-simple.png')); ?>" alt="">
                      </div>
                      <div class="content-info ">
                        <div class="line-info- flex">
                          <span class="green">Durée de vie:</span>
                          <span > <?php echo e($maison->annee); ?></span>
                        </div>
                        <div class="line-info- flex">
                            <span class="green">Durée de réalisation:</span>
                            <span > <?php echo e($maison->duree); ?></span>
                          </div>
                        <div class="line-info- flex">
                          <span class="green">Exemple de lieu :</span>
                          <span > <?php echo e($maison->lieu); ?></span>
                        </div>
                      </div>
                    </div>
                 </div>
              </section>
              <?php
                        $image=explode('->',$maison->image);
                    ?>
              <section class="container-realisation-projets">
                <div class="container ">

                    
                  <div class="content-list-real-projet flex">

                    
                    
                    <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item!=''): ?>
                        <div class="item-projet-wrapper">
                            <div class="content-img-projet" >
                              <img src="<?php echo e(asset('/app/maison/'.$item)); ?>" style="width: 362px;height: 255px;">
                            </div>
                            <div class="content-text-projets">
                              <h4> <?php echo e($maison->libelle); ?> </h4>
                              <a href="#">Voir en images</a>
                            </div>
                          </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    

                  </div>
                </div>
              </section>
              
           </div>
        </div>
      </div>
   </body>
</html>
<?php echo $__env->make('front-end/defaut/base', ['title' => 'Projets | ', 'body_class' => 'projet-realisation'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/single-maison.blade.php ENDPATH**/ ?>