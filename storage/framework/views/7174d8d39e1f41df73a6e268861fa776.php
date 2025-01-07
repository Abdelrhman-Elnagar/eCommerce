<td>
    <?php if($Category->showen == 1): ?>
        <span class="badge badge-success"><?php echo e('Show'); ?></span>
    <?php else: ?>
        <span class="badge badge-danger"><?php echo e(trans('hide')); ?></span>
    <?php endif; ?>
</td>
<td>
    <?php if($Category->offer == 1): ?>
        <span class="badge badge-success"><?php echo e(trans('offer')); ?></span>
    <?php else: ?>
        <span class="badge badge-danger"><?php echo e(trans('normal')); ?></span>
    <?php endif; ?>
</td><?php /**PATH C:\Users\abdel\Desktop\laravel\laravel\eCommerce\resources\views/admin/includes/check.blade.php ENDPATH**/ ?>