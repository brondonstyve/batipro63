<div>
    <i class="fa fa-user me-sm-1 <?php echo e(in_array(request()->route()->getName(),['profile', 'my-profile']) ? 'text-white' : ''); ?>"></i>
    <span class="d-sm-inline d-none <?php echo e(in_array(request()->route()->getName(),['profile', 'my-profile']) ? 'text-white' : ''); ?>" wire:click="logout">Déconnexion</span>
</div>
<?php /**PATH /home/styve/dev/laravel/batipro/resources/views/livewire/auth/logout.blade.php ENDPATH**/ ?>