<div>
  
  <br>
  <br>
    <form class="" wire:submit.prevent='send' action="" method="post">

     
        <?php echo csrf_field(); ?>
        <div class="line-input flex">
          <div class="cel-input ">
            <input type="text"  placeholder="Prénom"  wire:model='prenom'>
          </div>
          <div class="cel-input ">
            <input type="text"  placeholder="Nom"  wire:model='nom' required>
          </div>
        </div>
        <div class="line-input flex">
          <div class="cel-input ">
            <input type="email"  placeholder="Email*"  wire:model='email' required>
          </div>
          <div class="cel-input ">
            <input type="tel"  placeholder="Téléphone"  wire:model='telephone' required>
          </div>
        </div>
        
        

          <br>
          <br>
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
        <div class="line-input1 flex " >
          <div class="line-input1 full text-center">
            <span wire:loading wire:target='send'>Patientez ...</span>
            <input type="submit"  Value="Demander" wire:loading.remove wire:target='send' class="btn-sub">
          </div>
        </div>

      </form>
</div>
<?php /**PATH /home/styve/dev/laravel/batipro/resources/views/livewire/send-mail-terrain.blade.php ENDPATH**/ ?>