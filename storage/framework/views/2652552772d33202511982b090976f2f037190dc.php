<?php $__env->startSection('css_js'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
              
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('front.actus')->html();
} elseif ($_instance->childHasBeenRendered('JZ0xe1j')) {
    $componentId = $_instance->getRenderedChildComponentId('JZ0xe1j');
    $componentTag = $_instance->getRenderedChildComponentTagName('JZ0xe1j');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('JZ0xe1j');
} else {
    $response = \Livewire\Livewire::mount('front.actus');
    $html = $response->html();
    $_instance->logRenderedChild('JZ0xe1j', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end/defaut/base', ['title' => 'Actualités BATIPRO63 | ','body_class' => 'projet-realisation blog'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/blog.blade.php ENDPATH**/ ?>