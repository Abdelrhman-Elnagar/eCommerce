<?php
    $active = 'category';
?>

<?php $__env->startSection('title', 'Category-Show'); ?>
<?php $__env->startSection('content_admin'); ?>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"><?php echo e(trans('dashb.Categories')); ?></h1>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group row">
                        <div class="col">
                            <label for="name_ar"><?php echo e(trans('dashb.name_ar')); ?></label>
                            <input type="text" class="form-control" readonly 
                                name="name_ar" value="<?php echo e($Category->getTranslation('name', 'ar')); ?>">
                        </div>
                        <div class="col">
                            <label for="name_en"><?php echo e(trans('dashb.name_en')); ?></label>
                            <input type="text" class="form-control" readonly 
                                name="name_en" value="<?php echo e($Category->getTranslation('name', 'en')); ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col">
                            <label for="slug"><?php echo e(trans('dashb.slug')); ?></label>
                            <input type="text" class="form-control" readonly 
                                name="slug" value="<?php echo e($Category->slug); ?>">
                        </div>
                        <div class="col">
                            <label for="picture"><?php echo e(trans('dashb.Picture')); ?></label>
                            <img src="<?php echo e(Storage::url($Category->picture)); ?>" alt="Category Picture" 
                                class="img-thumbnail img-fluid" style="width: 200px; height: 200px; object-fit: cover;">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col">
                            <label for="description_ar"><?php echo e(trans('dashb.description_ar')); ?></label>
                            <textarea name="description_ar" rows="3" cols="3" 
                                class="form-control" readonly><?php echo e($Category->getTranslation('description', 'ar')); ?></textarea>
                        </div>
                        <div class="col">
                            <label for="description_en"><?php echo e(trans('dashb.description_en')); ?></label>
                            <textarea name="description_en" rows="3" cols="3" 
                                class="form-control" readonly><?php echo e($Category->getTranslation('description', 'en')); ?></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col">
                            <?php if($Category->showen == 1): ?>
                                <span class="badge badge-success">Show</span>
                            <?php else: ?>
                                <span class="badge badge-danger">Hide</span>
                            <?php endif; ?>
                        </div>
                        <div class="col">
                            <?php if($Category->offer == 1): ?>
                                <span class="badge badge-success">Offer</span>
                            <?php else: ?>
                                <span class="badge badge-danger">Normal</span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <a href="<?php echo e(route('category.index')); ?>" class="btn btn-outline-primary">Back</a>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abdel\Desktop\laravel\laravel\eCommerce\resources\views/admin/category/category_show.blade.php ENDPATH**/ ?>