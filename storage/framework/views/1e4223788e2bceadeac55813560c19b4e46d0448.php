<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Add new user</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">User create form</h6>
            </div>
            <div class="card-body">
                <?php echo Form::open(['method'=>'POST', 'action'=>'Admin\AdminUsersController@store', 'files'=>true]); ?>


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
                    <?php echo Form::label('email'); ?>

                    <?php echo Form::text('email', null, ['class'=>'form-control '.($errors->has('email')? 'is-invalid': '')]); ?>

                    <?php if($errors->has('email')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <?php echo Form::label('password'); ?>

                    <?php echo Form::password('password',['class'=>'form-control '.($errors->has('password')? 'is-invalid': '')]); ?>

                    <?php if($errors->has('password')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <?php echo Form::label('password_confirmation', 'Confirm Password'); ?>

                    <?php echo Form::password('password_confirmation',['class'=>'form-control']); ?>

                </div>

                <div class="form-group">
                    <?php echo Form::label('role_id', 'Role'); ?>

                    <?php echo Form::select('role_id', App\Role::pluck('name', 'id'), null, ['placeholder'=>'Select Role','class'=>'form-control '.($errors->has('role_id')? 'is-invalid': '')]); ?>

                    <?php if($errors->has('role_id')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('role_id')); ?></strong>
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
                <input type="hidden" name="is_active" value="1">

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

<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\BookStoreProject2022\resources\views/admin/user/create.blade.php ENDPATH**/ ?>