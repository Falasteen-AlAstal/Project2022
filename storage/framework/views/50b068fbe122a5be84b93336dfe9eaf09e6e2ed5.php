<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Users</h1>
        <div class="my-2 px-1">
            <div class="row">
                <div class="col-6">
                    <div>
                        <a href="<?php echo e(route('users.create')); ?>" class="btn-primary btn-sm">
                            <i class="fas fa-plus-circle mr-1"></i>
                            Add user
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
                <h6 class="m-0 font-weight-bold text-primary">Users list</h6>
            </div>
            <div class="card-body">
                <?php if($users->count()): ?>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Action</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Total orders</th>
                                <th>Role</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Action</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Total orders</th>
                                <th>Role</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo Form::open(['method'=>'DELETE', 'action'=>['Admin\AdminUsersController@destroy', $user->id]]); ?>

                                        <div class="action d-flex flex-row">
                                            <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn-primary btn btn-sm mr-2"><i class="fas fa-edit"></i></a>

                                            <button type="submit" onclick="return confirm('User will delete permanently! Are you sure to delete??')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                        </div>
                                        <?php echo Form::close(); ?>

                                    </td>
                                    <td><img src="<?php echo e($user->image? $user->image_url : $user->default_img); ?>" height="50" alt=""></td>
                                    <td><a href="<?php echo e(route('users.edit', $user->id)); ?>"><?php echo e($user->name); ?></a></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->orders->count()); ?></td>
                                    <td><?php echo e($user->role->name); ?></td>
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

<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\BookStoreProject2022\resources\views/admin/user/index.blade.php ENDPATH**/ ?>