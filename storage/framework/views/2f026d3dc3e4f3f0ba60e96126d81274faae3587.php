<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="my-4 p-3 bg-dark text-white"><h4 class="m-0">Checkout Page</h4></div>
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-product">
                    <h4><a href="<?php echo e(route('cart')); ?>" title="Back to cart" class="text-danger"><i class="fas fa-shopping-basket" ></i></a> Your orders</h4>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Book</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Sub Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($item->name); ?></td>
                            <td><?php echo e($item->qty); ?></td>
                            <td>&#8369;<?php echo e($item->price); ?></td>
                            <td>&#8369;<?php echo e($item->subtotal()); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="billing-address my-4">
                    <div class="p-3 bg-light my-4"><h4 class="m-0">Billing address</h4></div>

                    <form action="<?php echo e(route('cart.proceed')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <input type="text" name="shipping_name" class="form-control <?php echo e($errors->has('shipping_name')? 'is-invalid' : ''); ?>" value="<?php echo e(Auth::user()? Auth::user()->name : ''); ?>" placeholder="Name">

                            <?php if($errors->has('shipping_name')): ?>
                                <span class="invalid-feedback"><strong><?php echo e($errors->first('shipping_name')); ?></strong></span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <input type="text" name="mobile_no" class="form-control <?php echo e($errors->has('mobile_no') ? 'is-invalid': ''); ?>" placeholder="Mobile number">

                            <?php if($errors->has('mobile_no')): ?>
                                <span class="invalid-feedback">
                                    <strong><?php echo e($errors->first('mobile_no')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <textarea name="address" class="form-control <?php echo e($errors->has('address')? 'is-invalid' : ''); ?>" placeholder="Shipping Address" cols="30" rows="5"></textarea>
                            <?php if($errors->has('address')): ?>
                                <span class="invalid-feedback">
                                    <strong><?php echo e($errors->first('address')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>

                        <div class="payment-area my-4 py-5 px-3 bg-light">
                            <input type="submit" value="Proceed to payment" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart-summary my-3">
                    <div class="card">
                        <div class="card-header">
                            <h4>Order summary</h4>
                        </div>
                        <div class="card-body">
                            <p>Total products = <?php echo e(Cart::content()->count()); ?></p>
                            <p>Product Cost = &#8369;<?php echo e(Cart::total()); ?></p>
                            <p>Shipping cost = &#8369;0.00 </p>
                            <p><strong>Total cost = &#8369;<?php echo e(Cart::total()); ?></strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\Online-Bookshop-with-laravel-master\resources\views/public/checkout-page.blade.php ENDPATH**/ ?>