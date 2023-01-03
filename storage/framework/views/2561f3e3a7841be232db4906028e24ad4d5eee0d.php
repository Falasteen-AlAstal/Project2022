
<?php if(session('logout_message')): ?>
    <div class="alert alert-info">
        <div class="container">
            <?php echo e(session('logout_message')); ?>

        </div>
    </div>
<?php endif; ?>
<?php if(session('success_message')): ?>
    <div class="alert alert-info my-3"><?php echo e(session('success_message')); ?></div>
<?php endif; ?>

<?php if(session('alert_message')): ?>
    <div class="alert alert-danger my-3"><?php echo e(session('alert_message')); ?></div>
<?php endif; ?>

<?php if(session('cart_alert')): ?>
    <div class="text-danger my-2"><strong><?php echo e(session('cart_alert')); ?></strong></div>
<?php endif; ?>
<?php /**PATH C:\laravel\Online-Bookshop-with-laravel-master\resources\views/layouts/includes/flash-message.blade.php ENDPATH**/ ?>