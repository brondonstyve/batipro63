<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <?php if(isset($seo)): ?>

   <meta name="description" content="<?php echo e($seo->description); ?>">

   <title><?php echo e($seo->titre); ?></title>
   
   <?php else: ?>

   <?php if(isset($actualite)): ?>
   
   <meta name="description" content="<?php echo e($actualite->descriptionSeo); ?>">

   <title><?php echo e($actualite->titreSeo); ?></title>
   <?php else: ?>
   <title><?php echo e(isset($title) ? $title .' | '.config('app.name') : config('app.name')); ?></title>
       
   <?php endif; ?>
   
   <?php endif; ?>
  

   <link rel="stylesheet" href="<?php echo e(asset('/front-end/assets/css/master.css')); ?>">

   <link rel="stylesheet" type="text/css" href="<?php echo e(asset("vendor/cookie-consent/css/cookie-consent.css")); ?>">
   
   <script src="<?php echo e(asset('/front-end/assets/js/jquery-1.8.2.min.js')); ?>"></script>

   <?php echo $__env->yieldContent('css_js'); ?>
</head>
<?php echo \Livewire\Livewire::styles(); ?>


<body <?php if (! (empty($body_class))): ?> class="<?php echo e($body_class); ?>" <?php endif; ?>>
   <div class="container-main-bloc">
      <div class="container flex">
         <?php echo $__env->make("front-end/partials/header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <div class="container-main">

            <?php echo $__env->yieldContent('content'); ?>

            <?php echo $__env->make("front-end/partials/footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
      </div>
   </div>
   </div>
   <?php echo $__env->yieldContent('script'); ?>

   <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/defaut/base.blade.php ENDPATH**/ ?>