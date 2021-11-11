<div class="container-fluid">
    <div class="card card-body blur shadow-blur">

        <div class="container-fluid">
            <div class="card card-body pt-4 p-3">
                
                      <div class="col-md-12 mt-4">

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

                            <h4 class="mb-0">Gestion des visuels</h4>

                            <form  wire:submit.prevent='save_maison'>
                                <?php echo csrf_field(); ?>
                            <div class="row">
                                


                            <h3 for="">Corps de la page</h3>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="service-name" class="form-control-label">Titre</label>
                                    <div class="">
                                        <input wire:model.lazy="maisonpage.titre" class="form-control" type="text" required>
                                    </div>
                                    
                                 </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="service-name" class="form-control-label">Description</label>
                                    <div class="">
                                        <textarea wire:model.lazy="maisonpage.description" class="form-control" id="about" rows="3" required ></textarea>
                                    </div>
                                    
                                 </div>
                            </div>

                            

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Enregistrer</button>
                              </div>
                     </div>
                    </form>
                </div></div>
        </div>

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

        <?php if($liste): ?>
        <div class="col-12 mt-4">
            <div class="card mb-4"> 
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-1">Gestion des maisons virtuelles</h6>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <?php $__currentLoopData = $this->listProject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php if($supp==$item->id): ?>
                        
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                        <div class="d-flex  flex-column text-justify">
                            <h4 class="mb-3 text-sm alert alert-danger text-white text-center"><i class="fa fa-warning" aria-hidden="true"></i>  Confirmation de suppression de <?php echo e($maison->libelle); ?></h4>
                             <span class="mb-2 text-xs">La suppression de cette maison virtuelle sera irrevoquable et engendrera automatiquement la suppression de toutes les images liées à ce dernier. 
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
                                        <img src="<?php if($urlSeeImage!=null && $item->id==$idVue ): ?><?php echo e(asset('/app/maison/'.$urlSeeImage)); ?><?php else: ?><?php echo e(asset('/app/maison/'.$image[1])); ?><?php endif; ?>" alt="img-blur-shadow"
                                            class="img-fluid shadow border-radius-xl">
                                    </a>

                                </div>
                                <div class="card-body px-1 pb-0">
                                    <p class="text-gradient text-dark mb-2 text-sm">service : <?php echo e($item->libServ); ?> </p>
                                    <a href="javascript:;">
                                        <h5>
                                            Libellé : <?php echo e($item->lieu); ?> 
                                        </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        <?php echo e(substr($item->description, 0, 45).'...'); ?> 
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <button type="button" class="btn btn-success btn-sm mb-0" wire:click='voir(<?php echo e($item->id); ?>)'>Voir</button>
                                        <button type="button" class="btn btn-danger btn-sm mb-0" wire:click="$set('supp',<?php echo e($item->id); ?>)">Supprimer</button>
                                        <div class="avatar-group mt-2">

                                            <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($key!=0): ?>
                                                    <a href="javascript:;" wire:click='seeImage("<?php echo e($value); ?>",<?php echo e($item->id); ?>)' class="avatar avatar-xs rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title="Visuel <?php echo e($key+1); ?>">
                                                        <img alt="Image placeholder" src="<?php echo e(asset('/app/maison/'.$value)); ?>">
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
                        
                        
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4" wire:click='new'>
                            <div class="card h-100 card-plain border">
                                <div class="card-body d-flex flex-column justify-content-center text-center">
                                    <a href="javascript:;">
                                        <i class="fa fa-plus text-secondary mb-3"></i>
                                        <h5 class=" text-secondary"> Nouvelle maison </h5>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <?php else: ?>



        
        <div class="row">

            
            
    
              <div class="col-md-12 mt-4">
                  <div class="card h-100 mb-4">
                      <div class="card-header pb-0 px-3">
                          <div class="row">
                              <div class="col-md-12">
                                  <h6 class="mb-0">Nouvelle maison / Modification maison</h6>
                              </div>
                          </div>
                      </div>
                      <div class="card-body pt-4 p-3">
                        <form wire:submit.prevent="save" action="#" method="POST" role="form text-left" enctype="multipart/form-data">
    
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="maison-name" class="form-control-label">Libellé du maison</label>
                                        <div class="">
                                            <input wire:model.lazy="maison.libelle" class="form-control" type="text" required  placeholder="Libellé du maison" id="maison-name" required>
                                        </div>
                                        <?php $__errorArgs = ['maison.libelle'];
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
                                        <label for="maison-email" class="form-control-label"><?php echo e(__('durée de vie')); ?></label>
                                        <div class="<?php $__errorArgs = ['maison.email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>border border-danger rounded-3 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                            <input wire:model.lazy="maison.annee" class="form-control" type="number"
                                                placeholder="durée de vie" id="maison-email" required>
                                        </div>
                                        <?php $__errorArgs = ['maison.annee'];
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
                                        <label for="maison-name" class="form-control-label">Exemple de Lieu de construction</label>
                                        <div class="">
                                            <input wire:model.lazy="maison.lieu" class="form-control" type="text" required  placeholder="Exemple de Lieu de construction" id="maison-name" required>
                                        </div>
                                        <?php $__errorArgs = ['maison.lieu'];
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
                                        <label for="maison-email" class="form-control-label"><?php echo e(__('durée de réalisation (en semaine)')); ?></label>
                                        <div class="<?php $__errorArgs = ['maison.email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>border border-danger rounded-3 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                            <input wire:model.lazy="maison.duree" class="form-control" type="number"
                                                placeholder="durée de réalisation" id="maison-email" required>
                                        </div>
                                        <?php $__errorArgs = ['maison.duree'];
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
                                        <label for="maison-name" class="form-control-label">Ajouter un visuel uniquement</label>
                                        <div class="">
                                            <input wire:model="image" class="form-control" type="file" placeholder="Visuel du maison" id="maison-name" accept="image/*"> 
                                        </div>
                                        <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image'>
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            Patientez le chargement de(s) image(s)...
                                          </button>
                                        <?php if(session()->has('image')): ?> <div class="text-danger"><?php echo e(session()->get('image')); ?></div> <?php endif; ?>
                                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger">Erreur lors du téléchargement</div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <?php else: ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="maison-name" class="form-control-label">Visuel</label>
                                        <div class="">
                                            <input wire:model="image" class="form-control" type="file" required  placeholder="Visuel du maison" id="maison-name" required accept="image/*" multiple max="2"> 
                                        </div>
                                        <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image'>
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            Patientez le chargement de(s) image(s)...
                                          </button>
                                        <?php if(session()->has('image')): ?> <div class="text-danger"><?php echo e(session()->get('image')); ?></div> <?php endif; ?>
                                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger">Erreur lors du téléchargement</div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                                    
                                
    
                                <div class="form-group">
                                    <label for="about">Description</label>
                                    <div class="">
                                        <textarea wire:model.lazy="maison.description" class="form-control" id="about" rows="7" placeholder="à propos du maison" required></textarea>
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
                                    $image=explode('->',$maison->image);
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
                                                            
                                                            <img src="<?php echo e(asset('/app/maison/'.$img)); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">  
                                                        </a>
                                                        <button type="button" class="btn bg-gradient-danger btn-md mt-4 mb-4" wire:click='removeImg("<?php echo e($img); ?>")'>Enlever</button>

                                                        <?php if($maison->img_principale!=$img): ?>
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
                              <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:loading.remove>Enregistrer les modification</button>
                              
                              <?php else: ?>                            
                              <button type="button" class="btn bg-gradient-danger btn-md mt-4 mb-4 mr-" wire:click='annuler'>Annuler</button>

                              <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:loading.remove>Enregistrer</button>
                              
                              <?php endif; ?>
                              <button class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:loading >Patienter...</button>
                            </div>
                        </form>
        
                    </div>
                  </div>
              </div>
          </div>




         

    
        <?php endif; ?>

  

    </div>
</div>
</div>

<?php /**PATH /home/styve/app/laravel/batipro/resources/views/livewire/maison-virtuelle.blade.php ENDPATH**/ ?>