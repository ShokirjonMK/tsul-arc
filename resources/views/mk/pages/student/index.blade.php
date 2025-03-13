@extends('mk.layouts.master')
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
                        <a href="#" class="text-blue h4">Talabalar </a>
                        <a href="{{ route('student.create') }}" class="pr-4 btn btn-primary"><i class="fa fa-plus"></i>
                            Yangi </a>
                    </div>

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
                            <tbody>
                                @php  $i=1; @endphp
                                @foreach ($data as $item)
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
                                            <a class="p-2" href="{{ route('student.show', ['student' => $item->id]) }}"><i
                                                    class="dw dw-eye"></i></a>
                                            <a class="p-2" href="{{ route('student.edit', ['student' => $item->id]) }}"><i
                                                    class="dw dw-edit2"></i></a>

                                            <a data-toggle="modal" id="smallButton" data-target="#smallModal"
                                                data-attr="{{ route('student.delete', $item->id) }}"
                                                title="Delete Project">
                                                <i class="dw dw-delete-3 text-danger"></i>
                                            </a>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $data->links() }}
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
