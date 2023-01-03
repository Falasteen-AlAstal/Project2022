<?php $__env->startSection('title'); ?>
    Bookshop - Cart page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card my-4">
            <div class="card-header bg-dark text-white">
                <h4><i class="fas fa-shopping-cart"></i> Shopping cart</h4>
            </div>
            <div class="card-body">
                <?php echo $__env->make('layouts.includes.flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php if(Cart::content()->count()): ?>
                <table class="table table-borderless">
                <thead class="bg-light">
                <tr>
                  <th></th>
                  <th scope="col">Image</th>
                  <th scope="col">Title</th>
                  <th scope="col">Price</th>
                  <th scope="col" width="100">Quantity</th>
                  <th scope="col">Sub total</th>
                </tr>
                </thead>
                    <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tbody>
                    <tr class="border-bottom">
                      <td><a href="<?php echo e(route('cart.delete' ,['id' => $item->rowId])); ?>" class="text-danger" title="Remove cart item"><i class="fas fa-times"></i></a></td>

                      <td><img src="<?php echo e(asset('assets/img/'.$item->options->image->file)); ?>" alt="" width="50"></td>

                      <td><?php echo e($item->name); ?></td>

                      <td>&#8369;<?php echo e($item->price); ?></td>

                      <td>
                        <span class="quantity-input mr-2 mb-2 d-flex flex-row">
                            <a href="<?php echo e(route('cart.decrement', ['id' => $item->rowId, 'qty' => $item->qty])); ?>" class="cart-minus">-</a>
                             <input title="QTY" name="quantity" type="text" value="<?php echo e($item->qty); ?>" class="qty-text">
                            <a href="<?php echo e(route('cart.increment', ['id' => $item->rowId, 'qty' => $item->qty, 'book_id'=> $item->id])); ?>" class="cart-plus">+</a>
                        </span>
                      </td>

                      <td>&#8369;<?php echo e($item->subtotal()); ?></td>
                    </tr>
                    </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                    <tr>
                        <td colspan="4"><a href="<?php echo e(route('all-books')); ?>" class="text-primary">Continue shopping</a></td>
                        <td><strong>Total</strong></td>
                        <td>&#8369;<?php echo e(Cart::total()); ?></td>
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                        <td colspan="2">
                            <a href="<?php echo e(route('cart.checkout')); ?>" class="btn btn-outline-danger btn-sm">Checkout <i class="fas fa-long-arrow-alt-right"></i></a>
                        </td>
                    </tr>
                </tbody>
                </table>
                <?php else: ?>
                    <div class="alert alert-warning">No item found in cart. <a href="<?php echo e(route('all-books')); ?>"> Continue shopping</a></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\Online-Bookshop-with-laravel-master\resources\views/public/cart.blade.php ENDPATH**/ ?>