<?php $__env->startSection('css_js'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="container-banner" style="background-image:url(<?php echo e(asset('/front-end/assets/img/logement-collectif.jpg')); ?>)">
  <div class="container">
    <div class="inner-container">
        <div class="content-title-banner">

          <?php if($infos): ?>
          <h1> <?php echo e($infos->titre); ?> </h1>
          <?php else: ?>
          <h1>Maisons Virtuelles</h1>
          <?php endif; ?>
          
        </div>
    </div>
  </div>
</section>
<section class="container-maison-terrain" id="container-intro-maisons">
  <div class="container ">
  
   

   

    <br>
    <br>
    <div  style="text-align: center">
      <div >
        <div > 
          <?php if($infos): ?>
          <h4> <?php echo $infos->description; ?> </h4>
          <?php else: ?>
          <h4>Maisons Virtuelles</h4>
          <?php endif; ?>
        </div>
      </div>
    </div> 

    <div class="containerEmbed">
      <iframe class="responsive-iframe" src="http://preprod2.batipro63.fr/BatiPro%2063%20-%20Web/" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
    </div>
    



  </div>
</section>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
    
<script src='https://unpkg.com/shufflejs@5'></script>
<script  src="<?php echo e(asset('/front-end/assets/js/script.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end/defaut/base', ['title' => 'maisons | ', 'body_class' => 'projet-realisation'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/app/laravel/batipro/resources/views/front-end/maison.blade.php ENDPATH**/ ?>