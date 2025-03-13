
<form action="<?php echo e(route('student.destroy', $student->id)); ?>" method="post">
    <div class="modal-body">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <h5 class="text-center"><?php echo e($student->fi()); ?> o'chirilsinmi? </h5>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Ha, albatta</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Yo'q</button>
    </div>
</form>
<?php /**PATH D:\tsul\tsul-archive\tsul-archive\resources\views/mk/pages/student/delete.blade.php ENDPATH**/ ?>