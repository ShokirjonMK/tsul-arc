
<?php $__env->startSection('link'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin/src/plugins/jquery-steps/jquery.steps.css')); ?>">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <style type="text/css">
        .last-td {
            width: 1px;
            padding-left: 3px !important;
            padding-right: 3px !important;
            text-align: center;
        }

        .td_date {
            width: 1px;
        }

    </style>
    <style type="text/css">
        .img-select-image {
            border-color: #d4d4d4;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            width: 113.385826772px;
            height: 151.181102362px;
            position: relative;
        }

        .img-select {
            border-color: #d4d4d4;
            /*border: 1px solid #ced4da;*/
            border-radius: .25rem;

            position: relative;
        }

        .img-select > iframe {
            width: 100%;
        }

        .img-select-button {
            position: absolute;
            right: 0;
            bottom: 0;
        }

        .img-select-button123 {
            position: absolute;
            right: 2px;
            bottom: 7px;
        }

        div > label > span {
            color: #d61a1c;
            margin-right: 6px;
        }

    </style>
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix j-flex">
                        <h4 class="text-blue h4">Talaba qo'shish</h4>
                    </div>
                    <div class="wizard-content">
                        <form autocomplete="off" action="<?php echo e(route('student.store')); ?>"
                              class="tab-wizard wizard-circle wizard" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <h5>Asosiy ma`lumotlar</h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label><span>*</span>Familiya :
                                                        <span class="error">
                                                            <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <?php echo e($message); ?>

                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </span>
                                                    </label>
                                                    <input type="text" class="form-control" name="last_name"
                                                           value="<?php echo e(old('last_name')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label><span>*</span>Ism :
                                                        <span class="error">
                                                            <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <?php echo e($message); ?>

                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </span>
                                                    </label>
                                                    <input type="text" class="form-control" name="first_name"
                                                           value="<?php echo e(old('first_name')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Sharif :
                                                        <span class="error">
                                                            <?php $__errorArgs = ['middle_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <?php echo e($message); ?>

                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </span>
                                                    </label>
                                                    <input type="text" class="form-control" name="middle_name"
                                                           value="<?php echo e(old('middle_name')); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label><span>*</span>Davlat:
                                                        <span class="error">
                                                            <?php $__errorArgs = ['country_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <?php echo e($message); ?>

                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </span>
                                                    </label>

                                                    <select class="form-control" name="country_id">
                                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option <?php if(old(
                                                    'country_id') == $country->id || $country->code == 'UZ'): ?> selected
                                                                    <?php endif; ?>
                                                                    value="<?php echo e($country->id); ?>"><?php echo e($country->name); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label><span>*</span>Viloyat:
                                                        <span class="error">
                                                            <?php $__errorArgs = ['region_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <?php echo e($message); ?>

                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </span>
                                                    </label>

                                                    <select class="form-control" name="region_id">
                                                        <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option <?php if(old(
                                                    'region_id') == $region->id): ?> selected <?php endif; ?>
                                                            value="<?php echo e($region->id); ?>"><?php echo e($region->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label><span>*</span>Tuman:
                                                        <span class="error">
                                                            <?php $__errorArgs = ['area_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <?php echo e($message); ?>

                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </span>
                                                    </label>
                                                    <select class="form-control" name="area_id">

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label><span>*</span>Manzili:
                                                        <span class="error">
                                                            <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <?php echo e($message); ?>

                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </span>
                                                    </label>
                                                    <input type="text" class="form-control" name="address"
                                                           value="<?php echo e(old('address')); ?>">
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><span>*</span>Tug'ilgan sana :
                                                <span class="error">
                                                    <?php $__errorArgs = ['birthday'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                            </label>

                                            <input class="form-control " name="birthday" max="<?php echo e($date18); ?>"
                                                   value="<?php echo e(old('birthday')); ?>" type="date">

                                        <!--                                            <input class="form-control" name="birthday" max="<?php echo e($date18); ?>"-->
                                        <!--                                                value="<?php echo e(old('birthday')); ?>" placeholder="Sanani tanlang" type="date">-->
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><span>*</span>Kirgan yili :
                                                <span class="error">
                                                    <?php $__errorArgs = ['enter_year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                            </label>
                                            <input class="form-control" name="enter_year" min="1980"
                                                   value="<?php echo e(old('enter_year')); ?>" max="<?php echo e($this_year); ?>"
                                                   type="number"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><span>*</span>Buyruq raqami :
                                                <span class="error">
                                                    <?php $__errorArgs = ['enter_order'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                            </label>
                                            <input class="form-control" name="enter_order"
                                                   value="<?php if(old('enter_order')): ?><?php echo e(old('enter_order')); ?><?php else: ?><?php echo e("02-"); ?><?php endif; ?>"
                                                   type="text"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><span>*</span>Buyruq sanasi :
                                                <span class="error">
                                                    <?php $__errorArgs = ['enter_order_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                            </label>
                                            <input class="form-control " name="enter_order_date"
                                                   value="<?php echo e(old('enter_order_date')); ?>"
                                                   type="date">
                                            <!---->
                                            <!--                                            <input class="form-control" name="enter_order_date"-->
                                        <!--                                                value="<?php echo e(old('enter_order_date')); ?>" type="date" />-->
                                        </div>
                                    </div>
                                </div>

                                
                                <hr>

                            </section>
                            <!-- Step 2 -->
                            <h5>Qo'shimcha ma`lumotlari</h5>
                            <section>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><span>*</span>Fakultitet :
                                                <span class="error">
                                                    <?php $__errorArgs = ['faculty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                            </label>
                                            <input type="text" id="faculty" class="form-control "
                                                   name="faculty" placeholder="Fakultiteti"
                                                   value="<?php echo e(old('faculty')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><span>*</span>Yo'nalish :
                                                <span class="error">
                                                    <?php $__errorArgs = ['direction'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                            </label>
                                            <input type="text" id="direction" class="form-control "
                                                   name="direction" placeholder="Yo'nalishi"
                                                   value="HUQUQSHUNOSLIK">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label><span>*</span>Ta'lim shakli :
                                                <span class="error">
                                                    <?php $__errorArgs = ['edu_form_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                            </label>
                                            <select class="form-control" name="edu_form_id">
                                                <?php $__currentLoopData = $edu_form; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu_form_one): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php if(old(
                                            'degree_id') == $edu_form_one->id): ?> selected="true" <?php endif; ?>
                                                    value="<?php echo e($edu_form_one->id); ?>"><?php echo e($edu_form_one->name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label><span>*</span>Ta'lim shakli :
                                                <span class="error">
                                                    <?php $__errorArgs = ['is_contract'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                            </label>
                                            <select class="form-control" name="is_contract">
                                                <option <?php if(old(
                                            'degree_id') == 0): ?> selected="true" <?php endif; ?> value="0">Grant
                                                </option>
                                                <option <?php if(old(
                                            'degree_id') == 1): ?> selected="true" <?php endif; ?> value="1">
                                                    Kontarkt
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label><span>*</span>Bitirgan yili :
                                                <span class="error">
                                                    <?php $__errorArgs = ['graduated_year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                            </label>
                                            <input class="form-control" name="graduated_year" min="1980"
                                                   value="<?php echo e(old('graduated_year')); ?>" max="<?php echo e($this_year); ?>"
                                                   type="number"/>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label><span>*</span>Bitirgan buyruq raqami va sanasi:
                                                <span class="error">
                                                    <?php $__errorArgs = ['graduated_order'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                                <span class="error">
                                                    <?php $__errorArgs = ['graduated_order_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                            </label>
                                            <div class="j-flex">

                                                <input type="text" id="graduated_order" class="form-control "
                                                       style="width: 30%;" name="graduated_order" placeholder="raqami"
                                                       value="<?php echo e(old('graduated_order')); ?>">

                                                <input class="form-control " id="graduated_order_date"
                                                       name="graduated_order_date"
                                                       value="<?php echo e(old('graduated_order_date')); ?>"
                                                       type="date">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><span>*</span>Diplom turi :
                                                <span class="error">
                                                    <?php $__errorArgs = ['privileged'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                            </label>
                                            <select class="form-control" name="privileged">

                                                <option <?php if(old(
                                            'privileged') == 0): ?> selected="true" <?php endif; ?>
                                                value="0">Imtiyozsiz
                                                </option>

                                                <option <?php if(old(
                                            'privileged') == 1): ?> selected="true" <?php endif; ?>
                                                value="1">Imtiyozli
                                                </option>


                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><span>*</span>Ta'lim turi :
                                                <span class="error">
                                                    <?php $__errorArgs = ['edu_type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                            </label>
                                            <select class="form-control" name="edu_type_id">
                                                <?php $__currentLoopData = $edu_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu_type_one): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php if(old(
                                            'degree_id') == $edu_type_one->id): ?> selected="true" <?php endif; ?>
                                                    value="<?php echo e($edu_type_one->id); ?>"><?php echo e($edu_type_one->name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Topshirgan hujjatlari:
                                                <span class="error">
                                                    <?php $__errorArgs = ['document_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                            </label>
                                            <input type="text" class="form-control" name="document_type"
                                                   value="<?php echo e(old('document_type')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>TDYI/TDYU ilova:
                                                <span class="error">
                                                    <?php $__errorArgs = ['ilova'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                            </label>
                                            <select class="form-control" name="ilova">
                                                <option value="Asli bor">Asli bor</option>
                                                <option value="Nusxasi bor">Nusxasi bor</option>
                                                <option value="Yo'q">Yo'q</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Sinov daftarchasi:
                                                <span class="error">
                                                    <?php $__errorArgs = ['sinov_daftarchasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                            </label>
                                            <select class="form-control" name="sinov_daftarchasi">
                                                <option value="Bor">Bor</option>
                                                <option value="Yo'q">Yo'q</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Topografiya nomeri:
                                                <span class="error">
                                                    <?php $__errorArgs = ['topografiya_nomeri'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                            </label>
                                            <input type="text" class="form-control" name="topografiya_nomeri"
                                                   value="<?php echo e(old('topografiya_nomeri')); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Ro'yhat raqami:
                                                <span class="error">
                                                    <?php $__errorArgs = ['royhat_raqami'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                            </label>
                                            <input type="text" class="form-control" name="royhat_raqami"
                                                   value="<?php echo e(old('royhat_raqami')); ?>">
                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Saqlanadigan xona :
                                                <span class="error">
                                                    <?php $__errorArgs = ['room_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <?php echo e($message); ?>

                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </span>
                                            </label>
                                            <select class="form-control" name="room_id">
                                                <?php $__currentLoopData = $room; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room_one): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option <?php if(old(
                                            'special_degree_id') == $room_one->id): ?> selected="true" <?php endif; ?>
                                                    value="<?php echo e($room_one->id); ?>">
                                                        <?php echo e($room_one->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </section>
                            <!-- Step 3 -->


                        </form>
                    </div>
                </div>


                <!-- success Popup html Start -->
                <div class="modal fade" id="success-modal" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body text-center font-18">
                                <h3 class="mb-20">Form Submitted!</h3>
                                <div class="mb-30 text-center"><img
                                            src="<?php echo e(asset('assets/admin/vendors/images/success.png')); ?>"></div>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- success Popup html End -->
            </div>

        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
    <!-- bootstrap-tagsinput js -->
    
    <!-- bootstrap-touchspin js -->
    
    

    <script type="text/javascript">
        $(".wizard-content .wizard .actions ul li a[href='#next']").html("Keyingi");
        $(".wizard-content .wizard .actions ul li a[href='#previous']").html("Oldingi");
        $(".wizard-content .wizard .actions ul li a[href='#finish']").html("Saqlash");
    </script>


    <script type="text/javascript">
        $('select[name="region_id"]').change(function () {
            get_regions();
        });

        $('select[name="country_id"]').change(function () {
            setTimeout(
                function () {
                    get_regions();
                }, 1000);
        });
        $(document).ready(function () {
            get_regions();
        })

        function get_regions() {
            var old_area = '<?php echo e(old('
        area_id
        ')); ?>';
            id = $('select[name="region_id"]').val();
            if (id != "") {
                var url = '/mk/get-areas/' + id;
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function (result) {
                        var areas = '';
                        result = JSON.parse(result);
                        $.each(result, function (index, el) {
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
        $('select[name="country_id"]').change(function () {
            get_countrys();
        });
        $(document).ready(function () {
            get_countrys();
        });

        function get_countrys() {
            var old_region = '<?php echo e(old('
        region_id
        ')); ?>';
            id = $('select[name="country_id"]').val();
            if (id != "") {
                var url = '/mk/get-regions/' + id;
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function (result) {
                        var regions = '';
                        result = JSON.parse(result);
                        $.each(result, function (index, el) {
                            if (old_region == el['id']) {
                                regions = regions + '<option selected="true" value="' + el['id'] +
                                    '">' + el['name'] + '</option>';
                            } else {
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

    <script type="text/javascript">
        $('select[name="faculty_id"]').change(function () {
            get_directions();
        });
        $(document).ready(function () {
            get_directions();
        });

        function get_directions() {
            var old_direction = '<?php echo e(old('
        direction_id
        ')); ?>';
            id = $('select[name="faculty_id"]').val();
            if (id != "") {
                var url = '/mk/get-direction/' + id;
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function (result) {
                        var regions = '';
                        result = JSON.parse(result);
                        $.each(result, function (index, el) {
                            if (old_direction == el['id']) {
                                regions = regions + '<option selected="true" value="' + el['id'] +
                                    '">' + el['name'] + '</option>';
                            } else {
                                regions = regions + '<option value="' + el['id'] + '">' + el['name'] +
                                    '</option>';
                            }
                        });
                        $('select[name="direction_id"]').html(regions);
                    }
                })
            }
        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('mk.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/archive/resources/views/mk/pages/student/create.blade.php ENDPATH**/ ?>