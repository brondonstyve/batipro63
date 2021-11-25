<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Metas -->
    
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('/assets/img/apple-icon.png')); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('/assets/img/favicon.png')); ?>">
    <title>
        Admin-batipro
    </title>
    <!-- Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?php echo e(asset('/assets/css/nucleo-icons.css" rel="stylesheet')); ?>" />
    <link href="<?php echo e(asset('/assets/css/nucleo-svg.css" rel="stylesheet')); ?>" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?php echo e(asset('/assets/css/nucleo-svg.css" rel="stylesheet')); ?>" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?php echo e(asset('/assets/css/soft-ui-dashboard.css')); ?>" rel="stylesheet" />
    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <?php echo \Livewire\Livewire::styles(); ?>


</head>

<body class="g-sidenav-show bg-gray-100">

    <?php echo e($slot); ?>


    <!--   Core JS Files   -->
    <script src="<?php echo e(asset('/assets/js/core/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/core/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/plugins/smooth-scrollbar.min.js')); ?>"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo e(asset('/assets/js/soft-ui-dashboard.min.js?v=1.0.2')); ?>"></script>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html>
<?php /**PATH /home/styve/dev/laravel/batipro/resources/views/layouts/base.blade.php ENDPATH**/ ?>