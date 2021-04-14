<style>

body{
        background-image: url("/images/h.jpg");
        background-size:cover;
      background-position:center;
        background-repeat: no-repeat;
}
.center1{
     margin-top:12vh;
}
</style>

<?php $__env->startSection('content'); ?>
<div class="container">

<form action="save-diary" method="post" class="center1">
<?php echo csrf_field(); ?>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label text-warning"> <h4>Title</h4></label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="title" name="title" >
      <span class="text-danger"><?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
   </div>
   
   <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label text-warning"><h4>Story</h4></label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="story" name="story" ></textarea>
   <span class="text-danger"><?php $__errorArgs = ['story'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
   </div>
   <button type="submit" class="btn btn-primary btn-lg">Create</button>
   </form>
   </div>
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wdiary-app\resources\views/add-diary.blade.php ENDPATH**/ ?>