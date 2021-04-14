
<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="pull-xs-left">
       Personal Notes
    </h1>
    <div class="pull-xs-right">
        <a class="btn btn-primary" href="<?php echo e(url('/addprivate')); ?>" role="button">
         New Diary +
        </a>
        <p><?php echo e(session('data')['title']); ?></p>
    </div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wdiary-app\resources\views//private.blade.php ENDPATH**/ ?>