<?php $__env->startSection('css_js'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="container-banner" style="background-image:url(<?php echo e(asset('/front-end/assets/img/logement-collectif.jpg')); ?>)">
  <div class="container">
    <div class="inner-container">
        <div class="content-title-banner">

          <h1>Maitrise d'œuvre</h1>
          
        </div>
    </div>
  </div>
</section>


<iframe title="maitrise d'oeuvre" src="<?php echo e(route('etape')); ?>" width="100%" height="1100" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>





<?php $__env->stopSection(); ?>

<script src="<?php echo e(asset('/front-end/assets/js/jquery-1.8.2.min.js')); ?>"></script>



<?php $__env->startSection('script'); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end/defaut/base', ['title' => 'maisons | ', 'body_class' => 'projet-realisation'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/maitriseOeuvre.blade.php ENDPATH**/ ?>