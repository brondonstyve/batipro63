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
          <h1>Témoignages</h1>
              
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
          <h2> <?php echo e($infos->description); ?> </h2>
              
          <?php else: ?>
          <h2>Parcourez nos différents témoignages ici.</h2>

              
          <?php endif; ?>
        </div>
      </div>
    </div> 
    <br>
    <br>

   

          
        <div class="flex">
              <?php if(sizeOf($temoignage)==0): ?>
                  <h1>Aucun témoignage enregistré pour le moment.</h1>
                  
              <?php else: ?>
                  <?php $__currentLoopData = $temoignage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="" style="margin-right: 1%">
                    <div class="" >
                        <iframe title="<?php echo e($item->description); ?>" src="<?php echo e($item->lien); ?>" width="500" height="400" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                    </div>
                    <div class="wpb_wrapper">
                      <p><strong><?php echo e($item->auteur); ?></strong>
                        <br>
                        <br>
                       <?php echo e($item->description); ?>

                    </p>
                
                    </div>
                    
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
            


           

            
        
      </div>
    

    <br>
    <br>


    



  </div>
</section>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
    
<script src='https://unpkg.com/shufflejs@5'></script>
<script  src="<?php echo e(asset('/front-end/assets/js/script.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end/defaut/base', ['title' => 'maisons | ', 'body_class' => 'projet-realisation'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/app/laravel/batipro/resources/views/front-end/temoignage.blade.php ENDPATH**/ ?>