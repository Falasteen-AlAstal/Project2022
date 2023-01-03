<?php $__env->startSection('content'); ?>

<div class="container-fluid">

<!-- Page Heading -->


<!-- DataTales Example -->
<div class="card shadow mb-4 mt-4  ">

    <div class="card-body ">
        <?php echo Form::open(['method'=>'POST', 'action'=>'MessagesController@store', 'files'=>true ,'enctype'=>'multipart/form-data' ]); ?>


        <div class="form-group">
            <?php echo Form::label('Name'); ?>

            <?php echo Form::text('name', null, ['class'=>'form-control '.($errors->has('name')? 'is-invalid': '')]); ?>

            <?php if($errors->has('name')): ?>
                <span class="invalid-feedback">
                    <strong><?php echo e($errors->first('name')); ?></strong>
                </span>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <?php echo Form::label('Phone'); ?>

            <?php echo Form::text('phone', null, ['class'=>'form-control '.($errors->has('phone')? 'is-invalid': '')]); ?>

            <?php if($errors->has('phone')): ?>
                <span class="invalid-feedback">
                    <strong><?php echo e($errors->first('phone')); ?></strong>
                </span>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <?php echo Form::label('Emai'); ?>

            <?php echo Form::text('email', null, ['class'=>'form-control '.($errors->has('email')? 'is-invalid': '')]); ?>

            <?php if($errors->has('email')): ?>
                <span class="invalid-feedback">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
            <?php endif; ?>
        </div>

        <div class="form-group">
            <?php echo Form::label('Message'); ?>

            <?php echo Form::textarea('message', null, ['class'=>'form-control '.($errors->has('message')? 'is-invalid': ''), 'rows'=>10]); ?>

            <?php if($errors->has('message')): ?>
                <span class="invalid-feedback">
                    <strong><?php echo e($errors->first('message')); ?></strong>
                </span>
            <?php endif; ?>
        </div>

        
   
        <div class="form-group">
            <?php echo Form::submit('Send', ['class'=>'btn btn-primary']); ?>

         
        </div>
        <?php echo Form::close(); ?>

    </div>

  
</div>
<div class="">
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="463" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
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



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\BookStoreProject2022\resources\views/public/contactUs.blade.php ENDPATH**/ ?>