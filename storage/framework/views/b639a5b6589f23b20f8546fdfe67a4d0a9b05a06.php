<?php $__env->startSection('css_js'); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('/front-end/assets/masterslider/style/masterslider.css')); ?>" />
    <!-- MasterSlider default skin -->
    <link rel="stylesheet" href="<?php echo e(asset('/front-end/assets/masterslider/skins/default/style.css')); ?>" />
    <script src="<?php echo e(asset('/front-end/assets/masterslider/masterslider.min.js')); ?>"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
              <section class="container-banner" style="background-image:url(<?php echo e(asset('/front-end/assets/img/bg-brochure.jpg')); ?>)">
                <div class="container">
                  <div class="inner-container">
                      <div class="content-title-banner">
                        <h1>Brochure</h1>
                      </div>
                  </div>
                </div>
              </section>
              <section class="container-maison-terrain" id="container-maison-terrain" >
                <div class="container ">
                  <div class="left-bloc-text">
                    <div class="content-text-up">
                      <div class="header-title">
                        <h3 class="green">Plans & maisons</h3>
                        <h4>Gagnez du temps en téléchargeant gratuitement notre brochure des maisons</h4>
                      </div>
                    </div>
                  </div>
                  <div class="content-form " >
                    <p>En un clic, remplissez les informations demandées ci-dessous et débloquez le téléchargement du catalogue en pdf :</p>

                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('brochure')->html();
} elseif ($_instance->childHasBeenRendered('Kr1DyLg')) {
    $componentId = $_instance->getRenderedChildComponentId('Kr1DyLg');
    $componentTag = $_instance->getRenderedChildComponentTagName('Kr1DyLg');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Kr1DyLg');
} else {
    $response = \Livewire\Livewire::mount('brochure');
    $html = $response->html();
    $_instance->logRenderedChild('Kr1DyLg', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                  </div>
                </div>
              </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end/defaut/base', ['title' => 'Brochure ','body_class' => 'service-page-detail service-page brochure-page'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/app/laravel/batipro/resources/views/front-end/brochure.blade.php ENDPATH**/ ?>