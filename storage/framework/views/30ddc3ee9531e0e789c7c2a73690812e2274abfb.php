
<?php $__env->startSection('content'); ?>
    <style type="text/css">
        .last-td {
            width: 100px;
            text-align: center;
        }

    </style>

    <style>
        .input-file input[type="file"] {
            visibility: hidden;
            width: 1px;
            height: 1px;
        }

        .input-file .btn {
            background-color: #ddd;
            border-color: #ccc;
            color: #333;
        }

        .input-file .file-selected {
            font-size: 10px;
            text-align: center;
            width: 100%;
            display: block;
            margin-top: 5px;
        }

        .wrap {
            display: table;
            width: 100%;
            height: 100%;
        }

        .valign-middle {
            display: table-cell;
            vertical-align: middle;
            text-align: center;
        }

        .profile-timeline-list ul li .diplomaaa {
            padding-left: 120px !important;
        }

        .profile-photo .edit-avatar {
            right: -39% !important;
            margin-right: 5px !important;
        }

        .task-list-form ul li {
            padding-bottom: 10px !important;
        }

        .order_file_class .input-file>span {
            /*padding-bottom: 16px;*/
            /*margin-top: 38px;*/
        }

    </style>
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                        <div class="pd-20 card-box height-100-p">
                            <div class="profile-photo">
                                <a href="<?php echo e(route('student.edit', ['student' => $data->id])); ?>" class="edit-avatar"><i
                                        class="fa fa-pencil"></i></a>
                                <img data-toggle="modal" data-target="#modal"
                                    style="border-radius: 0 !important; height: 151px; cursor: pointer"
                                    src="<?php echo e($data->image); ?>" alt="" class="avatar-photo">
                                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body pd-5">
                                                <div class="img-container">
                                                    <img id="image" src="<?php echo e($data->image); ?>" alt="Picture">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                
                                                <button type="button" class="btn btn-primary"
                                                    data-dismiss="modal">Yopish</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="text-center h5 mb-0"><?php echo e($data->fio()); ?></h5>
                            <p class="text-center text-muted font-14"><?php echo e(date('d-m-Y', strtotime($data->birthday))); ?>

                                
                            </p>
                            <div class="profile-info">
                                <h5 class="mb-20 h5 text-blue">Asosiy ma'lumotlar: <i class="icon-copy dw dw-notepad-1"></i>
                                </h5>
                                <p>Hujjatlar <?php echo e($data->room->name); ?>da</p>

                                <ul>
                                    <li>
                                        <span>Manzil:</span>
                                        <?php echo e($data->country->name); ?>, <?php echo e($data->region->name); ?>,
                                        <?php echo e($data->area->name); ?>, <?php echo e($data->address); ?>

                                    </li>
                                    <li>
                                        <?php if(isset($data->faculty_id)): ?>
                                            <span>Fakultitet:</span>
                                            <?php echo e($data->faculty->name); ?>

                                        <?php endif; ?>
                                    </li>
                                    <li>
                                        <?php if(isset($data->direction_id)): ?>
                                            <span>Yo'nalish:</span>
                                            <?php echo e($data->direction->name); ?>

                                        <?php endif; ?>
                                    </li>
                                    <li>
                                        <span>Moliyaviy turi:</span>
                                        <?php echo e($data->contract()); ?>

                                    </li>
                                    <li>
                                        <?php if(isset($data->phone)): ?>
                                            <span>Telefon raqam:</span>
                                            <?php echo e($data->phone); ?> | <?php echo e($data->phone1); ?> | <?php echo e($data->phone_home); ?>

                                        <?php endif; ?>
                                    </li>


                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                        <div class="card-box height-100-p overflow-hidden">
                            <div class="profile-tab height-100-p">
                                <div class="tab height-100-p">
                                    <ul class="nav nav-tabs customtab" role="tablist">

                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#mkmaininfo"
                                                role="tab">Ta'lim ma'lumotlari</a>
                                        </li>

                                        

                                        

                                        

                                        

                                        

                                        

                                        
                                        

                                    </ul>

                                    <div class="tab-content">
                                        <!-- Qarindoshlar Tab start -->
                                        <div class="tab-pane fade show active" id="mkmaininfo" role="tabpanel">
                                            <div class="pd-20">
                                                <div class="task-title row align-items-center" style="padding-bottom: 0px;">
                                                    <div class="col-md-8 col-sm-12">
                                                        <h5>Ma'lumot</h5>
                                                    </div>
                                                    
                                                </div>

                                                <div class="profile-timeline">
                                                    <div class="profile-timeline-list">
                                                        <ul>
                                                            <li>
                                                                <div class="task-name">O'qishga kirgan
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="date"><?php echo e($data->enter_year); ?></div>
                                                                
                                                                <p> Yil</p>
                                                            </li>
                                                            <li>
                                                                <div class="date"><?php echo e($data->enter_order); ?></div>
                                                                <p>Buyruq raqami</p>
                                                            </li>
                                                            <li>
                                                                <div class="date"><?php echo e($data->enter_order_date); ?></div>
                                                                <p>Buyruq sanasi</p>
                                                            </li>
                                                            <li>
                                                                
                                                                <div class="task-name"> O'qishni bitirgan
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="date"><?php echo e($data->graduated_year); ?></div>
                                                                <p>Yil</p>
                                                            </li>
                                                            <li>
                                                                <div class="date"><?php echo e($data->graduated_order); ?></div>
                                                                <p>Buyruq raqami</p>
                                                            </li>
                                                            <li>
                                                                <div class="date"><?php echo e($data->graduated_order_date); ?></div>
                                                                <p>Buyruq sanasi</p>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade " id="timeline" role="tabpanel">
                                            <div class="pd-20">
                                                <div class="task-title row align-items-center" style="padding-bottom: 0px;">
                                                    <div class="col-md-8 col-sm-12">
                                                        <h5>Xodimning qarindoshlari haqida ma'lumot</h5>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 text-right">
                                                        <a href="relatives_add" data-toggle="modal"
                                                            data-target="#relatives_add"
                                                            class="bg-light-blue btn text-blue weight-500"><i
                                                                class="ion-plus-round"></i> Qo'shish</a>
                                                    </div>
                                                </div>

                                                <div class="profile-timeline">
                                                    <div class="profile-timeline-list">
                                                        <ul>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Qarindoshlar Tab End -->

                                        <!-- Qarindoshlar modal End -->
                                        <div class="modal fade customscroll" id="relatives_add" tabindex="-1" role="dialog">
                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Xodimning
                                                            qarindoshlarini qo'shish</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close" data-toggle="tooltip" data-placement="bottom"
                                                            title="" data-original-title="Yopish">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body pd-0">
                                                        <div class="task-list-form">
                                                            <ul>
                                                                <li>
                                                                    <form autocomplete="off" id="relatives_form"
                                                                        action="<?php echo e(route('staff.relative')); ?>"
                                                                        method="post" enctype="multipart/form-data">
                                                                        <?php echo csrf_field(); ?>
                                                                        <input type="hidden" name="id"
                                                                            value="<?php echo e($data->id); ?>">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3">Qarindoshligi</label>
                                                                            <div class="col-md-9">
                                                                                <select class="selectpicker form-control"
                                                                                    required name="RelativesType"
                                                                                    title="Tanlang"
                                                                                    data-style="btn-outline-primary">
                                                                                    
                                                                                    
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3">F.I.O.</label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" name="full_name"
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3">Ish joyi va
                                                                                lavozimi</label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" name="work"
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3">Tug'ulgan sana va
                                                                                joyi</label>
                                                                            <div class="col-md-9 row">
                                                                                <div class="col-md-6">
                                                                                    <input type="date" name="birthday"
                                                                                        class="form-control ">
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <select class="form-control"
                                                                                        name="country_id">
                                                                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                            <option <?php if(old('country_id') == $country->id || $country->code == 'UZ'): ?> selected <?php endif; ?>
                                                                                                value="<?php echo e($country->id); ?>">
                                                                                                <?php echo e($country->name); ?>

                                                                                            </option>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-6" id="inputhide1">
                                                                                    <select class="form-control"
                                                                                        name="region_id">
                                                                                        <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                            <option <?php if(old('region_id') == $region->id): ?> selected <?php endif; ?>
                                                                                                value="<?php echo e($region->id); ?>">
                                                                                                <?php echo e($region->name); ?>

                                                                                            </option>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-6" id="inputhide2">
                                                                                    <select class="form-control"
                                                                                        name="area_id">

                                                                                    </select>
                                                                                </div>
                                                                                <div style="display: none"
                                                                                    class="col-md-12 " id="inputhideshow">
                                                                                    <textarea class="form-control"
                                                                                        name="birth_address"
                                                                                        placeholder="Manzilni kiriting..."
                                                                                        type="text"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mb-0">
                                                                            <label class="col-md-3">Turar joyi</label>
                                                                            <div class="col-md-9">
                                                                                <textarea class="form-control"
                                                                                    name="address"></textarea>
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
                                                            data-dismiss="modal"> <span class="icon-copy ti-close"></span>
                                                            Yopish</button>
                                                        <button type="submit" form="relatives_form"
                                                            class="btn btn-primary"><i class="icon-copy fa fa-save"
                                                                aria-hidden="true"></i> Saqlash</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Qarindoshlar modal Tab End -->

                                        <!-- Diplom Tab start -->
                                        <div class="tab-pane fade " id="diplom" role="tabpanel">
                                            <div class="pd-20">
                                                <div class="task-title row align-items-center" style="padding-bottom: 0px;">
                                                    <div class="col-md-8 col-sm-12">
                                                        <h5>Diplom ma'lumotlari</h5>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 text-right">
                                                        <a href="diplom_add" data-toggle="modal" data-target="#diplom_add"
                                                            class="bg-light-blue btn text-blue weight-500"><i
                                                                class="ion-plus-round"></i> Qo'shish</a>
                                                    </div>
                                                </div>

                                                <div class="profile-timeline">
                                                    <div class="profile-timeline-list">
                                                        <ul>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Diplom Tab End -->

                                        <!-- Diplom modal End -->
                                        <div class="modal fade customscroll" id="diplom_add" tabindex="-1" role="dialog">
                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Diplom qo'shish
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close" data-toggle="tooltip" data-placement="bottom"
                                                            title="" data-original-title="Yopish">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body pd-0">
                                                        <div class="task-list-form">
                                                            <ul>
                                                                <li>
                                                                    <form autocomplete="off" id="diplom_form"
                                                                        action="<?php echo e(route('staff.diplom')); ?>"
                                                                        method="post" enctype="multipart/form-data">
                                                                        <?php echo csrf_field(); ?>
                                                                        <input type="hidden" name="id"
                                                                            value="<?php echo e($data->id); ?>">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3">Universitet</label>
                                                                            <div class="col-md-9">
                                                                                <select class="selectpicker form-control"
                                                                                    required name="university_id"
                                                                                    title="Tanlang"
                                                                                    data-style="btn-outline-primary">
                                                                                    
                                                                                    
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3">Mutaxasisligi</label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" name="specialization"
                                                                                    placeholder="Mutahasisligini kiriting..."
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3">Seriya | raqam</label>
                                                                            <div class="col-md-9 row">
                                                                                <div class="col-md-6">
                                                                                    <input type="text" name="diplom_seria"
                                                                                        placeholder="Seria"
                                                                                        class="form-control">
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <input type="text" name="diplom_number"
                                                                                        placeholder="Raqami"
                                                                                        class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3">Berilgan sana |
                                                                                Turi</label>
                                                                            <div class="col-md-9 row">
                                                                                <div class="col-md-6">
                                                                                    <input type="date"
                                                                                        name="diplom_issued_date"
                                                                                        placeholder="Berilgan sanasi"
                                                                                        class="form-control">
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <select
                                                                                        class="selectpicker form-control"
                                                                                        required name="diplom_type_id"
                                                                                        title="Tanlang"
                                                                                        data-style="btn-outline-primary">
                                                                                        
                                                                                        
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3">Nusxasi va
                                                                                ilovasi</label>
                                                                            <div class="col-md-9 row ">
                                                                                <div class="col-md-6">
                                                                                    <div class="wrap">
                                                                                        <div class="valign-middle">
                                                                                            <div class="form-group">
                                                                                                <label for="file"
                                                                                                    class="sr-only">
                                                                                                </label>
                                                                                                <input required="true"
                                                                                                    type="file" id="file"
                                                                                                    class="form-control file-input"
                                                                                                    name="diplom_copy"
                                                                                                    accept="application/pdf">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="wrap">
                                                                                        <div class="valign-middle">
                                                                                            <div class="form-group">
                                                                                                <label for="file1"
                                                                                                    class="sr-only lab111">
                                                                                                    Tanlang </label>
                                                                                                <input required="true"
                                                                                                    type="file" id="file1"
                                                                                                    class="form-control file-input"
                                                                                                    name="diplom_ilova_copy"
                                                                                                    accept="application/pdf">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
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
                                                            data-dismiss="modal"> <span class="icon-copy ti-close"></span>
                                                            Yopish</button>
                                                        <button type="submit" form="diplom_form" class="btn btn-primary"><i
                                                                class="icon-copy fa fa-save" aria-hidden="true"></i>
                                                            Saqlash</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Diplom modal Tab End -->

                                        <!-- Mehnat faoliyat Tab start -->
                                        <div class="tab-pane fade " id="mehnat_faoliyati" role="tabpanel">
                                            <div class="pd-20">
                                                <div class="task-title row align-items-center" style="padding-bottom: 0px;">
                                                    <div class="col-md-8 col-sm-12">
                                                        <h5>Mehnat faoliyat ma'lumotlari</h5>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 text-right">
                                                        <a href="mehnat_faoliyat_add" data-toggle="modal"
                                                            data-target="#mehnat_faoliyat_add"
                                                            class="bg-light-blue btn text-blue weight-500"><i
                                                                class="ion-plus-round"></i> Qo'shish</a>
                                                    </div>
                                                </div>

                                                <div class="profile-timeline">
                                                    <div class="profile-timeline-list">
                                                        <ul>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Mehnat faoliyat Tab End -->

                                        <!-- Mehnat faoliyat modal End -->
                                        <div class="modal fade customscroll" id="mehnat_faoliyat_add" tabindex="-1"
                                            role="dialog">
                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Mehnat faoliyat
                                                            qo'shish</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close" data-toggle="tooltip" data-placement="bottom"
                                                            title="" data-original-title="Yopish">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body pd-0">
                                                        <div class="task-list-form">
                                                            <ul>
                                                                <li>
                                                                    <form autocomplete="off" id="workplace_form"
                                                                        action="<?php echo e(route('staff.workplace')); ?>"
                                                                        method="post" enctype="multipart/form-data">
                                                                        <?php echo csrf_field(); ?>
                                                                        <input type="hidden" name="id"
                                                                            value="<?php echo e($data->id); ?>">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-4">Tashkilot nomi</label>
                                                                            <div class="col-md-8">
                                                                                <input type="text" name="workplace"
                                                                                    placeholder="Tashkilot nomini kiriting..."
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-md-4">Lavozimi</label>
                                                                            <div class="col-md-8">
                                                                                <input type="text" name="position"
                                                                                    placeholder="Lavozimini kiriting..."
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-md-4">Kirgan / Bo'shagan
                                                                            </label>

                                                                            <div class="col-md-4">
                                                                                <input type="date" name="start_time"
                                                                                    placeholder="Kirgan sanasi"
                                                                                    class="form-control">
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <input type="date" name="end_time"
                                                                                    placeholder="Bo'shagan sanasi"
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
                                                            data-dismiss="modal"> <span class="icon-copy ti-close"></span>
                                                            Yopish</button>
                                                        <button type="submit" form="workplace_form"
                                                            class="btn btn-primary"><i class="icon-copy fa fa-save"
                                                                aria-hidden="true"></i> Saqlash</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Mehnat faoliyat modal Tab End -->

                                        <!-- Ichki faoliyat Tab start -->
                                        <div class="tab-pane fade " id="ichki_faoliyati" role="tabpanel">
                                            <div class="pd-20">
                                                <div class="task-title row align-items-center" style="padding-bottom: 0px;">
                                                    <div class="col-md-8 col-sm-12">
                                                        <h5>Ichki mehnat faoliyat ma'lumotlari</h5>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 text-right">
                                                        <a href="ichki_faoliyat_add" data-toggle="modal"
                                                            data-target="#ichki_faoliyat_add"
                                                            class="bg-light-blue btn text-blue weight-500"><i
                                                                class="ion-plus-round"></i> Qo'shish</a>
                                                    </div>
                                                </div>

                                                <div class="profile-timeline">
                                                    <div class="profile-timeline-list">
                                                        <ul>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Ichki faoliyat Tab End -->

                                        <!-- Ichki faoliyat modal End -->
                                        <div class="modal fade customscroll" id="ichki_faoliyat_add" tabindex="-1"
                                            role="dialog">
                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Ichki faoliyat
                                                            qo'shish</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close" data-toggle="tooltip" data-placement="bottom"
                                                            title="" data-original-title="Yopish">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body pd-0">
                                                        <div class="task-list-form">
                                                            <ul>
                                                                <li>
                                                                    <form autocomplete="off" id="ichki_menhat_form"
                                                                        action="<?php echo e(route('staff.inactivity')); ?>"
                                                                        method="post" enctype="multipart/form-data">
                                                                        <?php echo csrf_field(); ?>
                                                                        <input type="hidden" name="id"
                                                                            value="<?php echo e($data->id); ?>">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3">Nomi</label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" name="name"
                                                                                    placeholder="Nomini kiriting..."
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3">Qisqacha</label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" name="description"
                                                                                    placeholder="Qisqacha tasnif yozing..."
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3">Sana va turi</label>
                                                                            <div class="col-md-9 row">
                                                                                <div class="col-md-6">
                                                                                    <input type="date" name="date"
                                                                                        placeholder="Sanasi"
                                                                                        class="form-control">
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <select
                                                                                        class="selectpicker form-control"
                                                                                        required name="inactivity_type_id"
                                                                                        title="Tanlang"
                                                                                        data-style="btn-outline-primary">
                                                                                        
                                                                                        
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3">Fayl</label>
                                                                            <div class="col-md-8 ">
                                                                                <div class="wrap">
                                                                                    <div class="valign-middle">
                                                                                        <div class="form-group">
                                                                                            <label for="file"
                                                                                                class="sr-only">
                                                                                                Tanlang</label>
                                                                                            <input required="true"
                                                                                                type="file" id="file_ichki"
                                                                                                class="form-control file-input"
                                                                                                name="in_file"
                                                                                                accept="application/pdf">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

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
                                                            data-dismiss="modal"> <span class="icon-copy ti-close"></span>
                                                            Yopish</button>
                                                        <button type="submit" form="ichki_menhat_form"
                                                            class="btn btn-primary"><i class="icon-copy fa fa-save"
                                                                aria-hidden="true"></i> Saqlash</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Ishki faoliyat modal Tab End -->

                                        <!-- malaka_oshirish Tab start -->
                                        <div class="tab-pane fade " id="qualification_info_tab" role="tabpanel">
                                            <div class="pd-20">
                                                <div class="task-title row align-items-center" style="padding-bottom: 0px;">
                                                    <div class="col-md-8 col-sm-12">
                                                        <h5>Malaka oshirish faoliyat ma'lumotlari</h5>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 text-right">
                                                        <a href="qualification_info_modal" data-toggle="modal"
                                                            data-target="#qualification_info_modal"
                                                            class="bg-light-blue btn text-blue weight-500"><i
                                                                class="ion-plus-round"></i> Qo'shish</a>
                                                    </div>
                                                </div>

                                                <div class="profile-timeline">
                                                    <div class="profile-timeline-list">
                                                        <ul>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- malaka_oshirish Tab End -->

                                        <!-- malaka_oshirish modal End -->
                                        <div class="modal fade customscroll" id="qualification_info_modal" tabindex="-1"
                                            role="dialog">
                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Malaka oshirish
                                                            qo'shish</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close" data-toggle="tooltip" data-placement="bottom"
                                                            title="" data-original-title="Yopish">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body pd-0">
                                                        <div class="task-list-form">
                                                            <ul>
                                                                <li>
                                                                    <form autocomplete="off" id="qualification_info_form"
                                                                        action="<?php echo e(route('staff.qualification')); ?>"
                                                                        method="post" enctype="multipart/form-data">
                                                                        <?php echo csrf_field(); ?>
                                                                        <input type="hidden" name="id"
                                                                            value="<?php echo e($data->id); ?>">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3">Nomi</label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" name="name"
                                                                                    placeholder="Nomini kiriting..."
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3">Qisqacha</label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" name="description"
                                                                                    placeholder="Qisqacha tasnif yozing..."
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3">Boshlash va tugash
                                                                                sanasi</label>
                                                                            <div class="col-md-9 row">
                                                                                <div class="col-md-6">
                                                                                    <input type="date" name="start_date"
                                                                                        placeholder="Sanasi"
                                                                                        class="form-control">
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <input type="date" name="end_date"
                                                                                        placeholder="Sanasi"
                                                                                        class="form-control">
                                                                                </div>
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
                                                            data-dismiss="modal"> <span class="icon-copy ti-close"></span>
                                                            Yopish</button>
                                                        <button type="submit" form="qualification_info_form"
                                                            class="btn btn-primary"><i class="icon-copy fa fa-save"
                                                                aria-hidden="true"></i> Saqlash</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- malaka_oshirish modal Tab End -->

                                        <!-- mukofot Tab start -->
                                        <div class="tab-pane fade " id="mukofot" role="tabpanel">
                                            <div class="pd-20">
                                                <div class="task-title row align-items-center" style="padding-bottom: 0px;">
                                                    <div class="col-md-8 col-sm-12">
                                                        <h5>Xodimning mukofotlari</h5>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12 text-right">
                                                        <a href="mukofot_modal" data-toggle="modal"
                                                            data-target="#mukofot_modal"
                                                            class="bg-light-blue btn text-blue weight-500"><i
                                                                class="ion-plus-round"></i> Qo'shish</a>
                                                    </div>
                                                </div>

                                                <div class="profile-timeline">
                                                    <div class="profile-timeline-list">
                                                        <ul>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- mukofot Tab End -->

                                        <!-- mukofot modal End -->
                                        <div class="modal fade customscroll" id="mukofot_modal" tabindex="-1" role="dialog">
                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Mukofot qo'shish
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close" data-toggle="tooltip" data-placement="bottom"
                                                            title="" data-original-title="Yopish">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body pd-0">
                                                        <div class="task-list-form">
                                                            <ul>
                                                                <li>
                                                                    <form autocomplete="off" id="mukofot_form"
                                                                        action="<?php echo e(route('staff.mukofot')); ?>"
                                                                        method="post" enctype="multipart/form-data">
                                                                        <?php echo csrf_field(); ?>
                                                                        <input type="hidden" name="id"
                                                                            value="<?php echo e($data->id); ?>">
                                                                        <div class="form-group row">
                                                                            <label class="col-md-3">Turi va sanasi</label>
                                                                            <div class="col-md-9 row"
                                                                                style="padding-right: 0px !important;">
                                                                                <div class="col-md-8" style="">
                                                                                    <select class="form-control"
                                                                                        name="mukofot_type_id">
                                                                                        
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4"
                                                                                    style="padding-right: 0px !important;padding-left: 0px !important;">
                                                                                    <input required type="date" name="date"
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
                                                            data-dismiss="modal"> <span class="icon-copy ti-close"></span>
                                                            Yopish</button>
                                                        <button type="submit" form="mukofot_form" class="btn btn-primary"><i
                                                                class="icon-copy fa fa-save" aria-hidden="true"></i>
                                                            Saqlash</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assets/admin/src/plugins/switchery/switchery.min.js')); ?>"></script>
    <!-- bootstrap-tagsinput js -->
    <script src="<?php echo e(asset('assets/admin/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')); ?>"></script>
    <!-- bootstrap-touchspin js -->
    <script src="<?php echo e(asset('assets/admin/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/vendors/scripts/advanced-components.js')); ?>"></script>

    <script type="text/javascript">
        $('select[name="region_id"]').change(function() {
            get_regions();
        });

        $(document).ready(function() {
            get_regions();
        })

        function get_regions() {
            var old_area = '<?php echo e(old('area_id')); ?>';
            id = $('select[name="region_id"]').val();
            if (id != "") {
                var url = '/backoffice/get-areas/' + id;
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(result) {
                        var areas = '';
                        result = JSON.parse(result);
                        $.each(result, function(index, el) {
                            if (old_area == el['id']) {
                                areas = areas + '<option selected="true" value="' + el['id'] + '">' +
                                    el['name'] + '</option>';
                            } else {
                                areas = areas + '<option value="' + el['id'] + '">' + el['name'] +
                                    '</option>';
                            }
                        });
                        $('select[name="area_id"]').html(areas);
                    }
                })
            }
        }
    </script>

    <script type="text/javascript">
        $('select[name="country_id"]').change(function() {
            get_countrys();
        });
        $(document).ready(function() {
            get_countrys();
        });

        function get_countrys() {
            var old_region = '<?php echo e(old('region_id')); ?>';
            id = $('select[name="country_id"]').val();
            if (id != "") {
                var url = '/backoffice/get-regions/' + id;
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(result) {
                        var regions = '';
                        result = JSON.parse(result);
                        // console.log(result);

                        $.each(result, function(index, el) {
                            if (el['id'] == 15) {
                                // alert('ok');
                                $("#inputhide1").css("display", "none");
                                $("#inputhide2").css("display", "none");
                                $("#inputhideshow").css("display", "block");

                            } else {

                                $("#inputhide1").css("display", "block");
                                $("#inputhide2").css("display", "block");
                                $("#inputhideshow").css("display", "none");

                                regions = regions + '<option value="' + el['id'] + '">' + el['name'] +
                                    '</option>';
                            }
                        });
                        $('select[name="region_id"]').html(regions);
                    }
                })
            }
        }
    </script>


    <script>
        var uploadField = document.getElementById("file");

        uploadField.onchange = function() {

            if (this.files[0].size > 3145680) {
                alert("Bunday katta hajmdagi ma'lumot yuklashga ruxsat berilmagan. 5 Mb dan kichikroq fayl tanlang!");
                this.value = "";
                $("#image_teg").attr("src", "");

            };
        };
        $('input[type="file"]').each(function() {
            // get label text
            var label = $(this).parents('.form-group').find('label.lab111').text();
            label = (label) ? label : 'Tanlang';

            // wrap the file input
            $(this).wrap('<div class="input-file"></div>');
            // display label
            $(this).before('<span class="btn" style="width: 110%">' + label + '</span>');
            // we will display selected file here
            $(this).before('<span class="file-selected" style="height: 0px;"></span>');

            // file input change listener
            $(this).change(function(e) {
                // Get this file input value
                var val = $(this).val();

                // Let's only show filename.
                // By default file input value is a fullpath, something like
                // C:\fakepath\Nuriootpa1.jpg depending on your browser.
                var filename = val.replace(/^.*[\\\/]/, '');

                // Display the filename
                $(this).siblings('.file-selected').text(filename);
            });
        });

        // Open the file browser when our custom button is clicked.
        $('.input-file .btn').click(function() {
            $(this).siblings('input[type="file"]').trigger('click');
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('mk.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tsul\tsul-archive\tsul-archive\resources\views/mk/pages/student/show.blade.php ENDPATH**/ ?>