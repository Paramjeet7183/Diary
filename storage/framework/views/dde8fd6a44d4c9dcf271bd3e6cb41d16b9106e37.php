
<?php $__env->startSection('content'); ?>
<div class="container">
<form action="private-diary" method="post">
<?php echo csrf_field(); ?>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Title</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="title" name="title" required>
   </div>
   <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Story</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="story" name="story" required></textarea>
   </div>
   <button type="submit" class="btn btn-warning btn-lg">Create</button>
   </form>
   </div>
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wdiary-app\resources\views/private-diary.blade.php ENDPATH**/ ?>