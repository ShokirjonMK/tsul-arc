<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
<style>
    p{
        font-size: 14pt;
    }
</style>
    <title>Hello, world!</title>
</head>
<body style="padding-left: 10%; padding-right: 10%;" class="container">
<div class="container">
    <div class="pt-5">
        <p style="text-align: center;" class="pt-3">
            <strong>
                O‘ZBEKISTON RESPUBLIKASI ADLIYAVAZIRLIGI <br>TOSHKENT DAVLAT YURIDIK UNIVERSITETI
            </strong>
        </p>
    </div>

    <hr style="border: 3px solid black;">

    <div style="float:left;">
        <p>
            20___yil __ ______ <br>
            _______________-son
        </p>
    </div>
    <div style="float: right;">
        <p>Toshkent shahri</p>
    </div>


    <div style="clear: right; margin-top: 50px;">
        <p style="text-align: center;"><strong>ARXIV MA’LUMOTNOMASI</strong></p>

        <div>
            <p style="text-indent: 50px; margin-top: 0; margin-bottom: 2px; ">
                Toshkent davlat yuridik <?php echo e($enter_date > 2013 ? 'universitetining' : 'institutining'); ?> arxiv hujjatlariga asosan, <?php echo e($student->last_name); ?>  <?php echo e($student->first_name); ?> <?php echo e($student->middle_name); ?>

                Toshkent davlat yuridik <?php echo e($enter_date > 2013 ? 'universitetining' : 'institut'); ?> rektorining <?php echo e($student->enter_order_date); ?> dagi <?php echo e($student->enter_order); ?>-sonli buyrug‘i asosida kunduzgi
                bo‘limga <?php echo e($student->is_contract == 1 ? 'kontrakt' : 'grand'); ?> asosida talabalar safiga qabul qilingan.
            </p>
        </div>

        <div>
            <p style="text-indent: 50px; margin-top: 0; margin-bottom: 2px;">
                Toshkent davlat yuridik <?php echo e($graduate_date > 2013 ? 'universiteti' : 'instituti'); ?> rektorining <?php echo e($student->graduated_order_date); ?> dagi <?php echo e($student->graduated_order); ?>-son buyrug‘i asosida<?php echo e($student->last_name); ?>  <?php echo e($student->first_name); ?>

                <?php echo e($student->middle_name); ?> “yurusprudensiya” yo‘nalishi bo‘yicha tamomlagan va unga <?php $__currentLoopData = $edu_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($type->id == $student->edu_type_id): ?> <?php echo e($type->name); ?> <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> darajali <?php echo e($student->diplom_type == 1 ? 'imtiyozsiz' : 'imtiyozli'); ?>

                diplom berilgan.
            </p>
        </div>

        <div>
            <p style="text-indent: 50px; margin-top: 0;">
                O‘zbekiston Respublikasi Prezidentining 2013-yil 28-iyundagi “Yuridik kadrlar tayyorlash tizimini yanada
                takomillashtirish chora- tadbirlari to‘g‘risida”gi PQ–1990-son qaroriga asosan Toshkent davlat yuridik
                instituti Toshkent davlat yuridik universiteti etib qayta tashkil etilgan
            </p>
        </div>

        <div class="d-flex justify-content-between p-5">
            <div style="float: left;">
                <p>
                    <strong>Arxiv mudiri</strong>
                </p>
            </div>
            <div style="float: right;">
                <p>
                    <strong><?php echo e($mudir[0]->fio ?? ''); ?></strong>
                </p>
            </div>
        </div>
    </div>

</div>


</body>
</html>
<?php /**PATH /var/www/archive/resources/views/mk/pages/student/pdf_student.blade.php ENDPATH**/ ?>