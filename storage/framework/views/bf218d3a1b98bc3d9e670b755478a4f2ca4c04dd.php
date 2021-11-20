<?php $__env->startSection('css_js'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="container-banner" style="background-image:url(<?php echo e(asset('/front-end/assets/img/logement-collectif.jpg')); ?>)">
  <div class="container">
    <div class="inner-container">
        <div class="content-title-banner">
          <h1>Projets</h1>
        </div>
    </div>
  </div>
</section>



<section class="container-maison-terrain" id="container-intro-projets">
  <div class="container ">
    <div class="left-bloc-text">
      <div class="content-text-up">
        <div class="header-title">
          <?php if($infos): ?>
          <h3 class="green"><?php echo e($infos->titre); ?></h3>
          <h4><?php echo e($infos->description); ?></h4>
          <?php else: ?>
          <h3 class="green">sur le territoire français</h3>
          <h4>Nous avons au fil des années su imposer des oeuvres architecturales de classe mondiale</h4>
          <?php endif; ?>
          
        </div>
      </div>
    </div> 




    <?php if(sizeOf($projets)==0): ?>
               
    <div class="left-bloc-text">
       <div class="content-text-up">
         <div class="header-title">
          <h4>Aucun projet enregistré pour le moment.</h4>
         </div>
       </div>
     </div> 
 <?php endif; ?>
    <div class="content-list-projects1">
       <div class="projects-categories filter-options">

         
         <button  data-group="Maison contemporaine">Maison Contemporaine</button>
         <button  data-group="Logement collectif">Logement collectif</button>
         <button  data-group="Maçonnerie générale">Maçonnerie générale</button>
         
                
         
          
       </div>
 

       <div class="content-projects-wrapper1">
        <div id="grid" class="flex my-shuffle-container space-around">
          
        <?php $__currentLoopData = $projets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="content-project-wrapper1 hg-height" data-groups='["<?php if($item->service=='Maison individuelle'): ?><?php echo e('Maison contemporaine'); ?><?php else: ?><?php echo e($item->service); ?><?php endif; ?>","all"]'>
            <div class="project-inner">
              <a href="<?php echo e(route('detailProjet',encrypt($item->id))); ?>">

            
              <img src="<?php echo e(asset('/app/projet/'.$item->img_principale)); ?>" style="width: 100%;height: 300px;">
            

              <div class="inner-overlay">
                 <div class="content-overlay text-center"> 
                    <div class="content-icone-plus"></div>           
                    <div class="title-project">
                       <h3> <?php echo e($item->libelle); ?> </h3>
                    </div>
                    <div class="content-title-category">
                      <?php if($item->service=='Maison individuelle'): ?><?php echo e('Maison contemporaine'); ?><?php else: ?><?php echo e($item->service); ?><?php endif; ?>  
                    </div>
                 </div>
              </div>


        </a>
          </div>
        </div>
  
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
      </div>
      <div class="my-sizer-element"></div>

    </div>





    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
    
<script src='https://unpkg.com/shufflejs@5'></script>
<script  src="<?php echo e(asset('/front-end/assets/js/script.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end/defaut/base', ['title' => 'Projets | ', 'body_class' => 'projet-realisation'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/projets.blade.php ENDPATH**/ ?>