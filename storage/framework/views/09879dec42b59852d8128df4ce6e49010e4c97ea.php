<?php $__env->startSection('content'); ?>
    <div class="container" style="">
        <section class="registration-area my-5" >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center"><?php echo e(__('Register Account')); ?></h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="<?php echo e(url('/register')); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="form-control <?php echo e($errors->has('name')? 'is-invalid': ''); ?>">

                                        <?php if($errors->has('name')): ?>
                                            <span class="invalid-feedback">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control <?php echo e($errors->has('email')? 'is-invalid': ''); ?>">

                                        <?php if($errors->has('email')): ?>
                                            <span class="invalid-feedback">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control <?php echo e($errors->has('password')? 'is-invalid': ''); ?>">
                                        <?php if($errors->has('password')): ?>
                                            <span class="invalid-feedback">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm password">Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-block btn-md">Register</button>
                                    </div>
                                </form>
                                <small>Already have an account? <a href="<?php echo e(url('login')); ?>">Login here</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\BookStoreProject2022\resources\views/auth/register.blade.php ENDPATH**/ ?>