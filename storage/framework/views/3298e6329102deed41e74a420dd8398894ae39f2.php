<div>
  
    <form class="" wire:submit.prevent='send' action="" method="post">

      <?php if(session()->has('success')): ?>
        <div style="text-align: center;color: rgb(27, 80, 43);size: 60px;">
            <div>
                <span><?php echo e(session()->get('success')); ?></span>
            </div>
        </div>    
        <?php endif; ?>
    
        <?php if(session()->has('error')): ?>
        <div style="text-align: center;color: rgb(27, 80, 43);size: 60px">
            <div>
                <span><?php echo e(session()->get('error')); ?></span>
            </div>
        </div>    
        <?php endif; ?>

        <br>
        <br>
        <?php echo csrf_field(); ?>
        <div class="line-input flex">
          <div class="cel-input ">
            <input type="text"  placeholder="Prénom"  wire:model.lazy='prenom'>
          </div>
          <div class="cel-input ">
            <input type="text"  placeholder="Nom"  wire:model.lazy='nom' required>
          </div>
        </div>
        <div class="line-input flex">
          <div class="cel-input ">
            <input type="email"  placeholder="Email*"  wire:model.lazy='email' required>
          </div>
          <div class="cel-input ">
            <input type="tel"  placeholder="Téléphone"  wire:model.lazy='telephone' required>
          </div>
        </div>
        <div class="line-input flex">
            <div class="cel-input ">
              <input type="text"  placeholder="code postal*"  wire:model.lazy='postal'>
            </div>
            <div class="cel-input ">
              <input type="tel"  placeholder="ville"  wire:model.lazy='ville' required>
            </div>
          </div>
        
        <div class="line-input1 flex " >
          <div class="line-input1 full">
            <input type="submit"  Value="Demande d'informations sur les terrains disponibles" wire:loading.remove class="btn-sub">
            <input type="button"  Value="Patienter..." wire:loading class="btn-sub">
          </div>
        </div>

      </form>
</div>
<?php /**PATH /home/styve/app/laravel/batipro/resources/views/livewire/send-mail-terrain.blade.php ENDPATH**/ ?>