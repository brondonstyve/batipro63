<div>
    
    
    <div class="container-fluid">
        <div class="card card-body blur shadow-blur">
            <div class="row gx-4">
                    <div class="row">
                  <div class="col-md-12 mt-4">
                      <div class="card h-100 mb-4">

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


                          <div class="card-header pb-0 px-3">
                              <div class="row">
                                  <div class="col-md-12">
                                      <h6 class="mb-0">Gestion des informations à propos</h6>
                                  </div>
                              </div>
                          </div>
                          <div class="card-body pt-4 p-3">
                            <form wire:submit.prevent="save" action="#" method="POST" role="form text-left" enctype="multipart/form-data">
        
                                <div class="row">
                                    
                                    <h3 for="">Entête</h3>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Description</label>
                                            <div class="">
                                                <textarea wire:model.lazy="apropos.descriptionEnt" class="form-control" id="about" rows="7" required ></textarea>
                                            </div>
                                            
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Image Entête</label>
                                            <div class="">
                                                 <input wire:model="imageEnt" class="form-control" type="file"  accept="image/*" > 
                                            </div>
                                <?php $__errorArgs = ['imageEnt'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text text-danger error">Erreur lors du téléchargement</span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='imageEnt'>
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                Patientez le chargement de l'image...
                                              </button>
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                    
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Visuel</label>
                                            <div class="">
                                                <?php if($imageEnt): ?>
                                                <div class="row">
                                                    <div class="col-xl-4 mx-auto col-md-12 mb-xl-0 mt-2">
                                                        <div class="card card-blog card-plain">
                                                            <div class="position-relative">
                                                                <a class="d-block shadow-xl border-radius-xl">
                                                                    <img src=" <?php echo e($imageEnt->temporaryUrl()); ?> " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php else: ?>
                                                <?php if($this->apropos->imageEnt): ?>
                                                <div class="row">
                                                    <div class="col-xl-4 mx-auto col-md-12 mb-xl-0 mt-2">
                                                        <div class="card card-blog card-plain">
                                                            <div class="position-relative">
                                                                <a class="d-block shadow-xl border-radius-xl">
                                                                    <img src=" <?php echo e(asset('/app/apropos/'.$this->apropos->imageEnt)); ?> " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                            
                                         </div>
                                    </div>

                                    <h3 for="">Bloc 1</h3>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Année de création</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.anneeCreat" class="form-control" type="number" min="1800" max="<?php echo e(date('Y')); ?>" required>
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Titre Principal</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.titre" class="form-control" type="text" required>
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Résumé Titre Principal</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.resume" class="form-control" type="text" required>
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Description</label>
                                            <div class="">
                                                <textarea wire:model.lazy="apropos.description" class="form-control" id="about" rows="7" required ></textarea>
                                            </div>
                                            
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Image 1</label>
                                            <div class="">
                                                 <input wire:model="imageB1" class="form-control" type="file"  accept="image/*" > 
                                <?php $__errorArgs = ['imageB1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text text-danger error">Erreur lors du téléchargement</span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                                 <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='imageB1'>
                                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                    Patientez le chargement de l'image...
                                                  </button>
                                            </div>
                                            <?php if($imageB1): ?>
                                                <div class="row">
                                                    <div class="col-xl-4 mx-auto col-md-12 mb-xl-0 mt-2">
                                                        <div class="card card-blog card-plain">
                                                            <div class="position-relative">
                                                                <a class="d-block shadow-xl border-radius-xl">
                                                                    <img src=" <?php echo e($imageB1->temporaryUrl()); ?> " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php else: ?>
                                                <?php if($this->apropos->imageB1): ?>
                                                <div class="row">
                                                    <div class="col-xl-4 mx-auto col-md-12 mb-xl-0 mt-2">
                                                        <div class="card card-blog card-plain">
                                                            <div class="position-relative">
                                                                <a class="d-block shadow-xl border-radius-xl">
                                                                    <img src=" <?php echo e(asset('/app/apropos/'.$this->apropos->imageB1)); ?> " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <?php endif; ?>
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Image 2</label>
                                            <div class="">
                                                 <input wire:model="imageB2" class="form-control" type="file"  accept="image/*" > 
                                <?php $__errorArgs = ['imageB2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text text-danger error">Erreur lors du téléchargement</span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                                 <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='imageB2'>
                                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                    Patientez le chargement de l'image...
                                                  </button>
                                            </div>
                                            <?php if($imageB2): ?>
                                            <div class="row">
                                                <div class="col-xl-3 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" <?php echo e($imageB2->temporaryUrl()); ?> " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php else: ?>
                                            <?php if($this->apropos->imageB2): ?>
                                            <div class="row">
                                                <div class="col-xl-3 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" <?php echo e(asset('/app/apropos/'.$this->apropos->imageB2)); ?> " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <?php endif; ?>
                                         </div>
                                    </div>



                                    <h3 for="">Bloc 2</h3>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Titre Principal</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.titre2" class="form-control" type="text" required>
                                            </div>

                                            <label for="apropos-name" class="form-control-label">Résumé Titre Principal</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.resume2" class="form-control" type="text" required> 
                                            </div>

                                            <label for="apropos-name" class="form-control-label">Description</label>
                                            <div class="">
                                                <textarea wire:model.lazy="apropos.description2" class="form-control" id="about" rows="7" required ></textarea>
                                            </div>
                                         </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Image </label>
                                            <div class="">
                                                 <input wire:model="imageC1" class="form-control" type="file"  accept="image/*" > 
                                            </div>
                                <?php $__errorArgs = ['imageC1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text text-danger error">Erreur lors du téléchargement</span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='imageC1'>
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                Patientez le chargement de l'image...
                                              </button>
                                         </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Visuel  </label>
                                            <?php if($imageC1): ?>
                                    <div class="row">
                                        <div class="col-xl-8 mx-auto col-md-12 mb-xl-0 mt-2">
                                            <div class="card card-blog card-plain">
                                                <div class="position-relative">
                                                    <a class="d-block shadow-xl border-radius-xl">
                                                        <img src=" <?php echo e($imageC1->temporaryUrl()); ?> " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                        
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php else: ?>
                                    <?php if($this->apropos->imageC1): ?>
                                    <div class="row">
                                        <div class="col-xl-8 mx-auto col-md-12 mb-xl-0 mt-2">
                                            <div class="card card-blog card-plain">
                                                <div class="position-relative">
                                                    <a class="d-block shadow-xl border-radius-xl">
                                                        <img src=" <?php echo e(asset('/app/apropos/'.$this->apropos->imageC1)); ?> " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="apropos-name" class="form-control-label">Titre Principal 1 (bloc vert)</label>
                                    <div class="">
                                        <input wire:model.lazy="apropos.titre3" class="form-control" type="text" required>
                                    </div>

                                    <label for="apropos-name" class="form-control-label">Nombre</label>
                                    <div class="">
                                        <input wire:model.lazy="apropos.nombre3" class="form-control" type="number" min="1" required>
                                    </div>

                                    <label for="apropos-name" class="form-control-label">Description</label>
                                    <div class="">
                                        <textarea wire:model.lazy="apropos.description3" class="form-control" id="about" rows="5"  required></textarea>
                                    </div>
                                 </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="apropos-name" class="form-control-label">Titre Principal 2 (bloc vert)</label>
                                    <div class="">
                                        <input wire:model.lazy="apropos.titre4" class="form-control" type="text" required>
                                    </div>

                                    <label for="apropos-name" class="form-control-label">Nombre</label>
                                    <div class="">
                                        <input wire:model.lazy="apropos.nombre4" class="form-control" type="number" min="1" required>
                                    </div>

                                    <label for="apropos-name" class="form-control-label">Description</label>
                                    <div class="">
                                        <textarea wire:model.lazy="apropos.description4" class="form-control" id="about" rows="5"  required></textarea>
                                    </div>
                                 </div>
                            </div>

                            <h3>Bloc 3</h3>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="apropos-name" class="form-control-label">Nom du directeur général</label>
                                    <div class="">
                                        <input wire:model.lazy="apropos.dg" class="form-control" type="text" required  placeholder="Nom du directeur général" id="apropos-name">
                                    </div>
                                 </div>
                            </div>
                           

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="apropos-name" class="form-control-label">Photo  de directeur général</label>
                                    <div class="">
                                        <input wire:model="image" class="form-control" type="file" placeholder="Visuel du apropos" id="apropos-name" accept="image/*" > 
                                    </div>
                                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text text-danger error">Erreur lors du téléchargement</span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                    <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image'>
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        Patientez le chargement de l'image...
                                      </button>
                                </div>

                                <?php if($image): ?>
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                            <div class="card card-blog card-plain">
                                                <div class="position-relative">
                                                    <a class="d-block shadow-xl border-radius-xl">
                                                        <img src=" <?php echo $image->temporaryUrl(); ?> " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>

                                <?php else: ?>

                                  <?php if($apropos->image): ?>
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">
                                                            <img src=" <?php echo e(asset('/app/membre/'.$apropos->image)); ?> " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                  <?php endif; ?>

                                <?php endif; ?>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">

                                    <label for="apropos-name" class="form-control-label">Description</label>
                                    <div class="">
                                        <textarea wire:model.lazy="apropos.description5" class="form-control" id="about" rows="7"  required></textarea>
                                    </div>
                                 </div>
                            </div>

                            <h3>Bloc 4</h3>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="apropos-name" class="form-control-label">Titre Principal</label>
                                    <div class="">
                                        <input wire:model.lazy="apropos.titre6" class="form-control" type="text" required>
                                    </div>
                                 </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="apropos-name" class="form-control-label">Résumé Titre Principal</label>
                                    <div class="">
                                        <input wire:model.lazy="apropos.resume6" class="form-control" type="text" required>
                                    </div>
                                 </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="apropos-name" class="form-control-label">Description</label>
                                    <div class="">
                                        <textarea wire:model.lazy="apropos.description6" class="form-control" id="about" rows="7"  required></textarea>
                                    </div>
                                    
                                 </div>
                            </div>



                            <h3>Information Complémentaires</h3>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Email 1</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.email1" class="form-control" type="email" required="" placeholder="Email 1" id="apropos-name">
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Email 2</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.email2" class="form-control" type="email"  placeholder="Email 2" id="apropos-name">
                                            </div>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Téléphone 1</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.telephone1" class="form-control" type="text" required="" placeholder="Téléphone 1" id="apropos-name">
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Téléphone 2</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.telephone2" class="form-control" type="text"  placeholder="Téléphone 2" id="apropos-name">
                                            </div>
                                         </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Bureau</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.bureau" class="form-control" type="text" required="" placeholder="Bureau" id="apropos-name" required> 
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Dépot</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.depot" class="form-control" type="text"  placeholder="Dépot" id="apropos-name" required>
                                            </div>
                                         </div>
                                    </div>

        
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Nombre d'année d'expérience</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.annee_experience" class="form-control" type="number" placeholder="Nombre d'année d'expérience" id="apropos-name" min="1" required="">
                                            </div>
                                         </div>
                                    </div>
        
                                   
                                            
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Adresse facebook</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.facebook" class="form-control" type="text"  placeholder="Adresse facebook" id="apropos-name">
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Adresse twitter</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.twitter" class="form-control" type="text"  placeholder="Adresse twitter" id="apropos-name">
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Adresse instagram</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.instagram" class="form-control" type="text"  placeholder="Adresse instagram" id="apropos-name">
                                            </div>
                                         </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apropos-name" class="form-control-label">Adresse linkedin</label>
                                            <div class="">
                                                <input wire:model.lazy="apropos.linkedin" class="form-control" type="text"  placeholder="Adresse linkedin" id="apropos-name">
                                            </div>
                                         </div>


                                    </div>
                                </div>
        
    
                                
                                
    
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
                                    
                                <br>
                            <span class="mb-2 text-xs "><span class="text-danger ms-2 font-weight-bold ">
                                S'il vout plait patientez le chargement des images avant de passer à l'enregistrement.    
                            </span></span>
                                <div class="d-flex justify-content-end">
    
                                  <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Enregistrer</button>
                                  
                                </div>
                            </form>
            
                        </div>
                      </div>
                  </div>
              </div>
        </div>
    </div>







    <div class="col-12 mt-4">
        <div class="card mb-4">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-1">Membres</h6>
                <p class="text-sm">Liste des différents membres de l'entreprise</p>
            </div>
            <div class="card-body p-3">
                <div class="row">


                    <?php if($mod!=null): ?>
                      


                        <div class="col-md-12">
                            <div class="card h-100 mb-4">
                                <div class="card-header pb-0 px-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="mb-0">Modifier un membre</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-4 p-3">
                                  <form wire:submit.prevent="updateMember" action="#" method="POST" role="form text-left">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <label for="user-name" class="form-control-label">Nom</label>
                                                  <div class="">
                                                      <input wire:model.lazy="membre.nom" class="form-control" type="text" placeholder="nom" id="user-name" required>
                                                  </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="user-name" class="form-control-label">Prenom</label>
                                                    <div class="">
                                                        <input wire:model.lazy="membre.prenom" class="form-control" type="text" placeholder="prenom" id="user-name">
                                                    </div>
                                                  </div>
                                                
                                              <div class="form-group">
                                                  <label for="user.location" class="form-control-label">Image</label>
                                                  <div class="">
                                                      <input wire:model.lazy="image2" class="form-control" type="file" id="name" >
                                                  </div>
                                <?php $__errorArgs = ['image2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text text-danger error">Erreur lors du téléchargement</span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                                  <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image2'>
                                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                    Patientez le chargement de l'image...
                                                  </button>
                                                <?php if($image2): ?>
                                                <div class="card-body p-3">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-md-5 mb-xl-0 mb-4">
                                                            <div class="card card-blog card-plain">
                                                                <div class="position-relative">
                                                                    <a class="d-block shadow-xl border-radius-xl">
                                                                        <img src="<?php echo e($image2->temporaryUrl()); ?> " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <?php else: ?>
    
                                                <div class="card-body p-3">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-md-5 mb-xl-0 mb-4">
                                                            <div class="card card-blog card-plain">
                                                                <div class="position-relative">
                                                                    <a class="d-block shadow-xl border-radius-xl">
                                                                        <img src="<?php echo e(asset('/app/membre/'.$membre->image)); ?> " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
    
    
    
                                              </div>
                                          
                                        <div class="form-group">
                                          <label for="about">Description</label>
                                          <div class="">
                                              <textarea wire:model.lazy="membre.description" class="form-control" id="about" rows="7" placeholder="à propos du membre" required></textarea>
                                          </div>
                                       </div>
                                      <div class="d-flex justify-content-end">                          
                                        <button type="button" class="btn bg-gradient-danger btn-md mt-4 mb-4" wire:click="annulerMod()">Annuler</button>
                                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Modifier</button>
                                      </div>
                                  </form>
                  
                              </div>
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>

                        
                        <?php else: ?>
                        <?php $__currentLoopData = $this->membres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$memb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php if($supp==$memb->id): ?>
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                        <div class="d-flex  flex-column text-justify">
                            <h4 class="mb-3 text-sm alert alert-danger text-white text-center"><i class="fa fa-warning" aria-hidden="true"></i>  Confirmation de suppression de <?php echo e($memb->nom); ?></h4>
                             <span class="mb-2 text-xs">La suppression de ce membre sera irrevoquable et engendrera automatiquement la suppression de toutes les images liées à ce dernier. 
                                 <br>
                             Cliquez sur le bouton en sessous si vous souhaitez continuer la suppression.
                             </span>
                            <div class="mx-auto">
                                <button class="btn btn-danger" wire:click='delete(<?php echo e($memb->id); ?>,"<?php echo e($memb->image); ?>")'>
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
                            
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="<?php echo e(asset('/app/membre/'.$memb->image)); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <p class="text-gradient text-dark mb-2 text-sm"><?php echo e($memb->prenom); ?></p>
                                    <a href="javascript:;">
                                        <h5>
                                            <?php echo e($memb->nom); ?>

                                        </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        <?php echo e(substr($memb->description,0,70 ).'...'); ?>

                                    </p>
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <button type="button" class="btn btn-danger btn-sm mb-0" wire:click="$set('supp',<?php echo e($memb->id); ?>)">Supprimer</button>
                                        <button type="button" class="btn btn-success btn-sm mb-0" wire:click="modifier(<?php echo e($memb->id); ?>)">Modifier</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                           
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php endif; ?>

                    
                    

                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

                        <?php if($addMember): ?>
                        
                        <?php if(session()->has('error')): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span
                                class="alert-text text-white"><?php echo e(session()->get('error')); ?></span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                            </div>
                        <?php endif; ?>
                        <div class="col-md-12">
                            <div class="card h-100 mb-4">
                                <div class="card-header pb-0 px-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="mb-0">Nouveau membre</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-4 p-3">
                                  <form wire:submit.prevent="saveMember" action="#" method="POST" role="form text-left">
                                      <div class="row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <label for="user-name" class="form-control-label">Nom</label>
                                                  <div class="">
                                                      <input wire:model.lazy="membre.nom" class="form-control" type="text" placeholder="nom" id="user-name" required>
                                                  </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="user-name" class="form-control-label">Prenom</label>
                                                    <div class="">
                                                        <input wire:model.lazy="membre.prenom" class="form-control" type="text" placeholder="prenom" id="user-name">
                                                    </div>
                                                  </div>
                                                
                                              <div class="form-group">
                                                  <label for="user.location" class="form-control-label">Image</label>
                                                  <div class="">
                                                      <input wire:model.lazy="image2" class="form-control" type="file" id="name" required>
                                <?php $__errorArgs = ['image2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text text-danger error">Erreur lors du téléchargement</span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                      
                                                      <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image2'>
                                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                        Patientez le chargement de l'image...
                                                      </button>
                                                  </div>

                                                <?php if($image2): ?>
                                                <div class="card-body p-3">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-md-5 mb-xl-0 mb-4">
                                                            <div class="card card-blog card-plain">
                                                                <div class="position-relative">
                                                                    <a class="d-block shadow-xl border-radius-xl">
                                                                        <img src=" <?php echo $image2->temporaryUrl(); ?> " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                              </div>
                                          
                                        <div class="form-group">
                                          <label for="about">Description</label>
                                          <div class="">
                                              <textarea wire:model.lazy="membre.description" class="form-control" id="about" rows="7" placeholder="à propos du membre" required></textarea>
                                          </div>
                                       </div>
                                       <br>
                            <span class="mb-2 text-xs "><span class="text-danger ms-2 font-weight-bold ">
                                S'il vout plait patientez le chargement des images avant de passer à l'enregistrement.    
                            </span></span>
                                      <div class="d-flex justify-content-end">                          
                                        <button  class="btn bg-gradient-danger btn-md mt-4 mb-4" wire:click="$set('addMember',false)">Annuler</button>
                                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Enregistrer</button>
                                      </div>
                                  </form>
                  
                              </div>
                            </div>
                        </div>


                    <?php endif; ?>

                    <?php if($mod==null): ?>
                    <?php if(!$addMember): ?>
                    <div class="card h-100 card-plain border"  wire:click='new'>

                        <?php if(session()->has('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span class="alert-text text-white"><?php echo e(session()->get('success')); ?></span>
                        </div>
                      <?php endif; ?>

                        <div class="card-body d-flex flex-column justify-content-center text-center">
                            <a href="javascript:;"  wire:click='new'>
                                <i class="fa fa-plus text-secondary mb-3" aria-hidden="true"></i>
                                <h5 class=" text-secondary"> Nouveau Membre </h5>
                            </a>
                        </div>
                    </div>
                        
                    <?php endif; ?>
                    <?php endif; ?>
                   
                    

                    </div>


                   


                </div>
                <div class="mt-3 d-flex justify-content-end">
                    <div>
                        <?php echo e($this->membres->links()); ?>

                    </div>
                </div>
            </div>
            
        </div>
        
    </div>











    </div>


</div>
<?php /**PATH /home/styve/app/laravel/batipro/resources/views/livewire/apropos.blade.php ENDPATH**/ ?>