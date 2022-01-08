<?php $__env->startSection('css_js'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
              
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('front.actus')->html();
} elseif ($_instance->childHasBeenRendered('3NqP82i')) {
    $componentId = $_instance->getRenderedChildComponentId('3NqP82i');
    $componentTag = $_instance->getRenderedChildComponentTagName('3NqP82i');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('3NqP82i');
} else {
    $response = \Livewire\Livewire::mount('front.actus');
    $html = $response->html();
    $_instance->logRenderedChild('3NqP82i', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end/defaut/base', ['title' => 'Actualités BATIPRO63 | ','body_class' => 'projet-realisation blog'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/blog.blade.php ENDPATH**/ ?>