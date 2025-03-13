

<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<?php $__env->startSection('content'); ?>
    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Asosiy</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('mk')); ?>">Bosh</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Statistika</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a class="p-2 m-2" href="<?php echo e(route('student.index')); ?>">
                            <i class="icon-copy dw dw-list" style="font-size: 20px"></i>
                        </a>
                        <a class="btn btn-primary " href="<?php echo e(route('student.create')); ?>" role="button">
                            Talaba qo'shish
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="row clearfix progress-box">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="card-box pd-30 height-100-p">
                        <div class="progress-box text-center">
                            <input type="text" class="knob dial4" value="300" data-width="100" data-height="100"
                                data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#a683eb"
                                data-angleOffset="180" readonly>
                            <h5 class="text-light-purple padding-top-10 h5"> Buyruq / Kengash qarori </h5>
                            <span class="d-block">
                                
                                <i class="fa text-light-purple fa-line-chart"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="card-box pd-30 height-100-p">
                        <div class="progress-box text-center">
                            <input type="text" class="knob dial2" value="300" data-width="100" data-height="100"
                                data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#00e091"
                                data-angleOffset="180" readonly>
                            <h5 class="text-light-green padding-top-10 h5">Faol hujjatlar</h5>
                            <span class="d-block">
                                
                                <i class="fa text-light-green fa-line-chart"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="card-box pd-30 height-100-p">
                        <div class="progress-box text-center">
                            <input type="text" class="knob dial1" value="300" data-width="100" data-height="100"
                                data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#1b00ff"
                                data-angleOffset="180" readonly>
                            <h5 class="text-blue padding-top-10 h5">Doimiy / Muddatli hujjatlar</h5>
                            <span class="d-block">
                                
                                <i class="fa fa-line-chart text-blue"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="card-box pd-30 height-100-p">
                        <div class="progress-box text-center">
                            <input type="text" class="knob dial3" value="300" data-width="100" data-height="100"
                                data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#f56767"
                                data-angleOffset="180" readonly>
                            <h5 class="text-light-orange padding-top-10 h5"> Faol bo'lmaganlar </h5>
                            <span class="d-block">
                                
                                <i class="fa text-light-orange fa-line-chart"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                    <div class="card-box pd-30 pt-10 height-100-p">
                        <h2 class="mb-30 h4">Hujjat ta'luqliligi bo'yicha holati</h2>
                        <div class="browser-visits">
                            <ul>
                                <li class="d-flex flex-wrap align-items-center">
                                    <div class="icon">
                                        <span style="color: #1b00ff;" class="icon-copy ti-slice"></span>

                                    </div>
                                    <div class="browser-name">O'quv yo'nalish</div>
                                    <div class="visit"><span class="badge badge-pill badge-primary">
                                            
                                        </span>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap align-items-center">
                                    <div class="icon">

                                        <span style="color: #1b00ff;" class="icon-copy ti-signal"></span>
                                        
                                    </div>
                                    <div class="browser-name">Ilmiy yo'nalish</div>
                                    <div class="visit"><span class="badge badge-pill badge-secondary">
                                            
                                        </span>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap align-items-center">
                                    <div class="icon">
                                        <i style="color: #1b00ff;" class="icon-copy fa fa-star-half-empty"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div class="browser-name">Ma'naviy yo'nalish</div>
                                    <div class="visit"><span class="badge badge-pill badge-success">
                                            
                                        </span>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap align-items-center">
                                    <div class="icon">
                                        <i style="color: #1b00ff;" class="icon-copy fa fa-dot-circle-o"
                                            aria-hidden="true"></i>
                                    </div>
                                    <div class="browser-name">Xalqaro yo'nalish</div>
                                    <div class="visit">
                                        <span class="badge badge-pill badge-warning">
                                            
                                        </span>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap align-items-center">
                                    <div class="icon">
                                        <i style="color: #1b00ff;" class="icon-copy ion-ionic"></i>
                                    </div>
                                    <div class="browser-name">Kadr yo'nalishi</div>
                                    <div class="visit"><span class="badge badge-pill badge-info">
                                            
                                        </span>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12 mb-30">
                    <div class="bg-white pd-20 card-box mb-30 h-100">
                        <div id="chart5"></div>
                    </div>
                </div>
            </div>

            <div class="footer-wrap pd-20 mb-20 card-box">
                <a href="https://t.me/ShokirjonMK" style="text-decoration: none" target="_blank">TOSHKENT DAVLAT YURIDIK
                    UNIVERSITETI
                    "ELEKTRON UNIVERSITET" MARKAZI</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

    <script>
        Highcharts.chart('chart5', {
            title: {
                text: 'Statistika'
            },
            xAxis: {
                // categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            series: [{
                type: 'pie',
                allowPointSelect: true,
                keys: ['name', 'y', 'selected', 'sliced'],
                data: [
                    ['Kadr yo\'nalish', 23, false],
                    ['Ilmiy yo\'nalish', 22, false],
                    ['Ma\'naviy yo\'nalish', 32, false],
                    ['O\'quv yo\'nalish', 31, true, true],
                    ['Xalqaro yo\'nalish', 21, false]
                ],
                showInLegend: true
            }]
        });
    </script>

    <script>
        $("text.highcharts-credits").empty();
        //highcharts-credits
    </script>

    <script>
        $(".dial1").knob();
        $({
            animatedVal: 0
        }).animate({
            animatedVal: 22
        }, {
            duration: 3000,
            easing: "swing",
            step: function() {
                $(".dial1").val(Math.ceil(this.animatedVal)).trigger("change");
            }
        });

        $(".dial2").knob();
        $({
            animatedVal: 0
        }).animate({
            animatedVal: 22
        }, {
            duration: 3000,
            easing: "swing",
            step: function() {
                $(".dial2").val(Math.ceil(this.animatedVal)).trigger("change");
            }
        });

        $(".dial3").knob();
        $({
            animatedVal: 0
        }).animate({
            animatedVal: 22
        }, {
            duration: 3000,
            easing: "swing",
            step: function() {
                $(".dial3").val(Math.ceil(this.animatedVal)).trigger("change");
            }
        });

        $(".dial4").knob();
        $({
            animatedVal: 0
        }).animate({
            animatedVal: 22
        }, {
            duration: 3000,
            easing: "swing",
            step: function() {
                $(".dial4").val(Math.ceil(this.animatedVal)).trigger("change");
            }
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('mk.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tsul\tsul-archive\tsul-archive\resources\views/mk/pages/main.blade.php ENDPATH**/ ?>