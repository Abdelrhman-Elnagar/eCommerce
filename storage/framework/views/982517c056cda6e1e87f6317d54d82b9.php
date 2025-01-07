<?php
    $active = 'category';
?>

<?php $__env->startSection('title', 'Dashboard-Category'); ?>
<?php $__env->startSection('content_admin'); ?>
    <div class="content-wrapper">
        
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"><?php echo e(trans('dashb.Categories')); ?></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#"><?php echo e(trans('dashb.Home')); ?></a></li>
                            <li class="breadcrumb-item active"><?php echo e(trans('dashb.Categories')); ?></li>
                        </ol>
                    </div><!-- /.col -->
                    <div class="card-body">
                        <a href="<?php echo e(route('category.create')); ?>" type="button"
                            class="btn btn-outline-primary mb-3 "><?php echo e(trans('dashb.Create')); ?></a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th><?php echo e(trans('dashb.Categories')); ?></th>
                                    <th><?php echo e(trans('dashb.Picture')); ?></th>
                                    <th><?php echo e(trans('dashb.Showen')); ?></th>
                                    <th><?php echo e(trans('dashb.Offer')); ?></th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $Categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($Category->id); ?></td>
                                        <td><?php echo e($Category->name); ?></td>
                                        <td><img src="<?php echo e(Storage::url($Category->picture)); ?>" alt=""
                                                class="img-thumbnail" style="width: 70px; height: 70px; object-fit: cover;"></td>
                                        <?php echo $__env->make('admin.includes.check', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <button type="button"
                                                    class="btn btn-outline-success btn-sm"><?php echo e(trans('dashb.Show')); ?></button>
                                                <button type="button"
                                                    class="btn btn-outline-info btn-sm"><?php echo e(trans('dashb.Edit')); ?></button>
                                                <button type="button"
                                                    class="btn btn-outline-danger btn-sm"><?php echo e(trans('dashb.Delete')); ?></button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abdel\Desktop\laravel\laravel\eCommerce\resources\views/admin/category/category.blade.php ENDPATH**/ ?>