<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Trashed Books</h1>
        <div class="my-2 px-1">
            <div class="row">
                <div class="col-6">
                    <div>
                        <a href="<?php echo e(route('books.create')); ?>" class="btn-primary btn-sm">
                            <i class="fas fa-plus-circle mr-1"></i>
                            Add Book
                        </a>
                    </div>
                </div>
                <div class="col-6 text-right">
                    <span class="mr-2"><a href="<?php echo e(route('books.index')); ?>">All books</a> |</span>
                    <span class="mr-2"><a href="<?php echo e(route('admin.discountBooks')); ?>">Discount books</a> |</span>
                    <span class="mr-2"><a href="<?php echo e(route('admin.trash-books')); ?>">Trash books</a></span>
                </div>
            </div>
        </div>

    <?php echo $__env->make('layouts.includes.flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All trashed books list</h6>
            </div>
            <div class="card-body">
                <?php if($books->count()): ?>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Action</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th>Regular price</th>
                                <th>Discount</th>
                                <th>Price</th>
                                <th>Quantity</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Action</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th>Regular price</th>
                                <th>Discount</th>
                                <th>Price</th>
                                <th>Quantity</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                    <div class="action d-flex flex-row">
                                        <?php echo Form::open(['method'=>'PUT', 'route'=>['book.restore', $book->id]]); ?>

                                            <button type="submit" class="btn btn-sm btn-primary mr-2" title="Restore"><i class="fa fa-undo"></i></button>
                                        <?php echo Form::close(); ?>


                                        <?php echo Form::open(['method'=>'DELETE', 'route'=>['book.forceDelete', $book->id]]); ?>

                                            <button type="submit" onclick="return confirm('Book will delete to permanently! Are you sure to delete??')" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                                        <?php echo Form::close(); ?>

                                    </div>

                                    </td>
                                    <td><img src="<?php echo e($book->image_url); ?>" width="60" height="70" alt=""></td>
                                    <td><a href="#"><?php echo e($book->title); ?></a></td>
                                    <td><?php echo e($book->category->name); ?></td>
                                    <td><?php echo e($book->author->name); ?></td>
                                    <td><?php echo e($book->init_price); ?></td>
                                    <td><?php echo e($book->discount_rate); ?>%</td>
                                    <td><?php echo e($book->price); ?></td>
                                    <td><?php echo e($book->quantity); ?></td>
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

<?php echo $__env->make('layouts.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\BookStoreProject2022\resources\views/admin/books/trash-books.blade.php ENDPATH**/ ?>