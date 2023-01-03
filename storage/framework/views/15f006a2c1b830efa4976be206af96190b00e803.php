<?php $__env->startSection('title'); ?>
Bookshop - About
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>




<div class="my-4 p-3 bg-dark text-white"><h4 class="m-0">About</h4></div>
        
      <!-- about -->
      <div class="about ">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="titlepage  mt-7">
                     <h2 >About Our Company</h2>
                     <span class="font-size 30px">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised</span>
                     <a class="read_more" href="Javascript:void(0)"> Read More</a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="<?php echo e(asset('/')); ?>assets/img/bookabout.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>


      
     
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\BookStoreProject2022\resources\views/public/about.blade.php ENDPATH**/ ?>