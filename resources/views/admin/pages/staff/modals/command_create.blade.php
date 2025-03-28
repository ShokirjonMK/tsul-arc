<div class="modal fade customscroll" id="commands_add" tabindex="-1"
     role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Buyruq
                    qo'shish
                </h5>
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close" data-toggle="tooltip"
                        data-placement="bottom"
                        title="" data-original-title="Yopish">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pd-0">
                <div class="task-list-form">
                    <ul>
                        <li>
                            <form autocomplete="off" id="mukofot_form"
                                  action="{{ route('staff-command.store') }} "
                                  method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="staff_id"
                                       value="{{ $data->id }}">
                                <div class="form-group row">
                                    <label class="col-md-3">Turi va
                                        sanasi</label>
                                    <div class="col-md-9 row"
                                         style="padding-right: 0px !important;">
                                        <div class="col-md-8" style="">
                                            <select class="form-control"
                                                    name="command_type_id" required>
                                                @foreach($command_types as $command_type)
                                                    <option value="{{$command_type->id}}">{{$command_type->name}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4"
                                             style="padding-right: 0px !important;padding-left: 0px !important;">
                                            <input required type="date"
                                                   name="date"
                                                   class="form-control ">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3">Nomi</label>
                                    <div class="col-md-9">
                                        <input required type="text" name="name"
                                               placeholder="Nomini kiriting..."
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Qisqacha</label>
                                    <div class="col-md-9">
                                        <input type="text" name="description"
                                               placeholder="Qo'shimcha ma'lumot yozing..."
                                               class="form-control">
                                    </div>
                                </div>

                            </form>
                        </li>

                    </ul>
                </div>
                <div class="add-more-task">
                    {{-- <a href="#" data-toggle="tooltip" data-placement="bottom"
                            title="" data-original-title="Add Task"><i
                                class="ion-plus-circled"></i> Add More Task</a> --}}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                        data-dismiss="modal"><span
                        class="icon-copy ti-close"></span>
                    Yopish
                </button>
                <button type="submit" form="mukofot_form"
                        class="btn btn-primary"><i class="icon-copy fa fa-save"
                                                   aria-hidden="true"></i>
                    Saqlash
                </button>
            </div>
        </div>
    </div>
</div>
