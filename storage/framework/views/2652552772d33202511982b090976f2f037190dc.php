<?php $__env->startSection('css_js'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
              
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('front.actus')->html();
} elseif ($_instance->childHasBeenRendered('IoMPsAx')) {
    $componentId = $_instance->getRenderedChildComponentId('IoMPsAx');
    $componentTag = $_instance->getRenderedChildComponentTagName('IoMPsAx');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('IoMPsAx');
} else {
    $response = \Livewire\Livewire::mount('front.actus');
    $html = $response->html();
    $_instance->logRenderedChild('IoMPsAx', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end/defaut/base', ['title' => 'Actualités BATIPRO63 | ','body_class' => 'projet-realisation blog'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/blog.blade.php ENDPATH**/ ?>