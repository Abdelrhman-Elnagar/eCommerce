<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
    <?php echo e(trans('dashb.Delete')); ?>

</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Attention</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Do You Want To Delete
            </div>
            <form action="<?php echo e(route('category.destroy',$Category->id)); ?> " method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\abdel\Desktop\laravel\laravel\eCommerce\resources\views/admin/includes/modal_delete.blade.php ENDPATH**/ ?>