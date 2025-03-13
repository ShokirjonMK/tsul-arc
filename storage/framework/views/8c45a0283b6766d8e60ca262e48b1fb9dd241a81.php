<div class="modal fade customscroll" id="commands_add" tabindex="-1"
     role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Buyruq
                    qo'shish
                </h5>
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close" data-toggle="tooltip"
                        data-placement="bottom"
                        title="" data-original-title="Yopish">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pd-0">
                <div class="task-list-form">
                    <ul>
                        <li>
                            <form autocomplete="off" id="mukofot_form"
                                  action="<?php echo e(route('staff-command.store')); ?> "
                                  method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="staff_id"
                                       value="<?php echo e($data->id); ?>">
                                <div class="form-group row">
                                    <label class="col-md-3">Turi va
                                        sanasi</label>
                                    <div class="col-md-9 row"
                                         style="padding-right: 0px !important;">
                                        <div class="col-md-8" style="">
                                            <select class="form-control"
                                                    name="command_type_id" required>
                                                <?php $__currentLoopData = $command_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $command_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($command_type->id); ?>"><?php echo e($command_type->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4"
                                             style="padding-right: 0px !important;padding-left: 0px !important;">
                                            <input required type="date"
                                                   name="date"
                                                   class="form-control ">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3">Nomi</label>
                                    <div class="col-md-9">
                                        <input required type="text" name="name"
                                               placeholder="Nomini kiriting..."
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Qisqacha</label>
                                    <div class="col-md-9">
                                        <input type="text" name="description"
                                               placeholder="Qo'shimcha ma'lumot yozing..."
                                               class="form-control">
                                    </div>
                                </div>

                            </form>
                        </li>

                    </ul>
                </div>
                <div class="add-more-task">
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                        data-dismiss="modal"><span
                        class="icon-copy ti-close"></span>
                    Yopish
                </button>
                <button type="submit" form="mukofot_form"
                        class="btn btn-primary"><i class="icon-copy fa fa-save"
                                                   aria-hidden="true"></i>
                    Saqlash
                </button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/archive/resources/views/admin/pages/staff/modals/command_create.blade.php ENDPATH**/ ?>