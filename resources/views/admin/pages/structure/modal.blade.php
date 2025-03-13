
<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel{{$item->id}}" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myLargeModalLabel{{$item->id}}">{{$item->name}}</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="close">&times;</span></button>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Nomi</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control" type="text"  readonly="true"  name="name" value="{{$item->name}}" placeholder="Johnny Brown">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Batafsil</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control" placeholder="Batafsil xususiyati"  readonly="true" name="description" value="{{$item->description}}"  type="search">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Bo'ysunivchisi</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control" placeholder=""  readonly="true" name="description" value="{{$item->parent()}}"  type="search">
										
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Hodimlar soni</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control"  readonly="true" name="count_workers" value="{{$item->count_workers}}" type="number">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Holati</label>
									<div class="col-sm-12 col-md-10">
										<select disabled="true" class="custom-select col-12">
											<option selected="">{{$item->status()}}</option>
											{{-- <option value="1"></option>
											<option value="2">Two</option>
											<option value="3">Three</option> --}}
										</select>
									</div>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
							{{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
						</div>
					</div>
				</div>
			</div>
