<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\QualificationInfo;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Nationality;
use App\Models\Staff;
use App\Models\StaffCommand;
use PDF;

class StaffCommandController extends Controller
{
    public function store(Request $request)
    {
        $staff = Staff::find($request->staff_id);
        if ($staff){
            $new = new StaffCommand();
            $new->staff_id = $request->staff_id;
            $new->name = $request->name;
            $new->description = $request->description;
            $new->command_type_id = $request->command_type_id;
            $new->date = $request->date;
            $new->created_by = auth()->user()->id;
            $new->updated_by = auth()->user()->id;
            $new->save();
        }
        return redirect()->back();
    }

    public function destroy($id)
    {
        $staff_command = StaffCommand::find($id);
        if ($staff_command){
            $staff_command->delete();
        }
        return redirect()->back();
    }
}
