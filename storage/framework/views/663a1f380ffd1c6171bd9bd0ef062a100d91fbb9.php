


<?php $__env->startSection('css_js'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   <body class="service-page-detail service-page">
      <div class="container-main-bloc">
        <div class="container flex">
           <div class="container-main">
              <section class="container-banner" style="background-image:url(<?php echo e(asset('/front-end/assets/img/logement-collectif.jpg')); ?>)">
                <div class="container">
                  <div class="inner-container">
                      <div class="content-title-banner">
                        <h1>Maisons Contemporaines</h1>
                        <div class="content-subtitle">
                          <a class="active-sub" href="#">Présentation</a>
                          <a href="<?php echo e(route('service-front')); ?>">Notre approche</a>
                          <a href="<?php echo e(route('service-front')); ?>">Nos conseils</a>
                        </div>
                      </div>
                  </div>
                </div>
              </section>
              <section class="container-maison-terrain" id="container-maison-terrain">
                <div class="container ">
                  <div class="left-bloc-text">
                    <div class="content-text-up">
                      <div class="header-title">
                        <?php if($infos): ?>
                        <h3 class="green"> <?php echo e($infos->titre); ?> </h3>

                        <?php else: ?>
                        <h3 class="green">Bâtiment d'habitation</h3>
                            
                        <?php endif; ?>

                        <?php if($infos): ?>
                        <h4> <?php echo e($infos->description); ?> </h4>

                        <?php else: ?>
                        <h4>Batipro63, spécialiste des Maison contemporaines, vous propose des solutions personnaisées et adaptées </h4>
                        
                        <?php endif; ?>
                        <p>Pourquoi construire votre maison avec Batipro63 ?</p>
                      </div>
                    </div>
                    <div class="content-bloc-image">
                      <img src="<?php echo e(asset('/front-end/assets/img/mc.jpg')); ?>" alt="">
                    </div>
                  </div>
                </div>
              </section>
              <section class="container-liste-lc">
                <div class="container ">
                  <?php if(sizeOf($blog)==0): ?>
                  <div class="content-texte-- ">
                    <div class="left-bloc-text">
                      <div class="content-text-up">
                        <div class="header-title">
                          <h4>Aucun élément concernant les maisons contemporaines enregistré pour le moment. </h4>
                        </div>
                      </div> 
                    </div>

                  </div>
                  <?php else: ?>
                  <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="lc-item-content flex between">
                    <div class="img-item-">
                      <img src="<?php echo e(asset('/app/actualite/'.$item->image)); ?>" alt="">
                    </div>
                    <div class="content-texte-- ">
                      <div class="left-bloc-text">
                        <div class="content-text-up">
                          <div class="header-title">
                            <h4> <?php echo e($item->titre); ?> </h4>
                          </div>
                          <div class="content-bloc-description add-square">
                            <p class="jost-style jost-style-100"><?php echo substr($item->article1,0,255) .'[...]'; ?></p>
                            <div class="content-link ">
                              <?php if($item->desc_auteur==null): ?>
                              <a href="#!">
                                  
                              <?php else: ?>
                              <a href="<?php echo e($item->desc_auteur); ?>">
                              <?php endif; ?>
                                <span><?php echo e($item->auteur); ?></span>
                                <img src="<?php echo e(asset('/front-end/assets/img/right-arrow.png')); ?>" alt="">
                              </a>
                            </div>
                          </div>
                        </div> 
                      </div>

                    </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
                  

                </div>
              </section>

              <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('projet3')->html();
} elseif ($_instance->childHasBeenRendered('BXkRBRu')) {
    $componentId = $_instance->getRenderedChildComponentId('BXkRBRu');
    $componentTag = $_instance->getRenderedChildComponentTagName('BXkRBRu');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('BXkRBRu');
} else {
    $response = \Livewire\Livewire::mount('projet3');
    $html = $response->html();
    $_instance->logRenderedChild('BXkRBRu', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

              <?php if($infos): ?>
              <?php if($infos->image): ?>
              <section class="container-cta container-facebook-testimonials" style="background-image:url(<?php echo e(asset('/app/maison/'.$infos->image)); ?>)">

              <?php else: ?>
              <section class="container-cta container-facebook-testimonials" style="background-image:url(<?php echo e(asset('/front-end/assets/img/bg-cta.jpg')); ?>)">

              <?php endif; ?>
                  
              <?php else: ?>
              <section class="container-cta container-facebook-testimonials" style="background-image:url(<?php echo e(asset('/front-end/assets/img/bg-cta.jpg')); ?>)">

                  
              <?php endif; ?>

              

                <div class="container ">
                    <div class="content-text-up">
                      <div class="header-title">
                        <h4>Démarrons ensemble votre maison individuelle</h4>
                        <div class="add-square"><img src="<?php echo e(asset('/front-end/assets/img/square2.png')); ?>" alt=""></div>
                      </div>
                    </div>
                    <div class="content-btn-action ">
                      <a href=" <?php echo e(route('contact')); ?> ">Commencez ici!</a>
                    </div>
                </div>
              </section>


              


           </div>
        </div>
      </div>
   </body>
</html>

<?php echo $__env->make('front-end/defaut/base', ['title' => 'Projets | ', 'body_class' => 'projet-realisation'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/app/laravel/batipro/resources/views/front-end/mc.blade.php ENDPATH**/ ?>