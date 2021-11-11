<div>
    
    
    <form class="" wire.model.submit='send' action="" method="post">

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
            <input type="text"  placeholder="Nom"  wire:model.lazy='nom'>
          </div>
        </div>
        <div class="line-input flex">
          <div class="cel-input ">
            <input type="email"  placeholder="Email*"  wire:model.lazy='email'>
          </div>
          <div class="cel-input ">
            <input type="tel"  placeholder="sujet"  wire:model.lazy='sujet'>
          </div>
        </div>
        <div class="line-input full ">
          <textarea  rows="8" cols="80" placeholder="Votre message ..." wire:model.lazy='message'></textarea>
        </div>
        
        <div class="line-input flex">
          <div class="content-btn btn-black" wire:loading.remove wire:click='send'><a href="#!" class="">Envoyer</a></div>
          <div class="content-btn btn-black" wire:loading ><a href="#!" class="" >Patienter...</a></div>
        </div>
      </form>
</div>
<?php /**PATH /home/styve/app/laravel/batipro/resources/views/livewire/send-mail.blade.php ENDPATH**/ ?>