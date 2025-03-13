		<style>
.input-file input[type="file"] {
  visibility: hidden;
  width: 1px;
  height: 1px;
}
.input-file .btn {
  background-color: #ddd;
  border-color: #ccc;
  color: #333;
}
.input-file .file-selected {
  font-size: 10px;
  text-align: center;
  width: 100%;
  display: block;
  margin-top: 5px;
}

html,
body {
  width: 100%;
  height: 100%;
}

body {
  padding: 30px;
}

.wrap {
  display: table;
  width: 100%;
  height: 100%;
}

.valign-middle {
  display: table-cell;
  vertical-align: middle;
  text-align: center;
}

		</style>
		<div class="modal fade bs-example-modal-lg" id="university_createmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myLargeModalLabel">Ilmiy daraja qo'shish</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="close">&times;</span></button>

						</div>
							<form  action="<?php echo e(route('academic-degree.store')); ?>" method="post" enctype="multipart/form-data">
						<div class="modal-body">
								 <?php echo csrf_field(); ?>

								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Nomi</label>
									<div class="col-sm-12 col-md-10">
										<input  required="true" class="form-control" type="text"  name="name" value="" placeholder="Nomini kiriting...">
									</div>
								</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
							<button type="submit" class="btn btn-primary">Saqlash</button>
						</div>
                            </form>
					</form>
					</div>
				</div>
			</div>
<?php /**PATH /var/www/archive/resources/views/admin/pages/academic_degrees/createmodal.blade.php ENDPATH**/ ?>