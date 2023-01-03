<?php $__env->startSection('content'); ?>
<div class="container" style="">
    <section class="login-area my-5" >
        <div class="container">
            <?php echo $__env->make('layouts.includes.flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Account Login</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?php echo e(url('/login')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" value="<?php echo e(old('email')); ?>" class="form-control <?php echo e($errors->has('email')? 'is-invalid': ''); ?> form-control-sm">

                                    <?php if($errors->has('email')): ?>
                                        <span class="invalid-feedback">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control <?php echo e($errors->has('password')? 'is-invalid': ''); ?> form-control-sm">
                                    <?php if($errors->has('password')): ?>
                                        <span class="invalid-feedback">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                    <?php endif; ?>

                                    <div><small><a href="#" class="text-muted">Forget password</a></small></div>

                                </div>
                                <div class="checkbox icheck">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-block btn-md">Login</button>
                                </div>
                            </form>
                            <small>Don't have an account? <a href="<?php echo e(route('register')); ?>">Register here</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\Online-Bookshop-with-laravel-master\resources\views/auth/login.blade.php ENDPATH**/ ?>