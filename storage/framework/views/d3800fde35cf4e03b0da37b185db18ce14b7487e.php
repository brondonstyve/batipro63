<div>
    <section class="container-maison">
        <div class="content-btn btn-black"><a href=" <?php echo e(route('projet-front')); ?> ">voir toutes les maisons</a></div>
        <div class="content-liste-maisons flex between">


          <?php if(sizeOf($this->projet)==0): ?>
                <h4>Aucun Projet enregistré pour le moment.</h4>
            <?php else: ?>
            <?php $__currentLoopData = $this->projet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

      </section>
</div>
<?php /**PATH /home/styve/dev/laravel/batipro/resources/views/livewire/projet-mg.blade.php ENDPATH**/ ?>