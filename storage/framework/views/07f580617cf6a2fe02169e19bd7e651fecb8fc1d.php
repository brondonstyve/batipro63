<?php $__env->startSection('css_js'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="container-banner" style="background-image:url(<?php echo e(asset('/front-end/assets/img/logement-collectif.jpg')); ?>)">
  <div class="container">
    <div class="inner-container">
        <div class="content-title-banner">

          <?php if($infos): ?>
          <h1> <?php echo e($infos->titreEnt); ?> </h1>
          <?php else: ?>
          <h1>Vidéos</h1>
          <?php endif; ?>
          
          <div class="content-subtitle filter-options">  
            <a href="#"  onclick="present()" id="present"> PRéSENTATIONS </a>
            <a href="#"  onclick="temoignage()" id='temoignage' > Témoignages </a>
         </div>
        </div>
    </div>
  </div>
</section>



<section class="container-maison-terrain" id="container-intro-maisons">
  <div class="container ">
    <br>
    <br>

    <div id="p">
      <div  class="text-center">
        <div >
          <div >
            <?php if($infos): ?>
          <h3 class="green" style="text-transform: uppercase"> <?php echo e($infos->titre1); ?> </h3>
          <h1> <?php echo e($infos->description1); ?> </h1>
              
          <?php else: ?>
          <h3 class="green" style="text-transform: uppercase"> Présentation </h3>
          <h1>Parcourez nos différentes presentations vidéo ici.</h1>

              
          <?php endif; ?>
          </div>
        </div>
      </div> 
      <br>


      <div class="flex" style=" padding: 30px" > 
        <?php if(sizeOf($temoignage)==0): ?>
            <h1>Aucune presentation enregistrée pour le moment.</h1>
            
        <?php else: ?>
            <?php $__currentLoopData = $temoignage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($item->type=='Presentation'): ?>
                  <div class="" style="margin-right: 1%">
                    <div class="" >
                        <iframe title="<?php echo e($item->description); ?>" src="<?php echo e($item->lien); ?>" width="560" height="400" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                    </div>
                    <div class="wpb_wrapper">
                      <p><strong><?php echo e($item->auteur); ?></strong>
                        <br>
                        <br>
                       <?php echo e($item->description); ?>

                    </p>
                
                    </div>
                    
                  </div>
                  <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
</div>

</div>


  <div id="t">

    <div  class="text-center">
      <div >
        <div >
          

          <br>
          <?php if($infos): ?>
          <h3 class="green" style="text-transform: uppercase"> <?php echo e($infos->titre); ?> </h3>
          <h1> <?php echo e($infos->description); ?> </h1>
              
          <?php else: ?>
          <h3 class="green" style="text-transform: uppercase"> Témoignages </h3>
          <h1>Parcourez nos différents témoignages vidéo ici.</h1>

              
          <?php endif; ?>
        </div>
      </div>
    </div> 
    <br>

   

          
        <div class="flex" style=" padding: 30px"> 
              <?php if(sizeOf($temoignage)==0): ?>
                  <h1>Aucun témoignage enregistré pour le moment.</h1>
                  
              <?php else: ?>
                  <?php $__currentLoopData = $temoignage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($item->type=='Temoignage'): ?>
                  <div class="" style="margin-right: 1%">
                    <div class="" >
                        <iframe title="<?php echo e($item->description); ?>" src="<?php echo e($item->lien); ?>" width="560" height="400" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                    </div>
                    <div class="wpb_wrapper">
                      <p><strong><?php echo e($item->auteur); ?></strong>
                        <br>
                        <br>
                       <?php echo e($item->description); ?>

                    </p>
                
                    </div>
                    
                  </div>
                  <?php endif; ?>
                 
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
      </div>
    </div>



    



  </div>
</section>

<?php $__env->stopSection(); ?>

<script src="<?php echo e(asset('/front-end/assets/js/jquery-1.8.2.min.js')); ?>"></script>

<script>

$( document ).ready(function() {
  jQuery('#t').hide();
    jQuery('#p').show();
    jQuery('#present').addClass("activation_l");
    jQuery('#temoignage').removeClass("activation_l");
});


  function present(){
    jQuery('#t').hide();
    jQuery('#p').show();
    jQuery('#present').addClass("activation_l");
    jQuery('#temoignage').removeClass("activation_l");
  };

  function temoignage(){
    jQuery('#p').hide();
    jQuery('#t').show();
    jQuery('#temoignage').addClass("activation_l");
    jQuery('#present').removeClass("activation_l");
  }


</script>

<?php $__env->startSection('script'); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end/defaut/base', ['title' => 'maisons | ', 'body_class' => 'projet-realisation'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/temoignage.blade.php ENDPATH**/ ?>