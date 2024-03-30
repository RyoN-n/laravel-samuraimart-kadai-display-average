
 
 <?php $__env->startSection('content'); ?>
 <div class="container  d-flex justify-content-center mt-3">
     <div class="w-75">
         <h1>お気に入り</h1>
 
         <hr>
 
         <div class="row">
             <?php $__currentLoopData = $favorite_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $favorite_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <div class="col-md-7 mt-2">
                     <div class="d-inline-flex">
                         <a href="<?php echo e(route('products.show', $favorite_product->id), false); ?>" class="w-25">
                            <?php if($favorite_product->image !== ""): ?>
                                 <img src="<?php echo e(asset($favorite_product->image), false); ?>" class="img-fluid w-100">
                            <?php else: ?>
                                 <img src="<?php echo e(asset('img/dummy.png'), false); ?>" class="img-fluid w-100">
                            <?php endif; ?>
                         </a>
                         <div class="container mt-3">
                             <h5 class="w-100 samuraimart-favorite-item-text"><?php echo e($favorite_product->name, false); ?></h5>
                             <h6 class="w-100 samuraimart-favorite-item-text">&yen;<?php echo e($favorite_product->price, false); ?></h6>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-2 d-flex align-items-center justify-content-end">
                     <a href="<?php echo e(route('favorites.destroy', $favorite_product->id), false); ?>" class="samuraimart-favorite-item-delete" onclick="event.preventDefault(); document.getElementById('favorites-destroy-form').submit();">
                         削除
                     </a>
                     <form id="favorites-destroy-form" action="<?php echo e(route('favorites.destroy', $favorite_product->id), false); ?>" method="POST" class="d-none">
                         <?php echo csrf_field(); ?>
                         <?php echo method_field('DELETE'); ?>
                     </form>
                 </div>
                 <div class="col-md-3 d-flex align-items-center justify-content-end">
                     <form method="POST" action="<?php echo e(route('carts.store'), false); ?>" class="m-3 align-items-end">
                         <?php echo csrf_field(); ?>
                         <input type="hidden" name="id" value="<?php echo e($favorite_product->id, false); ?>">
                         <input type="hidden" name="name" value="<?php echo e($favorite_product->name, false); ?>">
                         <input type="hidden" name="price" value="<?php echo e($favorite_product->price, false); ?>">
                         <input type="hidden" name="image" value="<?php echo e($favorite_product->image, false); ?>">
                         <input type="hidden" name="qty" value="1">
                         <input type="hidden" name="weight" value="0">
                         <button type="submit" class="btn samuraimart-favorite-add-cart">カートに入れる</button>
                     </form>
                 </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
 
         <hr>
     </div>
 </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-samuraimart\resources\views/users/favorite.blade.php ENDPATH**/ ?>