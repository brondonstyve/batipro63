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

        



         <h3 for="">Description et titre des différentes pages</h3>

          <div class="col-md-7 mt-4">
              <div class="card">
                  <div class="card-body pt-4 p-3">
                      <ul class="list-group">
                        
                        <?php if(sizeOf($this->seos)==0): ?>
                        <div
                            class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span
                                class="alert-text text-white"><?php echo __('Aucun enregistrement pour le moment. <br> &nbsp;&nbsp;&nbsp; Veuillez faire un nouvel enregistrement dans le formulaire à droite.'); ?></span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                        <?php else: ?>
                            
                        <?php endif; ?>
                        <?php $__currentLoopData = $this->seos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$seo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($supp==$seo->id): ?>
                        <li class="list-group-item col-md-12 border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg" wire:model='supp'>
                            <div class="d-flex  flex-column text-justify">
                               <h4 class="mb-3 text-sm alert alert-danger text-white text-center"><i class="fa fa-warning" aria-hidden="true"></i>  Confirmation de suppression de l'enregistrement <?php echo e($seo->titre); ?></h4>
                                <span class="mb-2 text-xs">La suppression de cet enregistrement engendrera automatiquement la destruction de ce dernier. 
                                    <br>
                                Cliquez sur le bouton ci dessous si vous souhaitez continuer la suppression.
                                </span>
                               <div class="mx-auto">
                                   <button class="btn btn-danger" wire:click='delete(<?php echo e($seo->id); ?>)'>
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
                                
                                <h2 class="mb-3 text-sm">PAGE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
                                    <?php switch($seo->page):
                                    case ('home-front'): ?>
                                            ACCUEIL
                                            <?php break; ?>
                                        <?php case ('aboutus'): ?>
                                            A PROPOS
                                            <?php break; ?>
                                        <?php case ('service-front'): ?>
                                        SERVICES
                                            <?php break; ?>
                                            <?php case ('projet-front'): ?>
                                            PROJETS
                                            <?php break; ?>

                                            <?php case ('terrain-front'): ?>
                                            TERRAINS
                                            <?php break; ?>

                                            <?php case ('maisonVirtuelle'): ?>
                                            MAISONS VIRTUELLES
                                            <?php break; ?>

                                            <?php case ('actualite-front'): ?>
                                            ACTUALITÉS
                                            <?php break; ?>

                                            <?php case ('brochure'): ?>
                                            BROCHURE
                                            <?php break; ?>

                                            <?php case ('temoignage'): ?>
                                            VIDÉOS
                                            <?php break; ?>
                                            
                                            <?php case ('mc'): ?>
                                            MAISONS CONTEMPORAINES
                                            <?php break; ?>

                                            <?php case ('mg'): ?>
                                            MACONNERIE GENERALE
                                            <?php break; ?>

                                            <?php case ('contact'): ?>
                                            CONTACT
                                            <?php break; ?>

                                            <?php case ('projetMc'): ?>
                                            PROJETS MAISON CONTEMPORAINE
                                            <?php break; ?>

                                            <?php case ('projetMg'): ?>
                                            PROJETS MACONNERIE MAISON
                                            <?php break; ?>

                                            <?php case ('projetLc'): ?>
                                            PROJET MACONNERIE LOGEMENT COLLECTIF
                                            <?php break; ?>
                                            
                                    <?php endswitch; ?>
                                </h2>
                                <h4 class="mb-3 text-sm">Titre &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo e($seo->titre); ?></h4>
                                <span class="mb-2 text-xs">Description   &nbsp;&nbsp;&nbsp;&nbsp;: <span class="text-dark ms-2 font-weight-bold"><?php echo e($seo->description); ?> </span></span>
                                
                            </div>
                            <div class="ms-auto">
                                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;" wire:click="$set('supp',<?php echo e($seo->id); ?>)"><i class="far fa-trash-alt me-2" aria-hidden="true"></i>Supprimer</a>
                                
                                <a class="btn btn-link text-dark text-gradient px-3 mb-0" href="javascript:;" wire:click="update(<?php echo e($seo->id); ?>)"><i class="fas fa-pencil-alt text-dark  me-2" aria-hidden="true"></i>Voir / Modifier</a>
                                
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
                              <h6 class="mb-0">Nouveau enregistrement / Modification de l'enregistrement</h6>
                          </div>
                      </div>
                  </div>
                  <div class="card-body pt-4 p-3">
                    <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="user-name" class="form-control-label">Page</label>
                                <div class="">
                                    <select class="form-control" wire:model.lazy="seo.page">
                                        <option value=""></option>
                                        <option value="home-front">ACCUEIL</option>
                                        <option value="aboutus">A PROPOS</option>
                                        <option value="service-front">SERVICES</option>
                                        <option value="projet-front">PROJETS</option>
                                        <option value="terrain-front">TERRAINS</option>
                                        <option value="maisonVirtuelle">MAISONS VIRTUELLES</option>
                                        <option value="actualite-front">ACTUALITÉS</option>
                                        <option value="brochure">BROCHURE</option>
                                        <option value="temoignage">VIDÉOS</option>
                                        <option value="mc">MAISONS CONTEMPORAINES</option>
                                        <option value="mg">MACONNERIE GENERALE</option>
                                        <option value="mo">MAITRISE D'OEUVRE</option>
                                        <option value="contact">CONTACT</option>
                                        <option value="projetMc">PROJETS MAISON CONTEMPORAINE</option>
                                        <option value="projetMg">PROJETS MACONNERIE MAISON</option>
                                        <option value="projetLc">PROJET MACONNERIE LOGEMENT COLLECTIF</option>
                                    </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="about">Titre</label>
                                <div class="">
                                    <textarea class="form-control" wire:model.lazy="seo.titre" id="about" rows="5" placeholder="titre de la page" maxlength="62"></textarea>
                                </div>
                             </div>

                             <div class="form-group">
                                <label for="about">Description</label>
                                <div class="">
                                    <textarea class="form-control" wire:model.lazy="seo.description" id="about" rows="5" placeholder="Description de la page" maxlength="122"></textarea>
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

         
      </div>


      
    

</div>
<?php /**PATH /home/styve/dev/laravel/batipro/resources/views/livewire/seo.blade.php ENDPATH**/ ?>