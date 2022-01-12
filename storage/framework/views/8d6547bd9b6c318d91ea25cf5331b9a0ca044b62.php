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
                        <h4>Téléchargez gratuitement notre brochure</h4>
                      </div>
                    </div>
                  </div>
                  <div class="content-form " >
                    <p>Remplissez les informations  ci-dessous et téléchargez la brochure
                    </p>

                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('brochure')->html();
} elseif ($_instance->childHasBeenRendered('Q5DMChM')) {
    $componentId = $_instance->getRenderedChildComponentId('Q5DMChM');
    $componentTag = $_instance->getRenderedChildComponentTagName('Q5DMChM');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Q5DMChM');
} else {
    $response = \Livewire\Livewire::mount('brochure');
    $html = $response->html();
    $_instance->logRenderedChild('Q5DMChM', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                  </div>
                </div>
              </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end/defaut/base', ['title' => 'Brochure ','body_class' => 'service-page-detail service-page brochure-page'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/brochure.blade.php ENDPATH**/ ?>