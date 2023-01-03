<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Add new author</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Author create form</h6>
            </div>
            <div class="card-body">
                <?php echo Form::open(['method'=>'POST', 'action'=>'Admin\AdminAuthorsController@store', 'files'=>true]); ?>

                <div class="form-group">
                    <?php echo Form::label('name'); ?>

                    <?php echo Form::text('name', null, ['class'=>'form-control '.($errors->has('name')? 'is-invalid': '')]); ?>

                    <?php if($errors->has('name')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('name')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <?php echo Form::label('slug'); ?>

                    <?php echo Form::text('slug', null, ['class'=>'form-control '.($errors->has('slug')? 'is-invalid':'')]); ?>


                    <?php if($errors->has('slug')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('slug')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <?php echo Form::label('bio'); ?>

                    <?php echo Form::textarea('bio', null, ['class'=>'form-control '.($errors->has('bio')? 'is-invalid':''), 'rows'=> 5]); ?>


                    <?php if($errors->has('bio')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('bio')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <?php echo Form::label('image_id', 'Image'); ?>

                    <?php echo Form::file('image_id', ['class'=>'form-control '.($errors->has('image_id')? 'is-invalid':''), 'rows'=> 5]); ?>

                    <small>Max size 500 KB</small>
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
        $('#name').on('blur', function() {
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

<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\Online-Bookshop-with-laravel-master\resources\views/admin/author/create.blade.php ENDPATH**/ ?>