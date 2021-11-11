<div>
    <section class="container-vente-maisons container-realisation">
        <div class="container ">
          <div class="left-bloc-text">
            <div class="content-text-up">
              <div class="header-title">
                <h3 class="green">Réalisations</h3>
                <?php if(Route::currentRouteName()=='lc'): ?>
                <h4>Voici quelques projets de logements collectifs réalisés récemment </h4>
                    
                <?php else: ?>
                <h4>Voici quelques projets de maisons contemporaines réalisées récemment </h4>
                    
                <?php endif; ?>
                <p>Retrouvez tous les chantiers dans la section  <a href="<?php echo e(route('projet-front')); ?>">projets</a> </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="container-maison">
        <div class="content-btn btn-black"><a href=" <?php echo e(route('projet-front')); ?> ">voir tous les projets</a></div>
        <div class="content-liste-maisons flex between">

          <?php if(sizeOf($this->projets)==0): ?>
              <h4>Aucun Projet enregistré pour le moment.</h4>
          <?php else: ?>
          <?php $__currentLoopData = $this->projets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="item-maison-wrapper">
            <a href='<?php echo e(route("detailProjet",encrypt($item->id))); ?>'>

                    <div class="inner-maisons">
                      <div class="image-maison " style="background-image:url(<?php echo e(asset('/app/projet/'.$item->img_principale)); ?>)">
                        <p>Superficie : <?php echo e($item->superficie); ?> m<sup>2</sup></p>
                      </div>
                    </div>
                    <div class="content-description text-justify">
                        <p><?php echo $item->description; ?></p>
                    </div>
            </a>
          </div>
     
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          <?php endif; ?>
            
            

        </div>
        <br>
        <br>
        
      </section>
</div>
<?php /**PATH /home/styve/app/laravel/batipro/resources/views/livewire/projet3.blade.php ENDPATH**/ ?>