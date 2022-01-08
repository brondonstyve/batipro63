<div>


  <section class="container-maison-terrain" id="container-intro-projets">
    <div class="container ">
      <?php if(sizeOf($this->projets)==0): ?>

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

          <button data-group="Maçonnerie générale">Maçonnerie Maison</button>
          <button data-group="Logement collectif">Maçonnerie Logement collectif</button>
        

        </div>


        <div class="content-projects-wrapper1">
          <div id="grid" class="flex my-shuffle-container space-around">

            <?php $__currentLoopData = $this->projets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$projet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            

            <div class="content-project-wrapper1 hg-height" data-groups='["<?php if($projet->service==' Maison
              individuelle'): ?><?php echo e('Maison contemporaine'); ?><?php else: ?><?php echo e($projet->service); ?><?php endif; ?>","all"]'
              style="background:url(../app/projet/<?php echo e($projet->img_principale); ?>);background-size:
              cover;background-position: center;background-repeat: no-repeat;height:320px">
              <div class="project-inner">
                <a href="<?php echo e(route('detailProjet',encrypt($projet->id))); ?>">

                  <div class="inner-overlay1">
                    <div class="content-overlay1">
                      <div class="content-icone-plus"></div>
                      <div class="title-project">
                        <h3> <?php echo e($projet->libelle); ?> </h3>
                      </div>
                      <div class="content-title-category"><?php echo e($projet->service); ?></div>
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





</div>
<div class="content-btn btn-black"><a href=" <?php echo e(route('projet-front')); ?> ">voir toutes les maisons</a></div><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/livewire/projet-mg.blade.php ENDPATH**/ ?>