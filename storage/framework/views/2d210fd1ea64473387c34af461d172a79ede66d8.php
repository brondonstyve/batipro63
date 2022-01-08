<div class="container-fluid">
    <div class="card card-body blur shadow-blur">
        <div class="row gx-4">
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
            
        <div class="row" id="#">

              <div class="col-md-12 mt-4">
                  <div class="card h-100 mb-4">
                      <div class="card-header pb-0 px-3">
                          <div class="row">
                              <div class="col-md-12">
                                  <h6 class="mb-0">Nouveau terrain / Modification terrain</h6>
                              </div>
                          </div>
                      </div>
                      <div class="card-body pt-4 p-3">
                        <form wire:submit.prevent="save" action="#" method="POST" role="form text-left" enctype="multipart/form-data">
    
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="terrain-name" class="form-control-label">Titre du terrain</label>
                                        <div class="">
                                            <input wire:model.lazy="terrain.libelle" class="form-control" type="text" required  placeholder="Libellé du terrain" id="terrain-name" required>
                                        </div>
                                        <?php $__errorArgs = ['terrain.libelle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
    
    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="terrain-name" class="form-control-label">Lieu</label>
                                        <div class="">
                                            <input wire:model.lazy="terrain.lieu" class="form-control" type="text" required  placeholder="Lieu du terrain" id="terrain-name" required>
                                        </div>
                                        <?php $__errorArgs = ['terrain.lieu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="terrain-email" class="form-control-label"><?php echo e(__('Superficie du terrain en m²')); ?></label>
                                        <div class="<?php $__errorArgs = ['terrain.superficie'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>border border-danger rounded-3 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                            <input wire:model.lazy="terrain.superficie" class="form-control" type="number"
                                                placeholder="durée de réalisation" id="terrain-email" required>
                                        </div>
                                        <?php $__errorArgs = ['terrain.superficie'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                               

                                <?php if($modification): ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="terrain-name" class="form-control-label">Ajouter un visuel uniquement</label>
                                        <div class="">
                                            <input wire:model="image" class="form-control" type="file" placeholder="Visuel du terrain" id="terrain-name" accept="image/*"> 
                                        </div>

                                        <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image'>
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            Patientez le chargement de l'image...
                                          </button>
                                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e(('Erreur lors du téléchargement')); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <?php if(session()->has('image')): ?> <div class="text-danger"><?php echo e(session()->get('image')); ?></div> <?php endif; ?>
                                    </div>
                                </div>
                                <?php else: ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="terrain-name" class="form-control-label">Visuel</label>
                                        <div class="">
                                            <input wire:model="image" class="form-control" type="file" required  placeholder="Visuel du terrain" id="terrain-name" required accept="image/*" multiple max="2"> 
                                        </div>
                                        <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image'>
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            Patientez le chargement de(s) image(s)...
                                          </button>
                                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e(('Erreur lors du téléchargement')); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <?php if(session()->has('image')): ?> <div class="text-danger"><?php echo e(session()->get('image')); ?></div> <?php endif; ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="terrain-name" class="form-control-label">Disponibilité</label>
                                        <div class="">
                                            <select wire:model="terrain.statut" class="form-control" required>
                                                <option value=""></option>
                                                <option value="1">Disponible</option>
                                                <option value="0">Non Disponible</option>
                                            </select>
                                        </div>
                                        <?php $__errorArgs = ['terrain.statut'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                
    
                                <div class="form-group">
                                    <label for="about">Description</label>
                                    <div class="">
                                        <textarea wire:model.lazy="terrain.description" class="form-control" id="about" rows="7" placeholder="à propos du terrain" required></textarea>
                                    </div>
                                 </div>
                            </div>
    

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

                            <?php if($image!=null): ?>
                                
                            <?php if($modification): ?>
                            <div class="col-12 mt-4">
                                <div class="card mb-4">
                                    <div class="card-header pb-0 p-3">
                                        <h6 class="mb-1">visuel d'ajout de modification</h6>
                                    </div>
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">
                                                            <img src=" <?php echo e($image->temporaryUrl()); ?> " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="col-12 mt-4">
                                <div class="card mb-4">
                                    <div class="card-header pb-0 p-3">
                                        <h6 class="mb-1">Liste des visuels</h6>
                                    </div>
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">
                                                            <img src=" <?php echo e($item->temporaryUrl()); ?> " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                        </a>
                                                    </div>
                                                    <div class="card-body px-1 pb-0">
                                                        <p class="text-gradient text-dark mb-2 text-sm">Visuel <?php echo e($key+1); ?> </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            

                            <?php endif; ?>


                            <?php if($modification==true && !$image): ?>

                                <?php
                                    $image=explode('->',$terrain->image);
                                ?>
                                
                            <div class="col-12 mt-4">
                                <div class="card mb-4">
                                    <div class="card-header pb-0 p-3">
                                        <h6 class="mb-1">Liste des visuels</h6>
                                    </div>
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($key>0): ?>
                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">
                                                            
                                                            <img src="<?php echo e(asset('/app/terrain/'.$img)); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">  
                                                        </a>
                                                        <button type="button" class="btn bg-gradient-danger btn-md mt-4 mb-4" wire:click='removeImg("<?php echo e($img); ?>")'>Enlever</button>

                                                        <?php if($terrain->img_principale!=$img): ?>
                                                             <button type="button" class="btn bg-gradient-primary btn-md mt-4 mb-4" wire:click='definrP("<?php echo e($img); ?>")'>Image Principale</button> 
                                                        <?php endif; ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php endif; ?>
                            
                                
                            <br>
                            <span class="mb-2 text-xs "><span class="text-danger ms-2 font-weight-bold ">
                                S'il vout plait patientez le chargement des images avant de passer à l'enregistrement.    
                            </span></span>
                            
                            <div class="d-flex justify-content-end">
                              <?php if($modification==true): ?>
                                
                              <button type="button" class="btn bg-gradient-danger btn-md mt-4 mb-4 mr-" wire:click='annuler'>Annuler</button>
                              <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" >Enregistrer les modification</button>
                              
                              <?php else: ?>                            
                              <button type="button" class="btn bg-gradient-danger btn-md mt-4 mb-4 mr-" wire:click='annuler'>Annuler</button>

                              <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Enregistrer</button>
                              
                              <?php endif; ?>
                            </div>
                        </form>
        
                    </div>
                  </div>
              </div>
          </div>


          <div class="col-12 mt-4">
            <div class="card mb-4"> 
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-1">Liste des terrains crées</h6>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <?php $__currentLoopData = $this->listProject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php if($supp==$item->id): ?>
                        
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                        <div class="d-flex  flex-column text-justify">
                            <h4 class="mb-3 text-sm alert alert-danger text-white text-center"><i class="fa fa-warning" aria-hidden="true"></i>  Confirmation de suppression de <?php echo e($terrain->libelle); ?></h4>
                             <span class="mb-2 text-xs">La suppression de ce terrain sera irrevoquable et engendrera automatiquement la suppression de toutes les images liées à ce dernier. 
                                 <br>
                             Cliquez sur le bouton en sessous si vous souhaitez continuer la suppression.
                             </span>
                            <div class="mx-auto">
                                <button class="btn btn-danger" wire:click='delete(<?php echo e($item->id); ?>)'>
                                   Confirmer
                                </button>

                                <button class="btn btn-success" wire:click="$set('supp',<?php echo e(null); ?>)">
                                 Annuler
                              </button>
                            </div>
                         </div>
                         </div>
                        </div>



                        <?php else: ?>

                        
                        <?php
                        $image=explode('->',$item->image);
                        ?>
                        

                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">

                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="<?php if($urlSeeImage!=null && $item->id==$idVue ): ?><?php echo e(asset('/app/terrain/'.$urlSeeImage)); ?><?php else: ?><?php echo e(asset('/app/terrain/'.$image[1])); ?><?php endif; ?>" alt="img-blur-shadow"
                                            class="img-fluid shadow border-radius-xl">
                                    </a>

                                </div>
                                <div class="card-body px-1 pb-0">
                                    <?php if($item->statut): ?> 
                                    <p class="text-gradient text-success mb-2 text-sm"> Terrain Disponible </p>
                                        <?php else: ?>  
                                    <p class="text-gradient text-danger mb-2 text-sm"> Terrain  non Disponible </p>
                                        
                                    <?php endif; ?> 
                                    <a href="javascript:;">
                                        <h5>
                                            Libellé : <?php echo e($item->lieu); ?> 
                                        </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        <?php echo e(substr($item->description, 0, 45).'...'); ?> 
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="#">
                                        <button type="button" class="btn btn-success btn-sm mb-0" wire:click='voir(<?php echo e($item->id); ?>)'>Voir</button>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm mb-0" wire:click="$set('supp',<?php echo e($item->id); ?>)">Supprimer</button>
                                        <div class="avatar-group mt-2">

                                            <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($key!=0): ?>
                                                    <a href="javascript:;" wire:click='seeImage("<?php echo e($value); ?>",<?php echo e($item->id); ?>)' class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Visuel <?php echo e($key+1); ?>">
                                                        <img alt="Image placeholder" src="<?php echo e(asset('/app/terrain/'.$value)); ?>">
                                                    </a>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        
                        

                    </div>
                </div>
            </div>
        </div>

  

    </div>
</div>
</div>

<?php /**PATH /home/styve/dev/laravel/batipro/resources/views/livewire/terain.blade.php ENDPATH**/ ?>