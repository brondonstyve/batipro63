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
          
        </div>
    </div>
  </div>
</section>


<section class="container-maison-terrain" id="container-intro-projets">
  <div class="container ">
    <?php if(sizeOf($temoignage)==0): ?>
               
    <div class="left-bloc-text">
       <div class="content-text-up">
         <div class="header-title">
          <h4>Aucun témoignage enregistré pour le moment.</h4>
         </div>
       </div>
     </div> 
 <?php endif; ?>

 <div class="left-bloc-text" data-groups='["t"]'>
  <div class="content-text-up">
    <div class="header-title">
      <?php if($infos): ?>
      <h3 class="green"><?php echo e($infos->titre); ?></h3>
      <h4><?php echo e($infos->description); ?></h4>
      
      <?php endif; ?>
      
    </div>
  </div>
</div> 
    <div class="content-list-projects1">

      <div class="projects-categories filter-options">

        
        <button  data-group="p">Présentation</button>
        <button  data-group="t">Témoignage</button>
        
               
        
         
      </div>

       <div class="content-projects-wrapper1">
        <div id="grid" class="flex my-shuffle-container space-around">
          
        <?php $__currentLoopData = $temoignage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($item->type=='Temoignage'): ?> 
        <div class="content-project-wrapper1 hg-height" data-groups='["t"]'>
          <div class="project-inner">
          
            <iframe title="<?php echo e($item->description); ?>" src="<?php echo e($item->lien); ?>" class="frame" style="width: 100%;height: 300px;" width="400" height="300" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>

               <div class="content-overlay">          
                  <div class="title-project">
                     <h3> <?php echo e($item->auteur); ?> </h3>
                  </div>
                  <div class="content-title-category">
                    <?php echo e($item->description); ?>

                  </div>
               </div>

        </div>
      </div>

      <?php else: ?>
      <div class="content-project-wrapper1 hg-height" data-groups='["p"]'>
        <div class="project-inner">
        
          <iframe title="<?php echo e($item->description); ?>" src="<?php echo e($item->lien); ?>" class="frame" style="width: 100%;height: 300px;" width="400" height="300" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>

             <div class="content-overlay">          
                <div class="title-project">
                   <h3> <?php echo e($item->auteur); ?> </h3>
                </div>
                <div class="content-title-category">
                  <?php echo e($item->description); ?>

                </div>
             </div>

      </div>
    </div>
        <?php endif; ?>
         
  
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
      </div>
      <div class="my-sizer-element"></div>

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
<script src='https://unpkg.com/shufflejs@5'></script>
<script  src="<?php echo e(asset('/front-end/assets/js/script.js')); ?>"></script>
<?php $__env->startSection('script'); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end/defaut/base', ['title' => 'maisons | ', 'body_class' => 'projet-realisation'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/temoignage.blade.php ENDPATH**/ ?>