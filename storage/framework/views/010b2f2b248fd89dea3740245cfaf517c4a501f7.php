<?php $__env->startSection('content'); ?>
    <style type="text/css">
        .last-td {
            width: 100px;

            text-align: center;
        }
    </style>
    <div class="main-container">

        <div class="pd-ltr-20 xs-pd-20-10">


            <div class="min-height-200px">
                <div class="card-box mb-30">
                    <div class="pd-20" style="display: flex; justify-content: space-between;">
                        <a href="#" class="text-blue h4">Xodimlar </a>
                        <a href="<?php echo e(route('staff.create')); ?>" class="pr-4 btn btn-primary"><i class="fa fa-plus"></i> Yangi
                        </a>
                    </div>

                    <form method="GET" action="<?php echo e(route('student.index')); ?>" class="mb-3 ml-5 mr-5">
                        <div class="row">
                            <!-- Ta'lim turi filter (EduType model orqali) -->
                            <div class="col-md-2">
                                <label for="academic_degree">Ta'lim turi</label>
                                <select name="academic_degree" id="academic_degree" class="form-control">
                                    <option value="">Barchasi</option>
                                    <?php $__currentLoopData = $academic_degree; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $academic_deg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($academic_deg->id); ?>"
                                            <?php echo e(request('academic_degree') == $academic_deg->id ? 'selected' : ''); ?>>
                                            <?php echo e($academic_deg->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="degree">Ta'lim shakli</label>
                                <select name="degree" id="degree" class="form-control">
                                    <option value="">Barchasi</option>
                                    <?php $__currentLoopData = $degree; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $degreeOne): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($degreeOne->id); ?>"
                                            <?php echo e(request('degree') == $degreeOne->id ? 'selected' : ''); ?>>
                                            <?php echo e($degreeOne->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label for="fio">F.I.O bo‘yicha qidirish
                                    <i class="fa fa-info-circle text-primary" data-toggle="tooltip" data-placement="top"
                                        title="Masalan: 'abd sher' deb qidirsangiz 'Abdiyev Sherzod' natija chiqadi."></i>
                                </label>
                                <input type="text" name="fio" id="fio" class="form-control"
                                    value="<?php echo e(request('fio')); ?>" placeholder="Ism, familiya yoki otasining ismi">
                            </div>



                            <!-- Qidirish tugmasi -->
                            <div class="col-md-3 align-self-end">
                                <button type="submit" class="btn btn-primary">Filtrlash</button>
                                <a href="<?php echo e(route('student.index')); ?>" class="btn btn-secondary">Tozalash</a>
                            </div>
                        </div>
                    </form>


                    <div class="pb-20">
                        <table class=" data-table-export table stripe hover nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">#</th>
                                    <th>F.I.O</th>
                                    <th>Kirgan vaqti</th>
                                    <th>Ketgan vaqti</th>
                                    <th>Xona</th>
                                    <th>Amallar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $i=1; ?>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($data->firstItem() + $key); ?></td>

                                        <td> <?php echo e($item->fio()); ?> </td>
                                        <td> <?php echo e($item->begin_at); ?> </td>
                                        <td> <?php echo e($item->end_at); ?> </td>
                                        <td> <?php echo e($item->room->name ?? ''); ?> </td>
                                        <td class="last-td">
                                            <a class="p-2" href="<?php echo e(route('staff.show', ['staff' => $item->id])); ?>"><i
                                                    class="dw dw-eye"></i></a>
                                            <a class="p-2" href="<?php echo e(route('staff.edit', ['staff' => $item->id])); ?>"><i
                                                    class="dw dw-edit2"></i></a>
                                            <span class="text-danger button-delete" itemid="<?php echo e($item->id); ?>"
                                                style="cursor: pointer">
                                                <i class="dw dw-trash"></i>
                                            </span>
                                            <form class="deleteform<?php echo e($item->id); ?>"
                                                action="<?php echo e(route('staff.destroy', ['staff' => $item->id])); ?>"
                                                method="post">
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('DELETE')); ?>

                                            </form>
                                        </td>
                                    </tr <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between align-items-center mt-3 ml-5 mr-5">
                            <div>
                                <strong>Jami xodimlar soni: <?php echo e($data->total()); ?></strong>
                            </div>
                            <div>
                                <?php echo e($data->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('js'); ?>
        
        <script>
            $(document).ready(function() {
                let table = $('.data-table-export').DataTable();
                table.destroy(); // Avvalgi DataTable'ni o‘chirish
                $('.data-table-export').DataTable({
                    "paging": false, // Sahifalashni o‘chirish
                    "info": false, // Pastki yozuvlarni yashirish
                    "ordering": false, // Saralashni o‘chirish
                    "searching": false // Qidiruvni o‘chirish
                });
            });
        </script>

        <script src="<?php echo e(asset('assets/admin/src/plugins/switchery/switchery.min.js')); ?>"></script>
        <!-- bootstrap-tagsinput js -->
        <script src="<?php echo e(asset('assets/admin/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')); ?>"></script>
        <!-- bootstrap-touchspin js -->
        <script src="<?php echo e(asset('assets/admin/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/admin/vendors/scripts/advanced-components.js')); ?>"></script>

        <script>
            $('.button-delete').on('click', function() {
                if (confirm('Ma`lumotni o`chirasizmi?')) {
                    $('.deleteform' + $(this).attr('itemid')).submit()
                }
            })
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\tsul-arc\resources\views/admin/pages/staff/index.blade.php ENDPATH**/ ?>