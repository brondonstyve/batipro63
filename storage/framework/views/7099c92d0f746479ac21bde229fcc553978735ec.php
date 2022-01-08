<?php $__env->startSection('css_js'); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('/front-end/assets/masterslider/style/masterslider.css')); ?>" />
    <!-- MasterSlider default skin -->
    <link rel="stylesheet" href="<?php echo e(asset('/front-end/assets/masterslider/skins/default/style.css')); ?>" />
    <script src="<?php echo e(asset('/front-end/assets/masterslider/masterslider.min.js')); ?>"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
              <section class="container-banner" style="background-color: #0dc5b3;">
                <div class="container">
                  <div class="inner-container">
                      <div class="content-title-banner">
                        <h1>TERRAINS</h1>
                      </div>
                  </div>
                </div>
              </section>
              <section class="container-maison-terrai" id="container-maison-terrain1" >
                <div class="container ">
                  <div class="left-bloc-text">
                    <div class="content-text-up">
                      <div class="header-title">
                        <h4>Vous recherchez un terrain pour votre projet?</h4>
                      </div>
                    </div>
                  </div>
                  <div class="content-form " >

                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('send-mail-terrain')->html();
} elseif ($_instance->childHasBeenRendered('yjnrh1L')) {
    $componentId = $_instance->getRenderedChildComponentId('yjnrh1L');
    $componentTag = $_instance->getRenderedChildComponentTagName('yjnrh1L');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('yjnrh1L');
} else {
    $response = \Livewire\Livewire::mount('send-mail-terrain');
    $html = $response->html();
    $_instance->logRenderedChild('yjnrh1L', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                  </div>

                  
                </div>
              </section>
<section class="container-maison-terrain" id="container-intro-projets">
  <div class="container ">
    

    <br>
    <br>
   
    <div class="content-list-projects ">
      <div class="content-projects-wrapper">
        <div id="grid" class="flex my-shuffle-container space-around">

          <?php $__currentLoopData = $projets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="content-project-wrapper hg-height" data-groups='["all","all"]'
            style="background:url(<?php echo e(asset('/app/terrain/'.$projet->img_principale)); ?>);background-repeat: no-repeat">
            <div class="project-inner">
              <a href="<?php echo e(route('detailTerrain',encrypt($projet->id))); ?>">
                <div class="inner-overlay">
                  <div class="content-overlay">
                    <div class="content-icone-plus"></div>
                    <div class="title-project">
                      <h3> <?php echo e($projet->libelle); ?> </h3>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




        </div>
        <div class="my-sizer-element"></div>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end/defaut/base', ['title' => 'Brochure ','body_class' => 'service-page-detail service-page brochure-page'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/terrains.blade.php ENDPATH**/ ?>