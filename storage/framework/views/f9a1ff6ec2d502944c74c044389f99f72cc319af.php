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

          <div class="col-md-7 mt-4">
              <div class="card">
                  <div class="card-header pb-0 px-3">
                      <h6 class="mb-0">Gestion des actualites</h6>
                  </div>
                  <div class="card-body pt-4 p-3">
                      <ul class="list-group">
                        
                        <?php if(sizeOf($this->actualites)==0): ?>
                        <div
                            class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span
                                class="alert-text text-white"><?php echo __('Aucune actualité enregistrée pour le moment. <br> &nbsp;&nbsp;&nbsp; Veuillez enregistrer une nouvelle actualité dans le formulaire à droite.'); ?></span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                        <?php else: ?>
                            
                        <?php endif; ?>
                        <?php $__currentLoopData = $this->actualites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$actualite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($supp==$actualite->id): ?>
                        <li class="list-group-item col-md-12 border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg" wire:model='supp'>
                            <div class="d-flex  flex-column text-justify">
                               <h4 class="mb-3 text-sm alert alert-danger text-white text-center"><i class="fa fa-warning" aria-hidden="true"></i>  Confirmation de suppression de l'actualité <?php echo e($actualite->titre); ?></h4>
                                <span class="mb-2 text-xs">La suppression de cette actualité engendrera automatiquement la suppression de ce dernier ainsi que les images y associés. 
                                    <br>
                                Cliquez sur le bouton ci dessous si vous souhaitez continuer la suppression.
                                </span>
                               <div class="mx-auto">
                                   <button class="btn btn-danger" wire:click='delete(<?php echo e($actualite->id); ?>)'>
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
                                <h4 class="mb-3 text-sm">Titre &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo e($actualite->titre); ?></h4>
                                <span class="mb-2 text-xs">Domaine   &nbsp;&nbsp;&nbsp;&nbsp;: <span class="text-dark ms-2 font-weight-bold"><?php echo e($actualite->domaine); ?> </span></span>
                                
                                <span class="text-xs">Description : <span class="text-dark ms-2 font-weight-bold">  <?php echo e(substr($actualite->desc_auteur,0,100).'...'); ?> </span></span>
                            </div>
                            <div class="ms-auto">
                                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;" wire:click="$set('supp',<?php echo e($actualite->id); ?>)"><i class="far fa-trash-alt me-2" aria-hidden="true"></i>Supprimer</a>
                                
                                <a class="btn btn-link text-dark text-gradient px-3 mb-0" href="javascript:;" wire:click="update(<?php echo e($actualite->id); ?>)"><i class="fas fa-pencil-alt text-dark  me-2" aria-hidden="true"></i>Voir / Modifier</a>
                                
                            </div>
                        </li>
                        <?php endif; ?>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                      </ul>
                  </div>
              </div>
          </div>
          
          <div class="col-md-5 mt-4">
              <div class="card h-100 mb-4">
                  <div class="card-header pb-0 px-3">
                      <div class="row">
                          <div class="col-md-12">
                              <h6 class="mb-0">Nouvelle actualité / Modification des actualités</h6>
                          </div>
                      </div>
                  </div>
                  <div class="card-body pt-4 p-3">
                    <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="user-name" class="form-control-label">Titre de l'actualité</label>
                                <div class="">
                                    <input wire:model.lazy="actualite.titre" class="form-control" type="text" placeholder="Titre de l'actualité" id="user-name" required>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="user.location" class="form-control-label">Catégorie</label>
                                <div class="">
                                    <input wire:model.lazy="actualite.domaine" class="form-control" type="text" placeholder="Domaine de l'actualité"  required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="terrain-name" class="form-control-label">Image principale de l'article </label>
                                <div class="">
                                    <input   wire:model.lazy="image" class="form-control" type="file" id="terrain-name" accept="image/*"    <?php if($modification==null): ?> required <?php endif; ?>>  
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
                                    Patientez le chargement de(s) image(s)...
                                  </button>
                            </div>

                            <?php if($modification!=null): ?>
                            <?php if($image): ?>
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="position-relative">
                                                <a class="d-block shadow-xl border-radius-xl">
                                                    <img src="<?php echo e($image->temporaryUrl()); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="position-relative">
                                                <a class="d-block shadow-xl border-radius-xl">
                                                    <img src="<?php echo e(asset('/app/actualite/'.$imageVue)); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            
                            <?php else: ?>
                            <?php if($image): ?>
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="position-relative">
                                                <a class="d-block shadow-xl border-radius-xl">
                                                    <img src="<?php echo e($image->temporaryUrl()); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                           
                            <?php endif; ?>



                            <div class="form-group">
                                <label for="user.location" class="form-control-label">Nom de l'auteur</label>
                                <div class="">
                                    <input wire:model.lazy="actualite.auteur" class="form-control" type="text" placeholder="nom de l'auteur" id="name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="about">A Propos de l'auteur</label>
                                <div class="">
                                    <textarea class="form-control" wire:model.lazy="actualite.desc_auteur" id="about" rows="5" placeholder="à propos de l'auteur" required></textarea>
                                </div>
                             </div>

                             <h5>SEO</h5>

                             <div class="form-group">
                                <label for="about">Titre de la page</label>
                                <div class="">
                                    <textarea class="form-control" wire:model.lazy="actualite.titreSeo" id="about" rows="1" placeholder="titre de la page" maxlength="62"></textarea>
                                </div>
                             </div>

                             <div class="form-group">
                                <label for="about">Meta Description</label>
                                <div class="">
                                    <textarea class="form-control" wire:model.lazy="actualite.descriptionSeo" id="about" rows="2" placeholder="Description de la page" maxlength="122"></textarea>
                                </div>
                             </div>
                        </div>

                        <?php for($i = 1; $i < 6; $i++): ?>
                        <span>
                            <a class="btn  
                            <?php if($i==1): ?> btn-info <?php endif; ?>
                            <?php if($i==3): ?> bg-gradient-success <?php endif; ?>
                            <?php if($i==4): ?> bg-gradient-warning <?php endif; ?>
                            <?php if($i==5): ?> btn-primary <?php endif; ?>
                            <?php if($i==2): ?> btn-secondary <?php endif; ?>
                            
                            " data-bs-toggle="collapse" href="#bloc<?php echo e($i); ?>" role="button" aria-expanded="false" aria-controls="collapseExample" wire:click="$set('collapse',collapse)">
                            Bloc <?php echo e($i); ?> 
                            </a>
                      </span>

                      


                    <div class="row <?php echo e($collapse); ?>" id="bloc<?php echo e($i); ?>">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="user-name" class="form-control-label">Titre du bloc</label>
                                <div class="">
                                    <input wire:model.lazy="actualite.titre<?php echo e($i); ?>" class="form-control" type="text" placeholder="titre du bloc <?php echo e($i); ?>" id="user-name" >
                                </div>
                              </div>
                              
                              
                            
                        
                    <div class="form-group">
                        <label for="about">Article  </label>
                        <div class="">
                            <textarea wire:model.lazy="actualite.article<?php echo e($i); ?>" class="form-control" id="about" rows="7" placeholder="Ecrivez à propos de l'article" ></textarea>
                        </div>
                     </div>
                     
                     
                        <div class="form-group">
                            <label for="terrain-name" class="form-control-label">Image relative à l'article ?</label>
                            <div class="">
                                <input   wire:model="image<?php echo e($i); ?>" class="form-control" type="file" id="terrain-name" accept="image/*"> 
                            <?php $__errorArgs = ['image<?php echo e($i); ?>'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text text-danger error">Erreur lors du téléchargement</span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            </div>


                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='image<?php echo e($i); ?>'>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Patientez le chargement de(s) image(s)...
                              </button>
                        </div>
                        <?php if($i==1): ?>
                        <?php if($modification!=null): ?>
                        <?php if($image1): ?>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="<?php echo e($image1->temporaryUrl()); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                        <?php if($imageVue1): ?>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="<?php echo e(asset('/app/actualite/'.$imageVue1)); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                       
                        <?php endif; ?>
                        
                        <?php else: ?>
                        <?php if($image1): ?>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="<?php echo e($image1->temporaryUrl()); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                       
                        <?php endif; ?>
                            
                        <?php endif; ?>




                        <?php if($i==2): ?>
                        <?php if($modification!=null): ?>
                        <?php if($image2): ?>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="<?php echo e($image2->temporaryUrl()); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                        <?php if($imageVue2): ?>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="<?php echo e(asset('/app/actualite/'.$imageVue2)); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <?php endif; ?>
                        
                        <?php else: ?>
                        <?php if($image2): ?>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="<?php echo e($image2->temporaryUrl()); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                       
                        <?php endif; ?>
                            
                        <?php endif; ?>




                        <?php if($i==3): ?>
                        <?php if($modification!=null): ?>
                        <?php if($image3): ?>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="<?php echo e($image3->temporaryUrl()); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                        <?php if($imageVue3): ?>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="<?php echo e(asset('/app/actualite/'.$imageVue3)); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                       
                        <?php endif; ?>
                        
                        <?php else: ?>
                        <?php if($image3): ?>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="<?php echo e($image3->temporaryUrl()); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                       
                        <?php endif; ?>
                            
                        <?php endif; ?>



                        <?php if($i==4): ?>
                        <?php if($modification!=null): ?>
                        <?php if($image4): ?>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="<?php echo e($image4->temporaryUrl()); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                        <?php if($imageVue4): ?>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="<?php echo e(asset('/app/actualite/'.$imageVue4)); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <?php endif; ?>
                        
                        <?php else: ?>
                        <?php if($image4): ?>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="<?php echo e($image4->temporaryUrl()); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                       
                        <?php endif; ?>
                            
                        <?php endif; ?>


                        <?php if($i==5): ?>
                        <?php if($modification!=null): ?>
                        <?php if($image5): ?>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="<?php echo e($image5->temporaryUrl()); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                        <?php if($imageVue5): ?>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="<?php echo e(asset('/app/actualite/'.$imageVue5)); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <?php endif; ?>
                        
                        <?php else: ?>
                        <?php if($image5): ?>
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="<?php echo e($image5->temporaryUrl()); ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                       
                        <?php endif; ?>
                            
                        <?php endif; ?>
                        

                        <div class="form-group">
                            <label for="user.location" class="form-control-label">Lien de vidéo relative à l'article?  (contactez les concepteurs en cas de non comprehension)</label>
                            <div class="">
                                <input wire:model.lazy="actualite.video<?php echo e($i); ?>" class="form-control" type="text" placeholder="ex: https://www.youtube.com/embed/batipro" id="name">
                            </div>
                        </div>

                        
                    </div>
                </div>
                        <?php endfor; ?>
                          
                          
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
                    
                    <?php if($modification!=null): ?>
                      
                    <input type="button" value="Annuler" class="btn bg-gradient-danger btn-md mt-4 mb-4 mr-" wire:click='annuler()'>

                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:loading.remove>Enregistrer les modification</button>
                    
                    <?php else: ?>                            
                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:loading.remove>Enregistrer</button>
                    
                    <?php endif; ?>
                    <button class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:loading >Patienter...</button>
                </div>
                    </form>
    
                </div>
              </div>
          </div>
      </div>
    

</div>
<?php /**PATH /home/styve/dev/laravel/batipro/resources/views/livewire/actu.blade.php ENDPATH**/ ?>