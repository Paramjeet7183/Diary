<style>
    .d1{
        height:90vh;
        background: white;
    }
    .d2{
        height:90vh;
        background-image: url("/images/contactus.jpg");
        background-size:cover;
        background-repeat: no-repeat;
    }
    .middle{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    form {
  width: 710px;
  margin-left: 20vw;
  height: 208px;
  display: flex;
  justify-content: space-between;
}

h2 {
  margin-bottom: 80px;
  margin-left: 82px;
  font-family: 'Open Sans', sans-serif;
  font-weight: 700;
  font-size: 24px;
}

.left-form {
 width: 224px;
 display: block;
}

input {
  width: 224px;
  padding-bottom: 1em;
  border: none;
  border-bottom: 1px solid #2E2F22;
  font-size: 16px;
    outline: none;

}

    textarea {
  width: 224px;
  padding-bottom: 1em;
  border: none;
  border-bottom: 1px solid #2E2F22;
  font-size: 16px;
        outline: none;

}
.mess-input {
  margin-top: 10px;
}

button {
  margin-top: 50px;
  width: 224px;
  height: 45px;
  background: none;
  border-radius: 10px;
  font-size: 16px;
  border: 1px solid #2E2F22;
  box-sizing: border-box;
}
    .top{
        margin-top:5vh;
        margin-left:15vh ;
        margin-bottom:30vh;
    }
    .top p{
        font-weight: bold;
        color:black;
        font-size:5vh;
    }
    a{
        text-decoration: none;
    }
   </style>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
<div class="row">
<div class="d1 col-lg-4">
       <div class="top">
       <a class="btn btn-primary" href="tel:+919729893060" role="button"><img src="/images/telephone.png" height="32px" width="32px"></a>
        <a class="btn btn-primary" href="mailto:dkdineshyadav19@gmail.com" role="button"><img src="/images/gmail.png" height="32px" width="32px"></a>
        </div>
        <div class="middle">
           <form action="check" method="post" >
           <?php echo csrf_field(); ?>
      <div class="left-form">
      <input class="email-input" type="text" name="email" id="email" placeholder="email">
      <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
  <textarea rows="6" placeholder="message" id="message" name="message" class="mess-input"></textarea>
  <span class="text-danger"><?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
      <button type="submit">Send</button>
      <div class="m-3">
        
       </div>
    </div>
   
  </form>
        </div>
    </div>
<div class="d2 col-lg-8"></div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\wdiary-app\resources\views/contact.blade.php ENDPATH**/ ?>