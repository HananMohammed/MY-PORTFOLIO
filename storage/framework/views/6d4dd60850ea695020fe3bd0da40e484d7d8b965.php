<?php $__env->startSection('title',__('front.home')); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('front.slider.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\MY-PORTFOLIO\resources\views/front/index.blade.php ENDPATH**/ ?>