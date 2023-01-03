<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title', 'Bookshop - Home'); ?></title>
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo e(asset('/')); ?>assets/img/favicon.png" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>assets/css/all.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>assets/css/bootstrap.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>assets/css/style.css">
</head>
<body>
<!-- NAVBAR -->
    <?php echo $__env->make('layouts.includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- NAVBAR END -->
<!-- HEADER -->
<section class="header py-2 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="headings">
                    <h3><a href="<?php echo e(route('bookshop.home')); ?>" class="text-secondary"><b class="text-danger">Book</b> Shop</a></h3>
                </div>
            </div>
            <div class="col-md-4">
                <form action="<?php echo e(route('all-books')); ?>">
                    <div class="input-group input-group-sm m-1">
                        <input type="text" name="term" value="<?php echo e(request('term')); ?>" class="form-control" placeholder="Search Book..">
                        <div class="input-group-append">
                            <button class="btn btn-danger" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="shopping-cart text-right">
                    <a href="<?php echo e(route('cart')); ?>" class="text-danger"><i class="fas fa-shopping-cart fa-2x m-1"></i>
                        <?php if(Cart::content()->count()): ?>
                            <span class="count-cart"><?php echo e(Cart::content()->count()); ?></span>
                        <?php endif; ?>
                    </a>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- HEADER END -->

<?php echo $__env->yieldContent('content'); ?>

<footer class="py-3 text-center border-top bg-light">
    <div class="container">
        <div class="go-to-top mb-2">
            <a href="#nav-top" class="text-muted" title="Go to top"><i class="fas fa-angle-double-up"></i></a>
        </div>
        <div class="footer-text">
            Copyright &copy; Bookshop Management System. All Right Reserved. <span id="year"></span>
        </div>
        <div class="social-icon mt-2">
        <span class="mr-2">
          <a href="#" class="text-primary"><i class="fab fa-facebook fa-2x"></i></a>
        </span>
            <span class="mr-2">
          <a href="#" class="text-secondary"><i class="fab fa-github fa-2x"></i></a>
        </span>
            <span class="mr-2">
          <a href="#" class="text-warning"><i class="fab fa-stack-overflow fa-2x"></i></a>
        </span>
        </div>
    </div>
</footer>



<!-- jQuery -->
<script type="text/javascript" src="<?php echo e(asset('/')); ?>assets/js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?php echo e(asset('/')); ?>assets/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo e(asset('/')); ?>assets/js/bootstrap.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript" src="<?php echo e(asset('/')); ?>assets/js/script.js"></script>

</body>
</html>
<?php /**PATH C:\Users\adones\Downloads\Online-Bookshop-with-laravel-master\resources\views/layouts/master.blade.php ENDPATH**/ ?>