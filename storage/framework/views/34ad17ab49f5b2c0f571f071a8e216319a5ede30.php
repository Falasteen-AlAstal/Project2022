<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Add new book</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Book create form</h6>
            </div>
            <div class="card-body">
                <?php echo Form::open(['method'=>'POST', 'action'=>'Admin\AdminBooksController@store', 'files'=>true ,'enctype'=>'multipart/form-data' ]); ?>


                <div class="form-group">
                    <?php echo Form::label('title'); ?>

                    <?php echo Form::text('title', null, ['class'=>'form-control '.($errors->has('title')? 'is-invalid': '')]); ?>

                    <?php if($errors->has('title')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('title')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <?php echo Form::label('slug'); ?>

                    <?php echo Form::text('slug', null, ['class'=>'form-control '.($errors->has('slug')? 'is-invalid': '')]); ?>

                    <?php if($errors->has('slug')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('slug')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <?php echo Form::label('description'); ?>

                    <?php echo Form::textarea('description', null, ['class'=>'form-control '.($errors->has('description')? 'is-invalid': ''), 'rows'=>10]); ?>

                    <?php if($errors->has('description')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('description')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <?php echo Form::label('author_id', 'Author'); ?>

                    <?php echo Form::select('author_id', App\Author::pluck('name', 'id'), null,['placeholder'=>'Select author','class'=>'form-control '.($errors->has('author_id')? 'is-invalid': '')]); ?>

                    <?php if($errors->has('author_id')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('author_id')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <?php echo Form::label('category_id', 'Category'); ?>

                    <?php echo Form::select('category_id', App\Category::pluck('name', 'id'), null,['placeholder'=>'Select category','class'=>'form-control '.($errors->has('category_id')? 'is-invalid': '')]); ?>

                    <?php if($errors->has('category_id')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('category_id')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <?php echo Form::label('init_price', 'Regular Price'); ?>

                    <?php echo Form::text('init_price', null, ['class'=>'form-control '.($errors->has('init_price')? 'is-invalid': '')]); ?>

                    <?php if($errors->has('init_price')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('init_price')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <?php echo Form::label('discount_rate', 'Discount Rate'); ?>

                    <?php echo Form::text('discount_rate', null, ['class'=>'form-control '.($errors->has('discount_rate')? 'is-invalid': '')]); ?>

                    <?php if($errors->has('discount_rate')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('discount_rate')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <input type="hidden" name="price">

                <div class="form-group">
                    <?php echo Form::label('quantity'); ?>

                    <?php echo Form::text('quantity', null, ['class'=>'form-control '.($errors->has('quantity')? 'is-invalid': '')]); ?>

                    <?php if($errors->has('quantity')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('quantity')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <?php echo Form::label('image_id', 'Book Image'); ?>

                    <?php echo Form::file('image_id', ['class'=>'form-control '.($errors->has('image_id')? 'is-invalid': '')]); ?>

                    <small>Max size 1MB</small>
                    <?php if($errors->has('image_id')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('image_id')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <?php echo Form::submit('Create', ['class'=>'btn btn-primary']); ?>

                    <?php echo Form::reset('Reset', ['class'=>'btn btn-danger']); ?>

                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        /*
         making slug automatically
        */
        $('#title').on('blur', function() {
            var theTitle = this.value.toLowerCase().trim(),
                slugInput = $('#slug');
            theSlug = theTitle.replace(/&/g, '-and-')
                .replace(/[^a-z$0-9-]+/g, '-')
                .replace(/\-\-+/g, '-')
                .replace(/^-+|-+$/g, '')

            slugInput.val(theSlug);
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\Online-Bookshop-with-laravel-master\resources\views/admin/books/create.blade.php ENDPATH**/ ?>