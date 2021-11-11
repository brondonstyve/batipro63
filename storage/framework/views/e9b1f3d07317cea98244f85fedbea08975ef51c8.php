


<?php $__env->startSection('css_js'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   <body class="service-page-detail ">
      <div class="container-main-bloc">
        <div class="container flex">
           <div class="container-main">
              <section class="container-banner" style="background-image:url(<?php echo e(asset('/front-end/assets/img/logement-collectif.jpg')); ?>)">
                <div class="container">
                  <div class="inner-container">
                      <div class="content-title-banner">
                        <h1>Maçonnerie Générale</h1>
                        <div class="content-subtitle">
                          <a class="active-sub" href="<?php echo e(route('aboutus')); ?> ">Présentation</a>
                          <a href=" <?php echo e(route('projet-front')); ?> ">Maisons</a>
                          <a href="<?php echo e(route('terrain-front')); ?> ">Terrains</a>
                          <a href="<?php echo e(route('service-front')); ?> ">Nos conseils</a>
                        </div>
                      </div>
                  </div>
                </div>
              </section>



              
              
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('projet-mg')->html();
} elseif ($_instance->childHasBeenRendered('55DhJCA')) {
    $componentId = $_instance->getRenderedChildComponentId('55DhJCA');
    $componentTag = $_instance->getRenderedChildComponentTagName('55DhJCA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('55DhJCA');
} else {
    $response = \Livewire\Livewire::mount('projet-mg');
    $html = $response->html();
    $_instance->logRenderedChild('55DhJCA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
              



           </div>
        </div>
      </div>
   </body>
</html>

<?php echo $__env->make('front-end/defaut/base', ['title' => 'Projets | ', 'body_class' => 'projet-realisation'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/mg.blade.php ENDPATH**/ ?>