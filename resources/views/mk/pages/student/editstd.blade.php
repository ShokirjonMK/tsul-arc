@extends('mk.layouts.master')
@section('link')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/src/plugins/jquery-steps/jquery.steps.css') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>

@endsection
@section('content')
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

        .img-select>iframe {
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

        div>label>span {
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
                        <form autocomplete="off" action="{{ route('student.update',['student'=>$data->id]) }}"
                            class="tab-wizard wizard-circle wizard" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <h5>Asosiy ma`lumotlar</h5>
                            <section>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label><span>*</span>Familiya :
                                                        <span class="error">
                                                            @error('last_name')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </label>
                                                    <input type="text" class="form-control" name="last_name"
                                                        value="@if(old('last_name')) {{old('last_name')}} @else  {{ $data->last_name }} @endif">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label><span>*</span>Ism :
                                                        <span class="error">
                                                            @error('first_name')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </label>
                                                    <input type="text" class="form-control" name="first_name"
                                                        value="@if(old('first_name')) {{ old('first_name') }} @else {{ $data->first_name}} @endif">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Sharif :
                                                        <span class="error">
                                                            @error('middle_name')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </label>
                                                    <input type="text" class="form-control" name="middle_name"
                                                        value="@if(old('middle_name')) {{ old('middle_name') }} @else {{ $data->middle_name}} @endif">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label><span>*</span>Davlat:
                                                        <span class="error">
                                                            @error('country_id')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </label>

                                                    <select class="form-control" name="country_id">
                                                        @foreach ($countries as $country)
                                                            <option @if (old('country_id') == $country->id || $country->code == 'UZ' || $data->country_id == $country->id ) selected @endif
                                                                value="{{ $country->id }}">{{ $country->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label><span>*</span>Viloyat:
                                                        <span class="error">
                                                            @error('region_id')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </label>

                                                    <select class="form-control" name="region_id">
                                                        @foreach ($regions as $region)
                                                            <option @if ((old('region_id') == $region->id) || ($data->region_id == $region->id)) selected @endif
                                                                value="{{ $region->id }}">{{ $region->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label><span>*</span>Tuman:
                                                        <span class="error">
                                                            @error('area_id')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </label>
                                                    <select class="form-control" name="area_id">

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label><span>*</span>Tug'ulgan manzili:
                                                        <span class="error">
                                                            @error('address')
                                                                {{ $message }}
                                                            @enderror
                                                        </span>
                                                    </label>
                                                    <input type="text" class="form-control" name="address"
                                                        value="@if( old('address') ){{ old('address') }} @else {{$data->address }} @endif">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><span>*</span>Tug'ilgan sana :
                                                <span class="error">
                                                    @error('birthday')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </label>
                                            <input class="form-control" name="birthday" max="{{ $date18 }}"
                                                value="@if(old('birthday')){{old('birthday')}}@else{{$data->birthday}}@endif"
                                                placeholder="Sanani tanlang"
                                                type="date">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><span>*</span>Kirgan yili :
                                                <span class="error">
                                                    @error('enter_year')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </label>
                                            <input class="form-control" name="enter_year" min="1980"
                                                value="@if(old('enter_year')){{old('enter_year')}}@else{{$data->enter_year}}@endif"
                                                max="{{ $this_year }}"
                                                type="number" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><span>*</span>Buyruq raqami :
                                                <span class="error">
                                                    @error('enter_order')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </label>
                                            <input class="form-control" name="enter_order"
                                                value="@if(old('enter_order')){{old('enter_order')}}@else{{$data->enter_order}}@endif" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><span>*</span>Buyruq sanasi :
                                                <span class="error">
                                                    @error('enter_order_date')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </label>
                                            <input class="form-control" name="enter_order_date"
                                                value="@if(old('enter_order_date')){{old('enter_order_date')}}@else{{$data->enter_order_date}}@endif" type="date" />
                                        </div>
                                    </div>
                                </div>

                                {{--  --}}
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
                                                    @error('faculty')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </label>
                                            <input type="text" class="form-control" name="faculty"
                                                   value="@if(old('faculty')){{old('faculty')}}@else{{$data->faculty}}@endif">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><span>*</span>Yo'nalish :
                                                <span class="error">
                                                    @error('direction')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </label>
                                            <input type="text" class="form-control" name="direction"
                                                   value="@if(old('direction')){{old('direction')}}@else{{$data->direction}}@endif">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label><span>*</span>Ta'lim shakli :
                                                <span class="error">
                                                    @error('edu_form_id')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </label>
                                            <select class="form-control" name="edu_form_id">
                                                @foreach ($edu_form as $edu_form_one)
                                                    <option @if ((old('degree_id') == $edu_form_one->id) || ($data->edu_form_id == $edu_form_one->id)) selected="true" @endif
                                                        value="{{ $edu_form_one->id }}">{{ $edu_form_one->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label><span>*</span>Ta'lim shakli :
                                                <span class="error">
                                                    @error('is_contract')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </label>
                                            <select class="form-control" name="is_contract">
                                                <option @if ((old('degree_id') == 0) || ($data->is_contract == 0) ) selected="true" @endif value="0">Grant
                                                </option>
                                                <option @if (old('degree_id') == 1 || ($data->is_contract == 1) ) selected="true" @endif value="1">
                                                    Kontarkt </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label><span>*</span>Bitirgan yili :
                                                <span class="error">
                                                    @error('graduated_year')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </label>
                                            <input class="form-control" name="graduated_year" min="1980"
                                                value="@if(old('graduated_year')){{old('graduated_year')}}@else{{$data->graduated_year}}@endif" max="{{ $this_year }}"
                                                type="number" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><span>*</span>Bitirgan buyruq raqami va sanasi:
                                                <span class="error">
                                                    @error('graduated_order')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                                <span class="error">
                                                    @error('graduated_order_date')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </label>
                                            <div class="j-flex">

                                                <input type="text" id="graduated_order" class="form-control "
                                                    style="width: 30%;" name="graduated_order" placeholder="raqami"
                                                    value="@if(old('graduated_order')){{old('graduated_order')}}@else{{$data->graduated_order}}@endif">
                                                <input type="date" id="graduated_order_date" class="form-control "
                                                    style="width: 68%" name="graduated_order_date"
                                                    value="@if(old('graduated_order_date')){{old('graduated_order_date')}}@else{{$data->graduated_order_date}}@endif">
                                            </div>
                                        </div>
                                    </div>

{{--                                    --}}
                                    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><span>*</span>Diplom turi :
                                                <span class="error">
                                                    @error('privileged')
                                                    {{ $message }}
                                                    @enderror
                                                </span>
                                            </label>
                                            <select class="form-control" name="privileged">

                                                <option @if (old(
                                            'privileged') == 0) selected="true" @endif
                                                value="0">Imtiyozsiz
                                                </option>

                                                <option @if (old(
                                            'privileged') == 1) selected="true" @endif
                                                value="1">Imtiyozli
                                                </option>


                                            </select>
                                        </div>
                                    </div>

{{--                                    --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label><span>*</span>Ta'lim turi :
                                                <span class="error">
                                                    @error('edu_type_id')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </label>
                                            <select class="form-control" name="edu_type_id">
                                                @foreach ($edu_type as $edu_type_one)
                                                    <option @if ((old('degree_id') == $edu_type_one->id) || ($data->edu_type_id == $edu_type_one->id)) selected="true" @endif
                                                        value="{{ $edu_type_one->id }}">{{ $edu_type_one->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Topshirgan hujjatlari:
                                                <span class="error">
                                                    @error('document_type')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </label>
                                            <input type="text" class="form-control" name="document_type"
                                                value="@if(old('document_type')){{old('document_type')}}@else{{$data->document_type}}@endif">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>TDYI/TDYU ilova:
                                                <span class="error">
                                                    @error('ilova')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </label>
                                            <input type="text" class="form-control" name="ilova"
                                                value="@if(old('ilova')){{old('ilova')}}@else{{$data->ilova}}@endif">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Sinov daftarchasi:
                                                <span class="error">
                                                    @error('sinov_daftarchasi')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </label>
                                            <input type="text" class="form-control" name="sinov_daftarchasi"
                                                value="@if(old('sinov_daftarchasi')){{old('sinov_daftarchasi')}}@else{{$data->sinov_daftarchasi}}@endif">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Topografiya nomeri:
                                                <span class="error">
                                                    @error('topografiya_nomeri')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </label>
                                            <input type="text" class="form-control" name="topografiya_nomeri"
                                                value="@if(old('topografiya_nomeri')){{old('topografiya_nomeri')}}@else{{$data->topografiya_nomeri}}@endif">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Ro'yhat raqami:
                                                <span class="error">
                                                    @error('royhat_raqami')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </label>
                                            <input type="text" class="form-control" name="royhat_raqami"
                                                value="@if(old('royhat_raqami')){{old('royhat_raqami')}}@else{{$data->royhat_raqami}}@endif">
                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Saqlanadigan xona :
                                                <span class="error">
                                                    @error('room_id')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </label>
                                            <select class="form-control" name="room_id">
                                                @foreach ($room as $room_one)
                                                    <option @if ((old('room_id') == $room_one->id) || ($data->room_id == $room_one->id )) selected="true" @endif
                                                        value="{{ $room_one->id }}">
                                                        {{ $room_one->name }}</option>
                                                @endforeach

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
                                        src="{{ asset('assets/admin/vendors/images/success.png') }}"></div>
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

@endsection

@section('js')

    <script type="text/javascript">
        $(".wizard-content .wizard .actions ul li a[href='#next']").html("Keyingi");
        $(".wizard-content .wizard .actions ul li a[href='#previous']").html("Oldingi");
        $(".wizard-content .wizard .actions ul li a[href='#finish']").html("Saqlash");
    </script>


    <script type="text/javascript">
        $('select[name="region_id"]').change(function() {
            get_regions();
        });

        $('select[name="country_id"]').change(function() {
            setTimeout(
                function() {
                    get_regions();
                }, 1000);
        });
        $(document).ready(function() {
            get_regions();
        })

        function get_regions() {
            var old_area = '{{ old('area_id') }}';
            var data_area = '{{ $data->area_id }}';
            id = $('select[name="region_id"]').val();
            if (id != "") {
                var url = '/mk/get-areas/' + id;
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(result) {
                        var areas = '';
                        result = JSON.parse(result);
                        $.each(result, function(index, el) {
                            if ((old_area == el['id']) || (data_area == el['id'])) {
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
            var old_region = '{{ old('region_id') }}';
            var data_region = '{{ $data->region_id }}';
            id = $('select[name="country_id"]').val();
            if (id != "") {
                var url = '/mk/get-regions/' + id;
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(result) {
                        var regions = '';
                        result = JSON.parse(result);
                        $.each(result, function(index, el) {
                            if ((old_region == el['id']) || (data_region == el['id'])) {
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
        $('select[name="faculty_id"]').change(function() {
            get_directions();
        });
        $(document).ready(function() {
            get_directions();
        });

        function get_directions() {
            var old_direction = '{{ old('direction_id') }}';
            var data_direction = '{{ $data->direction_id }}';
            id = $('select[name="faculty_id"]').val();
            if (id != "") {
                var url = '/mk/get-direction/' + id;
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(result) {
                        var regions = '';
                        result = JSON.parse(result);
                        $.each(result, function(index, el) {
                            if ((old_direction == el['id']) || (data_direction == el['id'])) {
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

@endsection
