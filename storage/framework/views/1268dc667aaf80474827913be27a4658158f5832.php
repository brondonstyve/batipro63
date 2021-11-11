<div>
    

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <?php if(sizeOf($this->client)!=0): ?>
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Liste des visiteurs ayant téléchargés la brochure</h5>
                        </div>
                        
                    </div>
                    <?php endif; ?>
                </div>
                <?php if(sizeOf($this->client)==0): ?>
                <div class="">
                    <div>
                        <h5 class="mb-0">
                            <div class="text-center">
                                <div>
                                    <h5 class="mb-0">Aucun visiteur n'as téléchargé de brochure pour le moment.</h5>
                                </div>
                                
                            </div>
                        </h5>
                    </div>
                    
                </div> 
                <?php else: ?>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Numéro
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nom + Prenom
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Ville
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Boite Postale
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Téléphone
                                    </th>

                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Date
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $this->client; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="ps-4" rowspan="2">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($key+1); ?></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"> <?php echo e($item->nom .' '.$item->prenom); ?> </p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($item->email); ?></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo e($item->ville); ?></p>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold"><?php echo e($item->postal); ?></span>
                                    </td>
                                    <td class="text-center">
                                        <?php echo e($item->telephone); ?>

                                    </td>
                                    <td class="text-center">
                                        <?php echo e($item->created_at); ?>

                                    </td>
                                </tr>
                                <tr >
                                    <td>Message :</td>
                                    <td colspan='7'>
                                        Message: <?php echo e($item->message); ?>

                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination mx-auto"> 
                        <?php echo e($this->client->links()); ?>

                    </div>
                </div>
                <?php endif; ?>
                
            </div>
        </div>

        
    </div>

</div>
<?php /**PATH /home/styve/app/laravel/batipro/resources/views/livewire/laravel-examples/user-management.blade.php ENDPATH**/ ?>