@extends('admin.layouts.master')
@section('content')
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
                        <a href="{{ route('staff.create') }}" class="pr-4 btn btn-primary"><i class="fa fa-plus"></i> Yangi
                        </a>
                    </div>

                    <form method="GET" action="{{ route('staff.index') }}" class="mb-3 ml-5 mr-5">
                        <div class="row">
                            <!-- Ta'lim turi filter (EduType model orqali) -->
                            <div class="col-md-2">
                                <label for="academic_degree">Ilmiy daraja</label>
                                <select name="academic_degree" id="academic_degree" class="form-control">
                                    <option value="">Barchasi</option>
                                    @foreach ($academic_degree as $academic_deg)
                                        <option value="{{ $academic_deg->id }}"
                                            {{ request('academic_degree') == $academic_deg->id ? 'selected' : '' }}>
                                            {{ $academic_deg->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="degree">Ilmiy unvon</label>
                                <select name="degree" id="degree" class="form-control">
                                    <option value="">Barchasi</option>
                                    @foreach ($degree as $degreeOne)
                                        <option value="{{ $degreeOne->id }}"
                                            {{ request('degree') == $degreeOne->id ? 'selected' : '' }}>
                                            {{ $degreeOne->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="stavka_id">Ish stavkasi</label>
                                <select name="stavka_id" id="stavka_id" class="form-control">
                                    <option value="">Barchasi</option>
                                    @foreach ($stavka as $stavkaOne)
                                        <option value="{{ $stavkaOne->id }}"
                                            {{ request('stavka_id') == $stavkaOne->id ? 'selected' : '' }}>
                                            {{ $stavkaOne->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="fio">F.I.O bo‘yicha qidirish
                                    <i class="fa fa-info-circle text-primary" data-toggle="tooltip" data-placement="top"
                                        title="Masalan: 'abd sher' deb qidirsangiz 'Abdiyev Sherzod' natija chiqadi."></i>
                                </label>
                                <input type="text" name="fio" id="fio" class="form-control"
                                    value="{{ request('fio') }}" placeholder="Ism, familiya yoki otasining ismi">
                            </div>



                            <!-- Qidirish tugmasi -->
                            <div class="col-md-3 align-self-end">
                                <button type="submit" class="btn btn-primary">Filtrlash</button>
                                <a href="{{ route('staff.index') }}" class="btn btn-secondary">Tozalash</a>
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
                                @php  $i=1; @endphp
                                @foreach ($data as $key => $item)
                                    <tr>
                                        <td>{{ $data->firstItem() + $key }}</td>

                                        <td> {{ $item->fio() }} </td>
                                        <td> {{ $item->begin_at }} </td>
                                        <td> {{ $item->end_at }} </td>
                                        <td> {{ $item->room->name ?? '' }} </td>
                                        <td class="last-td">
                                            <a class="p-2" href="{{ route('staff.show', ['staff' => $item->id]) }}"><i
                                                    class="dw dw-eye"></i></a>
                                            <a class="p-2" href="{{ route('staff.edit', ['staff' => $item->id]) }}"><i
                                                    class="dw dw-edit2"></i></a>
                                            <span class="text-danger button-delete" itemid="{{ $item->id }}"
                                                style="cursor: pointer">
                                                <i class="dw dw-trash"></i>
                                            </span>
                                            <form class="deleteform{{ $item->id }}"
                                                action="{{ route('staff.destroy', ['staff' => $item->id]) }}"
                                                method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>
                                        </td>
                                    </tr @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between align-items-center mt-3 ml-5 mr-5">
                            <div>
                                <strong>Jami xodimlar soni: {{ $data->total() }}</strong>
                            </div>
                            <div>
                                {{ $data->links() }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection

    @section('js')
        {{-- JS kod sahifalashni yashirish uchun --}}
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

        <script src="{{ asset('assets/admin/src/plugins/switchery/switchery.min.js') }}"></script>
        <!-- bootstrap-tagsinput js -->
        <script src="{{ asset('assets/admin/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
        <!-- bootstrap-touchspin js -->
        <script src="{{ asset('assets/admin/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
        <script src="{{ asset('assets/admin/vendors/scripts/advanced-components.js') }}"></script>

        <script>
            $('.button-delete').on('click', function() {
                if (confirm('Ma`lumotni o`chirasizmi?')) {
                    $('.deleteform' + $(this).attr('itemid')).submit()
                }
            })
        </script>
    @endsection
