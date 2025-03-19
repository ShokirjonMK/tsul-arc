@extends('mk.layouts.master')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
                        <a href="#" class="text-blue h4">Talabalar </a>
                        <a href="{{ route('student.create') }}" class="pr-4 btn btn-primary"><i class="fa fa-plus"></i>
                            Qo'shish </a>
                    </div>

                    <form method="GET" action="{{ route('student.index') }}" class="mb-3 ml-5">
                        <div class="row">
                            <!-- Bitirgan yili filter -->
                            <div class="col-md-2">
                                <label for="graduated_year">Bitirgan yili</label>
                                <select name="graduated_year" id="graduated_year" class="form-control">
                                    <option value="">Barchasi</option>
                                    @foreach (range(date('Y'), 1990) as $year)
                                        <option value="{{ $year }}"
                                            {{ request('graduated_year') == $year ? 'selected' : '' }}>
                                            {{ $year }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Ta'lim turi filter (EduType model orqali) -->
                            <div class="col-md-2">
                                <label for="education_type">Ta'lim turi</label>
                                <select name="education_type" id="education_type" class="form-control">
                                    <option value="">Barchasi</option>
                                    @foreach ($eduTypes as $eduType)
                                        <option value="{{ $eduType->id }}"
                                            {{ request('education_type') == $eduType->id ? 'selected' : '' }}>
                                            {{ $eduType->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="education_form">Ta'lim shakli</label>
                                <select name="education_form" id="education_form" class="form-control">
                                    <option value="">Barchasi</option>
                                    @foreach ($eduForms as $eduForm)
                                        <option value="{{ $eduForm->id }}"
                                            {{ request('education_form') == $eduForm->id ? 'selected' : '' }}>
                                            {{ $eduForm->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- F.I.O. bo‘yicha filter -->
                            {{-- <div class="col-md-3">
                                <label for="fio">F.I.O bo‘yicha qidirish</label>
                                <input type="text" name="fio" id="fio" class="form-control"
                                    value="{{ request('fio') }}" placeholder="Ism, familiya yoki otasining ismi">
                            </div> --}}

                            <div class="col-md-2">
                                <label for="fio">F.I.O bo‘yicha qidirish
                                    <i class="fa fa-info-circle text-primary" data-toggle="tooltip" data-placement="top"
                                        title="Masalan: 'abd sher' deb qidirsangiz 'Abdiyev Sherzod' natija chiqadi."></i>
                                </label>
                                <input type="text" name="fio" id="fio" class="form-control"
                                    value="{{ request('fio') }}" placeholder="Ism, familiya yoki otasining ismi">
                            </div>



                            <!-- Qidirish tugmasi -->
                            <div class="col-md-2 align-self-end">
                                <button type="submit" class="btn btn-primary">Filtrlash</button>
                                <a href="{{ route('student.index') }}" class="btn btn-secondary">Tozalash</a>
                            </div>
                            <div class="col-md-2 align-self-end">
                                {{-- <a href="{{ route('students.export-excel', request()->query()) }}" class="btn btn-success">
                                    <i class="fas fa-file-excel"></i>
                                </a> --}}

                            </div>
                        </div>
                    </form>



                    <div class="pb-20">
                        <table class=" data-table-export table stripe hover nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>F.I.O</th>
                                    <th>Kirgan</th>
                                    <th>Bitirgan</th>
                                    <th>Xona</th>
                                    <th>Amallar</th>
                                </tr>
                            </thead>
                            {{-- <tbody>
                                @php  $i=1; @endphp
                                @foreach ($students as $item)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td> {{ $item->fio() }} </td>
                                        <td> {{ $item->enter_year }} | {{ $item->enter_order }} |
                                            {{ $item->enter_order_date }} </td>
                                        <td> {{ $item->graduated_year }} | {{ $item->graduated_order }} |
                                            {{ $item->graduated_order_date }} </td>
                                        <td> @isset($item->room)
                                                {{ $item->room->name }}
                                            @endisset </td>
                                        <td class="last-td">
                                            <a class="p-2"
                                                href="{{ route('student.show', ['student' => $item->id]) }}"><i
                                                    class="dw dw-eye"></i></a>
                                            <a class="p-2"
                                                href="{{ route('student.edit', ['student' => $item->id]) }}"><i
                                                    class="dw dw-edit2"></i></a>

                                            <a data-toggle="modal" id="smallButton" data-target="#smallModal"
                                                data-attr="{{ route('student.delete', $item->id) }}"
                                                title="Delete Project">
                                                <i class="dw dw-delete-3 text-danger"></i>
                                            </a>
                                    </tr>
                                @endforeach
                            </tbody> --}}
                            <tbody>
                                @foreach ($students as $key => $item)
                                    <tr>
                                        <td>{{ $students->firstItem() + $key }}</td>
                                        <td> {{ $item->fio() }} </td>
                                        <td> {{ $item->enter_year }} | {{ $item->enter_order }} |
                                            {{ $item->enter_order_date }} </td>
                                        <td> {{ $item->graduated_year }} | {{ $item->graduated_order }} |
                                            {{ $item->graduated_order_date }} </td>
                                        <td> @isset($item->room)
                                                {{ $item->room->name }}
                                            @endisset </td>
                                        <td class="last-td">
                                            <a class="p-2"
                                                href="{{ route('student.show', ['student' => $item->id]) }}"><i
                                                    class="dw dw-eye"></i></a>
                                            <a class="p-2"
                                                href="{{ route('student.edit', ['student' => $item->id]) }}"><i
                                                    class="dw dw-edit2"></i></a>
                                            <a data-toggle="modal" id="smallButton" data-target="#smallModal"
                                                data-attr="{{ route('student.delete', $item->id) }}"
                                                title="Delete Project">
                                                <i class="dw dw-delete-3 text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <div class="d-flex justify-content-between align-items-center mt-3 ml-5 mr-5">
                            <div>
                                <strong>Jami talabalar soni: {{ $students->total() }}</strong>
                            </div>
                            <div>
                                {{ $students->links() }}
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- small modal -->
    <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    Talabani o'chirish <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="smallBody">
                    <div>
                        <!-- the result to be displayed apply here -->
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

    <script>
        // display a modal (small modal)
        $(document).on('click', '#smallButton', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#smallModal').modal("show");
                    $('#smallBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });
    </script>

    <script>
        function Mkdelete()() {
            confirm("Press a button!");
        }
    </script>
    <script src="{{ asset('assets/admin/src/plugins/switchery/switchery.min.js') }}"></script>
    <!-- bootstrap-tagsinput js -->
    <script src="{{ asset('assets/admin/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
    <!-- bootstrap-touchspin js -->
    <script src="{{ asset('assets/admin/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/scripts/advanced-components.js') }}"></script>
@endsection
