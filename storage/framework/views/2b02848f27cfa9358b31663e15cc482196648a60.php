<?php $__env->startSection('content'); ?>
    <div class="container">
        <h4 class="my-4 p-3 bg-light">Profile</h4>

        <div class="row">
            <div class="col-lg-6">
                    <div class="card card-body my-3 d-flex flex-row">
                        <div class="user-avatar mr-3">
                            <img src="<?php echo e(Auth::user()->image? Auth::user()->image_url:Auth::user()->default_img); ?>" width="100" alt="">
                        </div>

                        <div class="user-info">
                            <h5 class="my-3"><?php echo e(Auth::user()->name); ?></h5>
                            <p><i class="fas fa-envelope mr-2"></i> <?php echo e(Auth::user()->email); ?></p>
                            <p><i class="fas fa-clock mr-2"></i> <?php echo e(Auth::user()->created_at? Auth::user()->created_at->diffForHumans(): ''); ?> </p>
                        </div>
                    </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-body my-3">
                    <h6>Activities</h6>
                    <p><a href="<?php echo e(route('user.orders')); ?>" class="mr-2"><i class="fas fa-shopping-basket mr-1"></i> Orders</a> <?php echo e(Auth::user()->orders? Auth::user()->orders->count(): 'No order yet'); ?></p>
                    <p><a href="<?php echo e(route('user.reviews')); ?>" class="mr-2"><i class="fas fa-comments mr-1"></i> Reviews</a> <?php echo e(Auth::user()->reviews? Auth::user()->reviews->count(): 'No review yet'); ?></p>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\Online-Bookshop-with-laravel-master\resources\views/public/users/profile.blade.php ENDPATH**/ ?>