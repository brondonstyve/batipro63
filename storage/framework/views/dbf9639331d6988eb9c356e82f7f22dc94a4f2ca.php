<?php $__env->startSection('css_js'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
              
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('front.actus')->html();
} elseif ($_instance->childHasBeenRendered('JTc4cpF')) {
    $componentId = $_instance->getRenderedChildComponentId('JTc4cpF');
    $componentTag = $_instance->getRenderedChildComponentTagName('JTc4cpF');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('JTc4cpF');
} else {
    $response = \Livewire\Livewire::mount('front.actus');
    $html = $response->html();
    $_instance->logRenderedChild('JTc4cpF', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end/defaut/base', ['title' => 'Actualités BATIPRO63 | ','body_class' => 'projet-realisation blog'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/app/laravel/batipro/resources/views/front-end/blog.blade.php ENDPATH**/ ?>