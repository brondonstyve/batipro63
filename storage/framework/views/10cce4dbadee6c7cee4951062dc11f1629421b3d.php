<div>
    <?php echo $__env->make('layouts.navbars.guest.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="page-header section-height-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-8">
                        <div class="card-header pb-0 text-left bg-transparent">
                            <?php if($showDemoNotification): ?>
                                <div wire:model="showDemoNotification"
                                    class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                                    <span
                                        class="alert-text text-white"><?php echo e(__(' You are in a demo version, you can\'t update the
                                        profile.')); ?></span>
                                    <button wire:click="$set('showDemoNotification', false)" type="button"
                                        class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                            <?php endif; ?>
                            <h4 class="mb-0"><?php echo e(__('Forgot your password? Enter your email here')); ?></h4>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="recoverPassword" action="#" method="POST" role="form text-left">
                                <div>
                                    <label for="email"><?php echo e(__('Email')); ?></label>
                                    <div class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>border border-danger rounded-3 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <input wire:model="email" id="email" type="email" class="form-control"
                                            placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                    </div>
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn bg-gradient-info w-100 mt-4 mb-0"><?php echo e(__('Recover your
                                    password')); ?></button>
                                </div>
                            </form>
                            <?php if($showSuccesNotification): ?>
                                <div wire:model="showSuccesNotification"
                                    class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                                    <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                                    <span
                                        class="alert-text text-white"><?php echo e(__(' An email for resetting your password has been
                                        sent!')); ?></span>
                                    <button wire:click="$set('showSuccesNotification', false)" type="button"
                                        class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                            <?php endif; ?>

                            <?php if($showFailureNotification): ?>
                                <div wire:model="showFailureNotification"
                                    class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                                    <span class="alert-text text-white">
                                        <?php echo e(__('You are not registered as a user. Please sign
                                        up')); ?>

                                        <a class="text-info" href="<?php echo e(route('sign-up')); ?>">here</a></span>
                                    <button wire:click="$set('showFailureNotification', false)" type="button"
                                        class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                        <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                            style="background-image:url('<?php echo e(asset('/assets/img/curved-images/curved6.jpg')); ?>)"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/styve/dev/laravel/batipro/resources/views/livewire/auth/forgot-password.blade.php ENDPATH**/ ?>