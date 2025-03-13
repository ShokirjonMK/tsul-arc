@extends('admin.layouts.master')
@section('content')
<style type="text/css">
	.last-td{
        width: 100px;

        text-align: center;
    }
</style>
<div class="main-container">

    <div class="pd-ltr-20 xs-pd-20-10">


		<div class="min-height-200px">
			<div class="card-box mb-30">
					<div class="pd-20" style="display: flex; justify-content: space-between;">
						<a href="#" class="text-blue h4"  >Xodimlar </a>
						<a href="{{ route('staff.create') }}" class="pr-4 btn btn-primary" ><i class="fa fa-plus"></i> Yangi </a>
					</div>

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
	                       		@foreach($data as $item)
									<tr >
										<td>{{ $i++ }}</td>
										<td> {{ $item->fio() }} </td>
										<td> {{ $item->begin_at }} </td>
										<td> {{ $item->end_at }} </td>
										<td> {{ $item->room->name }} </td>
										<td class="last-td">
											<a class="p-2" href="{{ route('staff.show' , ['staff' => $item->id]) }}"  ><i class="dw dw-eye"></i></a>
											<a class="p-2" href="{{ route('staff.edit', ['staff' => $item->id]) }}"><i class="dw dw-edit2"></i></a>
                                                <span class="text-danger button-delete" itemid = "{{$item->id}}" style="cursor: pointer">
                                                    <i class="dw dw-trash"></i>
                                                </span>
                                            <form class="deleteform{{$item->id}}" action="{{route('staff.destroy' , ['staff' => $item->id])}}" method="post">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                            </form>
										</td>
									</tr
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
    	</div>

	</div>
</div>




@endsection

@section('js')
	<script src="{{ asset('assets/admin/src/plugins/switchery/switchery.min.js') }}"></script>
	<!-- bootstrap-tagsinput js -->
	<script src="{{ asset('assets/admin/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
	<!-- bootstrap-touchspin js -->
	<script src="{{ asset('assets/admin/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
	<script src="{{ asset('assets/admin/vendors/scripts/advanced-components.js') }}"></script>

    <script>
        $('.button-delete').on('click',function(){
            if(confirm('Ma`lumotni o`chirasizmi?')){
                $('.deleteform'+$(this).attr('itemid')).submit()
            }
        })
    </script>
@endsection
