<div>
    <section class="container-banner" >
        <div class="container">
          <div class="inner-container">
              <div class="content-title-banner">
                <h1>Blog</h1>
                <div class="content-subtitle">
                  <?php if(sizeOf($this->domain)>0): ?>
                      
                  <a href="#" class="<?php if($domaine==''): ?> text-success <?php endif; ?>"  wire:click="$set('domaine','')"> Tout</a>
                  <?php endif; ?>
                  <?php $__currentLoopData = $this->domain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <a href="#" class="<?php if($domaine==$dom->domaine): ?> text-success <?php endif; ?>"  wire:click="$set('domaine','<?php echo e($dom->domaine); ?>')"> <?php echo e($dom->domaine.' ('.$dom->nombre.')'); ?> </a>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </div> 
          </div>
        </div>
      </section>
      <section class="container-articles">
        <div class="container ">
          <div class="content-list-projects ">
             <div class="content-articles-wrapper flex space-around">

              <?php if(sizeOf($this->actualite)==0): ?>
                  <div class="text-center">
                    <h2>
                      Aucune actualité pour le moment.
                    </h2>
                  </div>
              <?php else: ?>
              <?php $__currentLoopData = $this->actualite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actua): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <article class="article-wrapper">
                <div class="image-article ">
                  <img src="<?php echo e(asset('/app/actualite/'.$actua->image)); ?>" alt="">
                </div>
                <div class="conent-text-article-wrapper">
                  <div class="category-article green"> <?php echo e($actua->domaine); ?> </div>
                  <h3><?php echo $actua->titre; ?></h3>
                  <p class="text-justify"><?php echo substr($actua->article1,0,255); ?>[...] </p>

                </div>
                <div class="content-anim-elit">
                  <div class="content-date-square">
                    
                      <div class="date- green"><?php echo e(date_format($actua->created_at, 'd-M-Y')); ?></div>
                  </div>
                  <div class="content-lean-more-action ">
                    <div class="content-btn ">
                      <a href=" <?php echo e(route('detailActualite',encrypt($actua->id))); ?> ">En savoir +</a>
                    </div>
                  </div>
                </div>
              </article>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
              

             </div>
          </div>
        </div>
        <div class="content-pagination">
          <?php echo e($this->actualite->links()); ?>

        </div>
      </section>
</div>
<?php /**PATH /home/styve/app/laravel/batipro/resources/views/livewire/front/actus.blade.php ENDPATH**/ ?>