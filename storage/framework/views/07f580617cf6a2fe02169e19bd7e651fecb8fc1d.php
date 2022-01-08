<?php $__env->startSection('css_js'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
              
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('avisvideo')->html();
} elseif ($_instance->childHasBeenRendered('ZMVRtIT')) {
    $componentId = $_instance->getRenderedChildComponentId('ZMVRtIT');
    $componentTag = $_instance->getRenderedChildComponentTagName('ZMVRtIT');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ZMVRtIT');
} else {
    $response = \Livewire\Livewire::mount('avisvideo');
    $html = $response->html();
    $_instance->logRenderedChild('ZMVRtIT', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end/defaut/base', ['title' => 'avis et vidéo BATIPRO63 | ','body_class' => 'projet-realisation blog'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/styve/dev/laravel/batipro/resources/views/front-end/temoignage.blade.php ENDPATH**/ ?>