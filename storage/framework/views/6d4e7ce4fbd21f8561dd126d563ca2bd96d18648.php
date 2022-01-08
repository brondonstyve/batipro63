<div class="content-right-article ">
    <div class="cntent-search bloc-article">
      <form class="" action="" method="get">
        <input type="text" wire:model.debounce.1s="search" placeholder="Rechercher" required>
        
      </form>
    </div>

    <div class="content-other-article bloc-article">
      <div class="head-bloc-article ">
        <h4>Récemment publié</h4>
      </div>
      <?php if(sizeOf($this->actualites)==0): ?>
      <div class="content-list-other-article  align-center">
        <?php if($search): ?>
        <p>Resultat de recherche pour "<?php echo e($search); ?>"</p> 
       <?php endif; ?>
        <div class="other-article flex align-center">
          <h5>Auncun article n'inclut ce titre ou domaine pour le moment.</h5>
        </div>
    </a>
      </div>
      <?php else: ?>
        
      <?php if($search): ?>
      <p>Resultat de recherche pour "<?php echo e($search); ?>"</p> 
     <?php endif; ?>
      <?php $__currentLoopData = $this->actualites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actualite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
      <div class="content-list-other-article  align-center">
          <a href=" <?php echo e(route('detailActualite',encrypt($actualite->id))); ?> ">
        <div class="other-article flex align-center">
          <div class="img-article ">
            <img src="<?php echo e(asset('/app/actualite/'.$actualite->image)); ?>" alt="" style="max-height: 80px;max-width: 100px;">
          </div>
          <div class="cntent-orther-article ">
            <p> 
            <?php echo substr($actualite->titre,0,50).'...'; ?>    
            </p>
          </div>
        </div>
    </a>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
      
    </div>

    <div class="content-categories-article ">
      <div class="head-bloc-article ">
        <h4>Catégories</h4>
      </div>

      <div class="content-list-categories">
        <ul>
            <?php $__currentLoopData = $this->domaines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href=" <?php echo e(route('actualite-front')); ?> " class=""> <?php echo e($item->domaine.'  ('.($item->nombre).')'); ?> </a></li>      
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    </div>
  </div><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/livewire/recherche.blade.php ENDPATH**/ ?>