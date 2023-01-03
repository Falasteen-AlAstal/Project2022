<?php $__env->startSection('content'); ?>
    <!-- Slider Area -->
    <section class="welcome-area">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slider-img slider-bg-1"></div>
                    <div class="carousel-caption">
                        <h2>Book of Love</h2>
                        <p class="d-none d-md-block">Let the pain itself be loved, enhanced, adipisicing. The wise man of their labors.
                            Because of the hardships we have in our offices, the practice of cheering for forgiveness will indeed come to pass.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-img slider-bg-2"></div>
                    <div class="carousel-caption">
                        <h2>Books of Sacrifice</h2>
                        <p class="d-none d-md-block">The love of the main character, the adipisic The wise man of their labors, is the suffering itself. Duties due to our distress, the practice of appealing for pardon will be implemented.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-img slider-bg-3"></div>
                    <div class="carousel-caption">
                        <h2>Books of Wisdom</h2>
                        <p class="d-none d-md-block">The love of the main character, the adipisic The wise man of their labors, is the suffering itself. Duties due to our distress, the practice of appealing for pardon will be implemented.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-content">
        <div class="container">
            <div class="row">
                <!-- Sidebar Content -->
                <?php echo $__env->make('layouts.includes.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- //Sidebar End -->
                <div class="col-md-8">
                    <div class="content-area">
                        <div class="card my-4">
                            <div class="card-header bg-dark">
                                <h4><a href="<?php echo e(route('category', 'engineering')); ?>" class="text-white">Engineering Books</a></h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <?php if(! $engineering_books->count()): ?>
                                       <div class="alert alert-warning">No books availble</div>
                                    <?php else: ?>
                                        <?php $__currentLoopData = $engineering_books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                    <?php endif; ?>
                                </div>
                                <div class="show-more pt-2 text-right">
                                    <a href="<?php echo e(route('category', 'engineering')); ?>" class="text-secondary">See More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card my-4">
                            <div class="card-header bg-dark">
                                <h4><a href="<?php echo e(route('category', 'literature')); ?>" class="text-white">Literature Books</a></h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <?php if(! $literature_books->count()): ?>
                                        <div class="alert alert-warning">No books availble</div>
                                    <?php else: ?>
                                        <?php $__currentLoopData = $literature_books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                    <?php endif; ?>
                                </div>
                                <div class="show-more pt-2 text-right">
                                    <a href="<?php echo e(route('category', 'literature')); ?>" class="text-secondary">See More <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="discount-book mb-5" id="discount-books">
        <div class="container">
            <div class="card mb-10">
                <div class="card-header bg-dark text-white">
                    <h4><a href="<?php echo e(route('discount-books')); ?>" class="text-white">Discount's Book</a></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php if(! $discount_books->count()): ?>
                            <div class="alert alert-warning">No books available</div>
                        <?php else: ?>
                            <?php $__currentLoopData = $discount_books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-2 col-6">
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
                        <?php endif; ?>
                    </div>
                    <div class="show-more pt-2 text-right">
                        <a href="<?php echo e(route('discount-books')); ?>" class="text-secondary">See More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\Online-Bookshop-with-laravel-master\resources\views/public/home.blade.php ENDPATH**/ ?>