
 
 <?php $__env->startSection('content'); ?>
 <div class="container pt-5">
     <div class="row justify-content-center">
         <div class="col-md-5">
             <h1 class="text-center mb-3">ご注文ありがとうございます！</h3>
 
             <p class="text-center lh-lg mb-5">
                 商品が到着するまでしばらくお待ち下さい。
             </p>
 
             <div class="text-center">
                 <a href="<?php echo e(url('/'), false); ?>" class="btn samuraimart-submit-button w-75 text-white">トップページへ</a>
             </div>
         </div>
     </div>
 </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-samuraimart\resources\views/checkout/success.blade.php ENDPATH**/ ?>