<div class="comments-section">
    <div class="card card-body my-4" id="review-section">
        <div class="comments-area">
            <h4 class="text-center mb-2"><i class="fas fa-comments"></i> <?php echo e($book_reviews->count()); ?> <?php echo e(str_plural('Review', $book_reviews->count())); ?></h4>
            <?php $__currentLoopData = $book_reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="single-comment my-2">
                <div class="card card-body bg-light">
                    <div class="author-info mb-2 d-flex flex-row">
                        <div class="comment-user-img mr-3">
                            <img src="<?php echo e($review->user->image? $review->user->image_url : $book->default_img); ?>" alt="" width="60">
                        </div>
                        <div>
                            <h5><?php echo e($review->user->name); ?></h5>
                            <small><i class="fas fa-clock"></i> <?php echo e($review->created_at->diffForHumans()); ?></small>
                        </div>
                    </div>
                    <p><?php echo Markdown::convertToHtml(e($review->body)); ?></p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class="card card-body my-4">
        <?php if(Auth::check()): ?>
            <div class="comment-form">
                <h4 class="text-center">Leave a review</h4>
                <form action="<?php echo e(route('book.review', $book->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <textarea id="" name="body"  rows="5" class="form-control <?php echo e($errors->has('body')? 'is-invalid': ''); ?>"></textarea>
                        <?php if($errors->has('body')): ?>
                          <span class="invalid-feedback">
                              <strong><?php echo e($errors->first('body')); ?></strong>
                          </span>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Review</button>
                </form>
            </div>

            <?php else: ?>
            <div><a href="<?php echo e(url('login')); ?>">Login here</a> For leave a review.</div>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\Users\adones\Downloads\Online-Bookshop-with-laravel-master\resources\views/layouts/includes/reviews.blade.php ENDPATH**/ ?>