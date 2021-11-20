


<?php $__env->startSection('css_js'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   <body class="service-page-detail ">
      <div class="container-main-bloc">
        <div class="container flex">
           <div class="container-main">
                    <?php if($infos): ?>
                    <?php if($infos->imageEnt): ?>
                <section class="container-banner" style="background-image:url(<?php echo e(asset('/app/maison/'.$infos->imageEnt)); ?>)">
                        
                    <?php else: ?>
                <section class="container-banner" style="background-image:url(<?php echo e(asset('/front-end/assets/img/logement-collectif.jpg')); ?>)">
                        
                    <?php endif; ?>
                <?php else: ?>
                <section class="container-banner" style="background-image:url(<?php echo e(asset('/front-end/assets/img/logement-collectif.jpg')); ?>)">
                    
                <?php endif; ?>                <div class="container">
                  <div class="inner-container">
                      <div class="content-title-banner">
                        <h1>Maçonnerie Générale</h1>
                        <div class="content-subtitle">
                          <a class="active-sub" href="<?php echo e(route('aboutus')); ?> ">Présentation</a>
                        </div>
                      </div>
                  </div>
                </div>
              </section>



              
              
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('projet-mg')->html();
} elseif ($_instance->childHasBeenRendered('YAukj3g')) {
    $componentId = $_instance->getRenderedChildComponentId('YAukj3g');
    $componentTag = $_instance->getRenderedChildComponentTagName('YAukj3g');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('YAukj3g');
} else {
    $response = \Livewire\Livewire::mount('projet-mg');
    $html = $response->html();
    $_instance->logRenderedChild('YAukj3g', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
              



           </div>
        </div>
      </div>
   </body>
</html>

<?php echo $__env->make('front-end/defaut/base', ['title' => 'Projets | ', 'body_class' => 'projet-realisation'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/mg.blade.php ENDPATH**/ ?>