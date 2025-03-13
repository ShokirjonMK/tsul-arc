@extends('admin.layouts.master')

@section('title')
Universitetlar
@endsection
@section('content')

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="card-box mb-30">
					<div class="pd-20" style="display: flex; justify-content: space-between;">
						<a href="#" class="text-blue h4" data-toggle="modal" data-target="#order_pdf" >Universitetlar</a>
						<a href="#" class="pr-4 btn btn-primary" data-toggle="modal" data-target="#university_createmodal" ><i class="fa fa-plus"></i> Yangi </a>
					</div>
					<div class="pb-20">
						{{-- <table class="data-table table stripe hover nowrap"> --}}
						{{-- <table class="table hover multiple-select-row data-table-export nowrap"> --}}
						<table class="table hover  data-table-export nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">#</th>
									<th>Nomi</th>
									<th class="datatable-nosort">Amallar</th>
								</tr>
							</thead>
							<tbody>
								@php
								$i=1;
								@endphp
                       		@foreach($data as $item)
								<tr class="@if($item->status==1) table-success @else table-secondary @endif">
									<td class="table-plus">{{ $i++}}</td>

									<td>
										{{$item->name}}
									</td>

									<td>

{{--										<a class="p-2" href="#"  data-toggle="modal" data-target="#bd-example-modal-lg{{$item->id}}"><i class="dw dw-eye"></i></a>--}}
										<a class="p-2" href="#" data-toggle="modal" data-target="#editmodal{{$item->id}}"><i class="dw dw-edit2"></i></a>

{{--										<a class="p-2" href="#" data-toggle="modal" data-target="#editmodal{{$item->id}}"><i class="dw dw-edit2"></i></a>--}}
										<a class="p-2" type="button" data-toggle="modal" data-target="#confirmation-modal{{$item->id}}" href="#"><i class="dw dw-delete-3"></i> </a>

									</td>
								</tr>
								@include('admin.pages.academic_degrees.delete')
{{--								@include('admin.pages.department.modal')--}}
								@include('admin.pages.academic_degrees.editmodal')
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
    	</div>

	</div>
</div>


@include('admin.pages.academic_degrees.createmodal')


@endsection

@section('js')
	<script>

	</script>
@endsection
