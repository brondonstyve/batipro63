<?php $__env->startSection('css_js'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    
<?php $__env->stopSection(); ?>


    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="<?php echo e(asset('/visuel/magnific-popup.css')); ?>">

   

        <style>
          .image-source-link {
            color: #98C3D1;
          }

          .mfp-with-zoom .mfp-container,
          .mfp-with-zoom.mfp-bg {
            opacity: 0;
            -webkit-backface-visibility: hidden;
            /* ideally, transition speed should match zoom duration */
            -webkit-transition: all 0.3s ease-out; 
            -moz-transition: all 0.3s ease-out; 
            -o-transition: all 0.3s ease-out; 
            transition: all 0.3s ease-out;
          }

          .mfp-with-zoom.mfp-ready .mfp-container {
              opacity: 1;
          }
          .mfp-with-zoom.mfp-ready.mfp-bg {
              opacity: 0.8;
          }

          .mfp-with-zoom.mfp-removing .mfp-container, 
          .mfp-with-zoom.mfp-removing.mfp-bg {
            opacity: 0;
          }
        </style>


<?php $__env->startSection('content'); ?>
   <body class="about-us-page single-projet ">
      <div class="container-main-bloc">
        <div class="container flex">
            
           <div class="container-main">

              <section class="container-banner" style="background-image:url(<?php echo e(asset('/app/projet/'.$projet->img_principale)); ?>);">
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
                         <h4><?php echo e($projet->libelle); ?></h4>
                      </div>
                      <div class="content-bloc-description add-square">
                         <p class="jost-style jost-style-100"><?php echo $projet->description; ?> </p>
                         <p  class="jost-style jost-style-100"></p>
                      </div>
                   </div>
                   
                   <div class="content-info-cta ">

                   

                     <div class="logo-">
                      <section class="copyright1" style="min-width: 100%">
                        <div class="container flex space-around">
                          <?php if($precedent): ?>
                          <a href="<?php echo e(route('detailProjet',encrypt($precedent->id))); ?>" title="<?php echo e($precedent->libelle); ?>" style="margin-bottom: 10px">
                            <div style="background-color: #5aa39c; max-width: 100px;padding-left: 10px;padding-right: 10px"> 
                            <img src="<?php echo e(asset('front-end/assets/img/arrowb.png')); ?>" alt="">
                              
                            </div>
                            
                          </a>
                          
                          <?php endif; ?>
                          <?php if($suivant): ?>
                          <a href="<?php echo e(route('detailProjet',encrypt($suivant->id))); ?>" title="<?php echo e($suivant->libelle); ?>" >
                            <div style="background-color: #5aa39c; max-width: 100px;padding-left: 10px;padding-right: 10px"> 
                            <img src="<?php echo e(asset('front-end/assets/img/right-arrowb.png')); ?>" alt="">
                            </div>
                            
                          </a>
                          <?php endif; ?>
                        </div>
                      </section>
                      
                       <img src="<?php echo e(asset('/front-end/assets/img/logo-simple.png')); ?>" alt="">
                     </div>
                     <div class="content-info ">
                       <div class="line-info- flex">
                         <span class="green">Année :</span>
                         <span > <?php echo e($projet->annee); ?></span>
                       </div>
                       <div class="line-info- flex">
                         <span class="green">Entreprise :</span>
                         <span > <?php echo e($projet->entreprise); ?></span>
                       </div>
                       <div class="line-info- flex">
                         <span class="green">Lieu :</span>
                         <span > <?php echo e($projet->lieu); ?></span>
                       </div>
                       <div class="line-info- flex">
                         <span class="green">Durée du projet :</span>
                         <span > <?php echo e($projet->duree); ?> semaines</span>
                       </div>
                     </div>

                    
                   </div>
                </div>
             </section>

              <section class="container-realisation-projets">
                <div class="container ">

                    
                  <div class="content-list-real-projet popup-gallery flex">

                    <?php
                        $image=explode('->',$projet->image)
                    ?>
                    
                    <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($key!=0): ?>
                    <a href="<?php echo e('../app/projet/'.$item); ?>" title="<?php echo e($projet->libelle); ?>">
                      <div class="item-projet-wrapper">
                        <div class="content-img" >
                          <img src="<?php echo e(asset('/app/projet/'.$item)); ?>" style="width: 362px;height: 255px;" >
                        </div>
                      </div>
                    </a>
                   
                    <?php endif; ?>
                      
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                </div>
              </section>
                
           </div>
        </div>
      </div>

      <?php $__env->startSection('script'); ?>
      <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"></script>

 <script src="<?php echo e(asset('/visuel/magnific-popup.js')); ?>"></script>
       

      <script type="text/javascript">
        $(document).ready(function() {
          $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
              enabled: true,
              navigateByImgClick: true,
              preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
              tError: '<a href="%url%">The image #%curr%</a> ne parvient pas à charger.',
              titleSrc: function(item) {
                return item.el.attr('title') + '<small>Batipro63</small>';
              }
            }
          });
        });
      </script>
      <?php $__env->stopSection(); ?>
    

   </body>
</html>


<?php echo $__env->make('front-end/defaut/base', ['title' => 'Projets | ', 'body_class' => 'projet-realisation'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/single-projet.blade.php ENDPATH**/ ?>