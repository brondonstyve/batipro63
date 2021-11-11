<div>
    <div class="container">
        <div class="row">


            <form wire:submit.prevent='save_mgPage()' class="col-md-11 mx-auto">
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

            <h3 for="">Bloc 1</h3>

          <div class="col-md-6">
            <div class="form-group">
                <label for="actualite1-name" class="form-control-label">Image Entête</label>
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
        
        <div class="col-md-6">

            <div class="form-group">
                <label for="actualite1-name" class="form-control-label">Visuel</label>
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
                    <?php if($this->actualite1->imageEnt): ?>
                    <div class="row">
                        <div class="col-xl-4 mx-auto col-md-12 mb-xl-0 mt-2">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src=" <?php echo e(asset('/app/maison/'.$this->actualite1->imageEnt)); ?> " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
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

        

            <div class="col-md-12">
                <div class="form-group">
                    <label for="actualite-name" class="form-control-label">Titre du bloc 1</label>
                    <div class="">
                        <input wire:model.lazy="actualite1.titre" class="form-control" type="text" required>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="actualite-name" class="form-control-label">Description du bloc 1</label>
                    <div class="">
                        <textarea name="" id="" rows="5" wire:model.lazy="actualite1.description" class="form-control" required></textarea>
                    </div>
                </div>
            </div>



                </div>
            </div>
                  
        
                <div class="d-flex justify-content-end">

                  <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Enregistrer</button>
                  
                </div>
            </div>
            </form>
</div>
    </div>
    

</div>
<?php /**PATH /home/styve/dev/laravel/batipro/resources/views/livewire/moconnerie-generale.blade.php ENDPATH**/ ?>