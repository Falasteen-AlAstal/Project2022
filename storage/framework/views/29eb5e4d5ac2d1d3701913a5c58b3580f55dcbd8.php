<?php $__env->startSection('title'); ?>
    Bookshop - All books
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="content-area">
                        <?php if($term = request('term')): ?>
                            <div class="alert alert-info my-3">
                                Search result for <strong><?php echo e($term); ?></strong>
                            </div>
                        <?php endif; ?>
                        <?php if(! $books->count()): ?>
                            <div class="alert alert-warning my-4">No books available</div>
                        <?php else: ?>
                            <div class="card my-4">
                                <div class="card-header bg-dark">
                                    <h4 class="text-white">All books</h4>
                                </div>
                                <?php if(isset($categoryName)): ?>
                                    <div class="alert alert-info m-3">
                                        Books from <strong><?php echo e($categoryName); ?></strong>
                                    </div>
                                <?php endif; ?>
                                <?php if(isset($authorName)): ?>
                                    <div class="alert alert-info m-3">
                                        Writer <strong><?php echo e($authorName); ?></strong>
                                    </div>
                                <?php endif; ?>
                                <?php if(isset($discountTitle)): ?>
                                    <div class="alert alert-info m-3">
                                        <strong><?php echo e($discountTitle); ?></strong>
                                    </div>
                                <?php endif; ?>
                                <div class="card-body">
                                    <div class="row">
                                        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-lg-3 col-6">
                                                <div class="book-wrap">
                                                    <div class="book-image mb-2">
                                                        <a href="<?php echo e(route('book-details', $book->id)); ?>"><img src="<?php echo e($book->image_url); ?>" alt=""></a>
                                                        <?php if($book->discount_rate): ?>
                                                            <h6><span class="badge badge-warning discount-tag">Discount <?php echo e($book->discount_rate); ?>%</span></h6>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="book-title mb-2">
                                                        <a href="<?php echo e(route('book-details', $book->id)); ?>"><?php echo e(str_limit($book->title, 30)); ?></a>
                                                    </div>
                                                    <div class="book-author mb-2">
                                                        <small>By <a href="<?php echo e(route('author', $book->author->slug)); ?>"><?php echo e($book->author->name); ?></a></small>
                                                    </div>
                                                    <div class="pbook-price mb-3">
                                                        <?php if($book->discount_rate): ?>
                                                            <span class="line-through mr-3">&#8369;<?php echo e($book->init_price); ?></span>
                                                        <?php endif; ?>
                                                        <span class=""><strong>&#8369;<?php echo e($book->price); ?></strong></span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="show-more pt-2 text-right">
                                        <nav class="text-center">
                                            <?php echo e($books->appends(request()->only(['term']))->render()); ?>

                                        </nav>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Sidebar -->
                <?php echo $__env->make('layouts.includes.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- Sidebar end -->
                </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\BookStoreProject2022\resources\views/public/book-page.blade.php ENDPATH**/ ?>