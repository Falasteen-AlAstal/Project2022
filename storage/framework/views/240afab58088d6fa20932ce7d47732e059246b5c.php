<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Authors</h1>
        <div class="my-2 px-1">
            <div class="row">
                <div class="col-6">
                    <div>
                        <a href="<?php echo e(route('authors.create')); ?>" class="btn-primary btn-sm">
                            <i class="fas fa-plus-circle mr-1"></i>
                            Add Authors
                        </a>
                    </div>
                </div>
                <div class="col-6 text-right">
                    <span class="mr-2"><a href="#">Discount books</a> |</span>
                    <span class="mr-2"><a href="#">Trash books</a></span>
                </div>
            </div>
        </div>

        <?php echo $__env->make('layouts.includes.flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Authors list</h6>
            </div>
            <div class="card-body">
                <?php if($authors->count()): ?>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Action</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Books Count</th>
                                <th>Bio</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Action</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Books Count</th>
                                <th>Bio</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                    <?php echo Form::open(['method'=>'DELETE', 'action'=>['Admin\AdminAuthorsController@destroy', $author->id]]); ?>

                                        <div class="action d-flex flex-row">
                                            <a href="<?php echo e(route('authors.edit', $author->id)); ?>" class="btn-primary btn btn-sm mr-2"><i class="fas fa-edit"></i></a>

                                            <button type="submit" onclick="return confirm('Author will delete permanently! Are you sure to delete??')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                        </div>
                                     <?php echo Form::close(); ?>

                                    </td>
                                    <td><img src="<?php echo e($author->image? $author->image_url : $author->default_img); ?>" height="50" alt=""></td>
                                    <td><a href="<?php echo e(route('authors.edit', $author->id)); ?>"><?php echo e($author->name); ?></a></td>
                                    <td><?php echo e($author->books->count()); ?></td>
                                    <td><?php echo e(str_limit($author->bio, 100)); ?><a href="#">read more</a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\Online-Bookshop-with-laravel-master\resources\views/admin/author/index.blade.php ENDPATH**/ ?>