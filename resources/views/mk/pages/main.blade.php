@extends('mk.layouts.master')
@section('title')
{{"TSUL Archive"}}
@endsection
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
@section('content')
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
                                <li class="breadcrumb-item"><a href="{{ route('mk') }}">Bosh</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Statistika</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a class="p-2 m-2" href="{{ route('student.index') }}">
                            <i class="icon-copy dw dw-list" style="font-size: 20px"></i>
                        </a>
                        <a class="btn btn-primary " href="{{ route('student.create') }}" role="button">
                            Talaba qo'shish
                        </a>
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
@endsection


@section('js')

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

@endsection
