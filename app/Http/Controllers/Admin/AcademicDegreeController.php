<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicDegree;
use Illuminate\Http\Request;

class AcademicDegreeController extends Controller
{

    public function index()
    {
        $degrees = AcademicDegree::where('is_deleted' , 0)->get();
        return view('admin.pages.academic_degrees.index', [
            'data' => $degrees
        ]);
//        return $degrees;
    }

    public function store(Request $request)
    {
//        return $request;
        $newDegree = new AcademicDegree();
        $newDegree->name = $request->name;
        $newDegree->name_ru = $request->name;
        $newDegree->name_en = $request->name;
        $newDegree->status = 1;
        $newDegree->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $degree = AcademicDegree::find($id);
        if ($degree) {
            $degree->is_deleted = 1;
            $degree->update();
        }
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $degree = AcademicDegree::find($id);
        if ($degree) {
            $degree->name = $request->name;
            $degree->name_ru = $request->name;
            $degree->name_en = $request->name;
            $degree->update();
        }
        return redirect()->back();
    }
}
