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
                        <h1>Formulaire de contact</h1>
                      </div>
                  </div>
                </div>
              </section>
              <section class="container-maison-terrai" id="container-maison-terrain1" >
                <div class="container ">
                  <div class="left-bloc-text">
                    <div class="content-text-up">
                      <div class="header-title">
                        <h4>Envoyez nous un message à travers ce formulaire.</h4>
                      </div>
                    </div>
                  </div>
                  <div class="content-form " >

                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('send-mail')->html();
} elseif ($_instance->childHasBeenRendered('Lhk8bYS')) {
    $componentId = $_instance->getRenderedChildComponentId('Lhk8bYS');
    $componentTag = $_instance->getRenderedChildComponentTagName('Lhk8bYS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Lhk8bYS');
} else {
    $response = \Livewire\Livewire::mount('send-mail');
    $html = $response->html();
    $_instance->logRenderedChild('Lhk8bYS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                  </div>

                  
                </div>
              </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end/defaut/base', ['title' => 'Brochure ','body_class' => 'service-page-detail service-page brochure-page'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/contact.blade.php ENDPATH**/ ?>