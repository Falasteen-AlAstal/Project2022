<?php $__env->startSection('title'); ?>
Bookshop - Book details
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="content-area">
                        <div class="card my-4">
                            <div class="card-header bg-dark">
                                <h4 class="text-white">Book Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-4">
                                        <div class="book-img-details">
                                            <img src="<?php echo e($book->image_url); ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="book-title">
                                            <h5><?php echo e($book->title); ?></h5>
                                        </div>
                                        <div class="author mb-2">
                                            By <a href="<?php echo e(route('author', $book->author->slug)); ?>"><?php echo e($book->author->name); ?></a>
                                        </div>
                                        <?php if(($book->quantity) > 1): ?>
                                            <div class="badge badge-success mb-2">In Stock</div>
                                        <?php else: ?>
                                            <div class="badge badge-danger mb-2">out of Stock</div>
                                        <?php endif; ?>
                                        <?php if($book->discount_rate): ?>
                                            <h6><span class="badge badge-warning"><?php echo e($book->discount_rate); ?>% Discount</span></h6>
                                        <?php endif; ?>
                                        <div class="book-price mb-2">
                                            <span class="mr-1">Price</span>
                                            <?php if($book->discount_rate): ?>
                                                <span></span><strong class="line-through">&#8369;<?php echo e($book->init_price); ?></strong>
                                            <?php endif; ?>
                                                <span>now</span><strong>&#8369;<?php echo e($book->price); ?></strong>
                                            <?php if($book->discount_rate): ?>
                                                <div><strong class="text-danger">Save &#8369;<?php echo e($book->init_price - $book->price); ?></strong></div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="book-category mb-2 py-1 d-flex flex-row border-top border-bottom">
                                            <a href="<?php echo e(route('category', $book->category->slug)); ?>" class="mr-4"><i class="fas fa-folder"></i> <?php echo e($book->category->name); ?></a>
                                            <a href="#review-section" class="mr-4"><i class="fas fa-comments"></i> Reviews</a>
                                        </div>

                                        <form action="<?php echo e(route('cart.add')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <div class="cart">
                                            <span class="quantity-input mr-2 mb-2">
                                                <a href="#" class="cart-minus" id="cart-minus">-</a>
                                                <input title="QTY" name="quantity" type="text" value="1" class="qty-text">
                                                <a href="#" class="cart-plus" id="cart-plus">+</a>
                                            </span>
                                                <input type="hidden" name="book_id" value="<?php echo e($book->id); ?>">

                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-shopping-cart"></i> Add to cart</button>
                                            </div>
                                        </form>
                                        <?php echo $__env->make('layouts.includes.flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="book-description p-3">
                                        <p><?php echo Markdown::convertToHtml(e($book->description)); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-body my-4">
                            <div class="author-description d-flex flex-row">
                                <div class="author-img mr-4">
                                    <img src="<?php echo e($book->author->image? $book->author->image_url : $book->default_img); ?>" alt="">
                                </div>
                                <div class="des">
                                    <h5><a href="<?php echo e(route('author', $book->author->slug)); ?>"><?php echo e($book->author->name); ?></a></h5>
                                    <small>
                                        <a href="<?php echo e(route('author', $book->author->slug)); ?>">
                                            <i class="fas fa-book"></i>
                                            <?php echo e($book->author->books()->count()); ?>

                                            <?php echo e(str_plural('Book', $book->author->books()->count())); ?>

                                        </a>
                                    </small>
                                    <p><?php echo Markdown::convertToHtml(e($book->author->bio)); ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- COMMENTS HERE -->
                        <?php echo $__env->make('layouts.includes.reviews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <!-- Sidebar -->
                    <?php echo $__env->make('layouts.includes.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- Sidebar end -->
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\adones\Downloads\Online-Bookshop-with-laravel-master\resources\views/public/book-details.blade.php ENDPATH**/ ?>