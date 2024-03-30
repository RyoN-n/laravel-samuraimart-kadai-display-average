
 
 <?php $__env->startSection('content'); ?>
 <div class="container pt-5">
     <div class="row justify-content-center">
         <div class="col-xl-9">
             <h1 class="mb-5">ご注文内容</h1>
 
             <h5 class="fw-bold mb-3">購入商品</h5>
 
             <div class="row justify-content-between">
                 <div class="col-lg-7">
                     <hr class="mt-0 mb-4">
 
                     <div class="mb-5">
                         <?php if($cart->isEmpty()): ?>
                             <div class="row">
                                 <p class="mb-0">カートの中身は空です。</p>
                             </div>
                         <?php else: ?>
                             <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <div class="row align-items-center mb-2">
                                     <div class="col-md-3">
                                         <a href="<?php echo e(route('products.show', $product->id), false); ?>">
                                             <?php if($product->options->image): ?>
                                                 <img src="<?php echo e(asset($product->options->image), false); ?>" class="img-thumbnail">
                                             <?php else: ?>
                                                 <img src="<?php echo e(asset('img/dummy.png'), false); ?>" class="img-thumbnail">
                                             <?php endif; ?>
                                         </a>
                                     </div>
                                     <div class="col-md-9">
                                         <div class="flex-column">
                                             <p class="fs-5 mb-2">
                                                 <a href="<?php echo e(route('products.show', $product->id), false); ?>" class="link-dark text-decoration-none"><?php echo e($product->name, false); ?></a>
                                             </p>
                                             <div class="row mb-2">
                                                 <div class="col-xxl-3">
                                                     数量：<?php echo e(number_format($product->qty), false); ?>

                                                 </div>
                                                 <div class="col-xxl-9">
                                                     合計：￥<?php echo e(number_format($product->qty * $product->price), false); ?>

                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         <?php endif; ?>
                     </div>
 
                     <h5 class="fw-bold mb-3">お届け先</h5>
 
                     <hr class="mb-4">
 
                     <div class="mb-5">
                         <p class="mb-2"><?php echo e(Auth::user()->name, false); ?> 様</p>
                         <p class="mb-2">〒<?php echo e(Auth::user()->postal_code . ' ' . Auth::user()->address, false); ?></p>
                         <p class="mb-2"><?php echo e(Auth::user()->phone, false); ?></p>
                         <p><?php echo e(Auth::user()->email, false); ?></p>
                     </div>
                 </div>
                 <div class="col col-xxl-4">
                     <div class="bg-white p-4 mb-4">
                         <div class="row mb-2">
                             <div class="col-md-5">
                                 小計
                             </div>
                             <div class="col-md-7">
                                 ￥<?php echo e(number_format($total - $carriage_cost), false); ?>

                             </div>
                         </div>
 
                         <div class="row mb-3">
                             <div class="col-md-5">
                                 送料
                             </div>
                             <div class="col-md-7">
                                 ￥<?php echo e(number_format($carriage_cost), false); ?>

                             </div>
                         </div>
 
                         <div class="row">
                             <div class="col-5">
                                 <span class="fs-5 fw-bold">合計</span>
                             </div>
                             <div class="col-7 d-flex align-items-center">
                                 <span class="fs-5 fw-bold">￥<?php echo e(number_format($total), false); ?></span><span class="small">（税込）</span>
                             </div>
                         </div>
                     </div>
 
                     <div class="mb-4">
                         <?php if($total > 0): ?>
                             <form action="<?php echo e(route('checkout.store'), false); ?>" method="POST">
                                 <?php echo csrf_field(); ?>
                                 <button type="submit" class="btn samuraimart-submit-button text-white w-100">お支払い</a>
                             </form>
                         <?php else: ?>
                             <button class="btn samuraimart-submit-button disabled w-100">お支払い</button>
                         <?php endif; ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-samuraimart\resources\views/checkout/index.blade.php ENDPATH**/ ?>