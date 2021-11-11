<div>
    

    <div class="row">

            
        <?php if($showSuccesNotification): ?>
        <div
            class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
            <span
                class="alert-text text-white"><?php echo e($message); ?></span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        <?php endif; ?>

        <?php if($showErrorNotification): ?>
        <div
            class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
            <span
                class="alert-text text-white"><?php echo e($message); ?></span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        <?php endif; ?>

        



         <h3 for="">Bloc des témoignage(s) de la page</h3>

          <div class="col-md-7 mt-4">
              <div class="card">
                  <div class="card-header pb-0 px-3">
                      <h6 class="mb-0">Gestion des témoignages de page</h6>
                  </div>
                  <div class="card-body pt-4 p-3">
                      <ul class="list-group">
                        
                        <?php if(sizeOf($this->temoignages)==0): ?>
                        <div
                            class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span
                                class="alert-text text-white"><?php echo __('Aucun témoignage enregistré pour le moment. <br> &nbsp;&nbsp;&nbsp; Veuillez enregistrer une Nouveau témoignage dans le formulaire à droite.'); ?></span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                        <?php else: ?>
                            
                        <?php endif; ?>
                        <?php $__currentLoopData = $this->temoignages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$temoignage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($supp==$temoignage->id): ?>
                        <li class="list-group-item col-md-12 border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg" wire:model='supp'>
                            <div class="d-flex  flex-column text-justify">
                               <h4 class="mb-3 text-sm alert alert-danger text-white text-center"><i class="fa fa-warning" aria-hidden="true"></i>  Confirmation de suppression de témoignage <?php echo e($temoignage->titre); ?></h4>
                                <span class="mb-2 text-xs">La suppression de ce témoignage engendrera automatiquement la suppression de ce dernier. 
                                    <br>
                                Cliquez sur le bouton ci dessous si vous souhaitez continuer la suppression.
                                </span>
                               <div class="mx-auto">
                                   <button class="btn btn-danger" wire:click='delete(<?php echo e($temoignage->id); ?>)'>
                                      Confirmer
                                   </button>

                                   <button class="btn btn-success" wire:click="$set('supp',-1)">
                                    Annuler
                                 </button>
                               </div>
                            </div>
                        </li>
                        <?php else: ?>
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                            <div class="d-flex flex-column col-md-9 text-justify">
                                <h4 class="mb-3 text-sm">Auteur &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo e($temoignage->auteur); ?></h4>
                                <span class="mb-2 text-xs">Description   &nbsp;&nbsp;&nbsp;&nbsp;: <span class="text-dark ms-2 font-weight-bold"><?php echo e($temoignage->description); ?> </span></span>
                                
                            </div>
                            <div class="ms-auto">
                                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;" wire:click="$set('supp',<?php echo e($temoignage->id); ?>)"><i class="far fa-trash-alt me-2" aria-hidden="true"></i>Supprimer</a>
                                
                                <a class="btn btn-link text-dark text-gradient px-3 mb-0" href="javascript:;" wire:click="update(<?php echo e($temoignage->id); ?>)"><i class="fas fa-pencil-alt text-dark  me-2" aria-hidden="true"></i>Voir / Modifier</a>
                                
                            </div>
                        </li>
                        <?php endif; ?>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                      </ul>
                  </div>
              </div>
          </div>
          
          <div class="col-md-5 mt-4 mx-auto">
              <div class="card h-100 mb-4">
                  <div class="card-header pb-0 px-3">
                      <div class="row">
                          <div class="col-md-12">
                              <h6 class="mb-0">Nouveau témoignage / Modification des témoignages</h6>
                          </div>
                      </div>
                  </div>
                  <div class="card-body pt-4 p-3">
                    <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="user-name" class="form-control-label">Auteur</label>
                                <div class="">
                                    <input wire:model.lazy="temoignage.auteur" class="form-control" type="text" placeholder="Titre de l'témoignage" id="user-name" required>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="about">Titre du témoignage</label>
                                <div class="">
                                    <textarea class="form-control" wire:model.lazy="temoignage.description" id="about" rows="5" placeholder="Description de l'témoignage" ></textarea>
                                </div>
                             </div>


                                     <div class="form-group">
                                        <label for="user.location" class="form-control-label">Libellé du lien</label>
                                        <div class="">
                                            <input wire:model.lazy="temoignage.lien" class="form-control" type="text" placeholder="Libellé du lien" id="name" required>
                                        </div>
                                    </div>
        
                        </div>

                      
                        <br>
                                
                            <?php if($showSuccesNotification): ?>
                            <div
                                class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
                                <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                                <span
                                    class="alert-text text-white"><?php echo e($message); ?></span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                            </div>
                            <?php endif; ?>
                    
                            <?php if($showErrorNotification): ?>
                            <div
                                class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                                <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                                <span
                                    class="alert-text text-white"><?php echo e($message); ?></span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                            </div>
                            <?php endif; ?>
                   
                <div class="d-flex justify-content-end">
                    
                    <?php if($modification!=null): ?>
                      
                    <input type="button" value="Annuler" class="btn bg-gradient-danger btn-md mt-4 mb-4 mr-" wire:click='annuler()'>
                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" >Enregistrer les modification</button>
                    
                    <?php else: ?>                            
                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" >Enregistrer</button>
                    
                    <?php endif; ?>
                </div>
                    </form>
    
                </div>
              </div>
          </div>

          <form wire:submit.prevent='save_tPage()' class="col-md-11 mx-auto">
              <div class="row">

                <?php if($showSuccesNotification1): ?>
                        <div
                            class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span
                                class="alert-text text-white"><?php echo e($message); ?></span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                        <?php endif; ?>

                        <?php if($showErrorNotification1): ?>
                        <div
                            class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span
                                class="alert-text text-white"><?php echo e($message); ?></span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                        <?php endif; ?>

          <h3 for="">Entête du front end</h3>

          <div class="col-md-12">
            <div class="form-group">
                <label for="temoignage-name" class="form-control-label">Titre </label>
                <div class="">
                    <input wire:model.lazy="tpage.titre" class="form-control" type="text" required>
                </div>
             </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="temoignage-name" class="form-control-label">Description en dessus des témoignages</label>
                <div class="">
                    <textarea name="" id="" rows="5" wire:model.lazy="tpage.description" class="form-control" required></textarea>
                </div>
             </div>
        </div>



                                </div>
                            </div>
                                  
                            <br>
                            
                                <div class="d-flex justify-content-end">
    
                                  <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Enregistrer</button>
                                  
                                </div>
                            </div>
                            </form>
      </div>


      
    

</div>
<?php /**PATH /home/styve/app/laravel/batipro/resources/views/livewire/temoignage.blade.php ENDPATH**/ ?>