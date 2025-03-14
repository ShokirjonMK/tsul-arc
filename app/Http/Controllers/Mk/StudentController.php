<?php

namespace App\Http\Controllers\Mk;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;


use App\Models\Nationality;
use App\Models\University;
use App\Models\Country;


use App\Models\Mk\Student;
use App\Models\Region;
use App\Models\Area;
use App\Models\Lang;
use App\Models\Mk\EduForm;
use App\Models\Mk\EduType;
use App\Models\Mk\Faculty;
use App\Models\Mk\Room;
use App\Models\Mk\StdOrder;
use App\Models\Mk\StdOrderType;
use PDF;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Student::query();
        $eduTypes = EduType::all(); // Ta'lim turlarini olish
        $eduForms = EduForm::all(); // Ta'lim turlarini olish

        // Bitirgan yil bo‘yicha filter
        if ($request->filled('graduated_year')) {
            $query->where('graduated_year', $request->graduated_year);
        }

        // Ta'lim turi bo‘yicha filter
        if ($request->filled('education_type')) {
            $query->where('edu_type_id', $request->education_type);
        }

        // Ta'lim shakli bo‘yicha filter
        if ($request->filled('education_form')) {
            $query->where('edu_form_id', $request->education_form);
        }

        // F.I.O. bo‘yicha filter (first_name, last_name, middle_name)
        if ($request->filled('fio')) {
            $searchTerms = explode(' ', $request->fio); // Matnni bo‘shliqlarga ajratish
            $query->where(function ($q) use ($searchTerms) {
                foreach ($searchTerms as $term) {
                    $q->where(function ($q2) use ($term) {
                        $q2->where('first_name', 'LIKE', "%{$term}%")
                            ->orWhere('last_name', 'LIKE', "%{$term}%")
                            ->orWhere('middle_name', 'LIKE', "%{$term}%");
                    });
                }
            });
        }

        // ID bo‘yicha kamayish tartibida saralash
        $students = $query->orderBy('id', 'desc')->paginate(10);

        return view('mk.pages.student.index', compact('students', 'eduTypes', 'eduForms'));
    }



    public function index111()
    {
        // $students = Student::with('group')->get();

        $student = Student::paginate(10); // 50 tadan sahifalash

        // Ma'lumotlarni blade faylga yuborish
        // return view('mk.pages.student.index', compact('students'));

        // $student = Student::all();
        return view('mk.pages.student.index', [
            'data' => $student,
        ]);
    }


    public function delete($id)
    {
        $student = Student::find($id);

        return view('mk.pages.student.delete', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //        ini_set("memory_limit", "100M");
        //        ini_set('post_max_size', '50M');
        //        ini_set('upload_max_filesize', '50M');
        $date = date("Y-m-d");
        $this_year = date("Y");
        //        $date18 = strtotime("-18 year", strtotime($date));

        $yesterday = date("Y-m-d", strtotime("-1 day", strtotime($date)));
        $maxdateofbirth = date("Y-m-d", strtotime("-18 year", strtotime($date)));
        $mindateofbirth = date("Y-m-d", strtotime("-80 year", strtotime($date)));
        $minpassportdate = date("Y-m-d", strtotime("-10 year", strtotime($date)));

        $regions = Region::where('status', 1)->get();

        $country = Country::all();
        $faculty = Faculty::all();
        $edu_type = EduType::all();
        $edu_form = EduForm::all();
        $Room = Room::all();

        // return $nationalities;
        return view('mk.pages.student.create', [
            'regions' => $regions,
            'countries' => $country,

            'room' => $Room,
            'today' => $date,
            'faculty' => $faculty,
            'edu_type' => $edu_type,
            'edu_form' => $edu_form,
            'this_year' => $this_year,
            'yesterday' => $yesterday,
            'date18' => $maxdateofbirth,
            'date80' => $mindateofbirth,
            'minpassportdate' => $minpassportdate,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     // Kiruvchi ma'lumotlarni olish
    //     $input = $request->all();

    //     // Validatsiya
    //     $validator = Validator::make($input, [
    //         'first_name' => ['required', 'max:70', 'string'],
    //         'last_name' => ['required', 'max:70', 'string'],
    //         'country_id' => ['required', 'int'],
    //         'region_id' => ['required', 'int'],
    //         'area_id' => ['required', 'int'],
    //         'address' => ['required', 'max:255', 'string'],
    //         'birthday' => ['required', 'date'],
    //         'enter_year' => ['required', 'integer'],
    //         'enter_order' => ['required', 'max:33', 'string'],
    //         'enter_order_date' => ['required', 'date'],
    //         // 'faculty_id' => ['required', 'int'],
    //         // 'direction_id' => ['required', 'int'],
    //         'edu_form_id' => ['required', 'int'],
    //         'is_contract' => ['required', 'boolean'],
    //         'graduated_year' => ['required', 'integer'],
    //         'graduated_order' => ['required', 'string', 'max:50'],
    //         'graduated_order_date' => ['required', 'date'],
    //         'edu_type_id' => ['required', 'int'],
    //     ]);

    //     if ($validator->fails()) {
    //         // dd($validator->errors());
    //         return back()->withErrors($validator)->withInput();
    //     }

    //     // Malumotlarni yaratish
    //     $new_student = Student::create([
    //         'first_name' => $request->first_name,
    //         'last_name' => $request->last_name,
    //         'middle_name' => $request->middle_name,
    //         'country_id' => $request->country_id,
    //         'region_id' => $request->region_id,
    //         'area_id' => $request->area_id,
    //         'address' => $request->address,
    //         'birthday' => $request->birthday,
    //         'enter_year' => $request->enter_year,
    //         'enter_order' => $request->enter_order,
    //         'enter_order_date' => $request->enter_order_date,
    //         'faculty_id' => $request->faculty_id,
    //         'is_contract' => $request->is_contract,
    //         'direction_id' => $request->direction_id,
    //         'edu_form_id' => $request->edu_form_id,
    //         'graduated_year' => $request->graduated_year,
    //         'graduated_order' => $request->graduated_order,
    //         'graduated_order_date' => $request->graduated_order_date,
    //         'edu_type_id' => $request->edu_type_id,
    //         'document_type' => $request->document_type,
    //         'ilova' => $request->ilova,
    //         'sinov_daftarchasi' => $request->sinov_daftarchasi,
    //         'topografiya_nomeri' => $request->topografiya_nomeri,
    //         'royhat_raqami' => $request->royhat_raqami,
    //         'room_id' => $request->room_id,
    //         'created_by' => Auth::id(),
    //     ]);

    //     if ($new_student) {
    //         return redirect()->route('student.show', $new_student->id)->with('success', 'Talaba qo`shildi');
    //     }

    //     return redirect()->back()->with('error', 'Talabani yaratishda xatolik yuz berdi!');
    // }
    public function store(Request $request)
    {
        // return $request;

        $input = $request->all();

        $validator = Validator::make($input, [

            'first_name'               => ['required', 'max:70', 'string'],
            'last_name'                => ['required', 'max:70', 'string'],
            //'middle_name'              => ['required' , 'max:70' , 'string'],
            'country_id'               => ['required', 'int'],
            'region_id'               => ['required', 'int'],
            'area_id'               => ['required', 'int'],
            'address'               => ['required', 'max:255', 'string'],
            'birthday'               => ['required'],
            'enter_year'               => ['required'],
            'enter_order'               => ['required', 'max:33', 'string'],
            'enter_order_date'               => ['required'],
            // 'faculty_id'               => ['required', 'int'],
            // 'direction_id'               => ['required', 'int'],
            'edu_form_id'               => ['required', 'int'],
            'is_contract'               => ['required', 'int'],
            'graduated_year'               => ['required'],
            'graduated_order'               => ['required'],
            'graduated_order_date'               => ['required'],
            'edu_type_id'               => ['required', 'int'],
            // 'document_type'               => ['required', 'max:99', 'string'],
            // 'ilova'               => ['required', 'max:255', 'string'],
            // 'sinov_daftarchasi'               => ['required', 'max:255', 'string'],
            // 'topografiya_nomeri'               => ['required', 'max:33', 'string'],
            // 'royhat_raqami'               => ['required', 'max:33', 'string'],
            // 'room_id'               => ['required', 'int'],

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('error', 'a');
        }

        $new_student = new Student();

        $new_student->last_name = $request->last_name;
        $new_student->first_name = $request->first_name;
        $new_student->middle_name = $request->middle_name;
        $new_student->country_id = $request->country_id;
        $new_student->region_id = $request->region_id;
        $new_student->area_id = $request->area_id;
        $new_student->address = $request->address;
        $new_student->birthday = $request->birthday;
        $new_student->enter_year = $request->enter_year;
        $new_student->enter_order = $request->enter_order;
        $new_student->enter_order_date = $request->enter_order_date;
        $new_student->is_contract = $request->is_contract;
        // $new_student->faculty_id = $request->faculty_id;
        // $new_student->direction_id = $request->direction_id;
        $new_student->direction = $request->direction;
        $new_student->faculty = $request->faculty;
        $new_student->edu_form_id = $request->edu_form_id;
        $new_student->graduated_year = $request->graduated_year;
        $new_student->graduated_order = $request->graduated_order;
        $new_student->graduated_order_date = $request->graduated_order_date;
        $new_student->edu_type_id = $request->edu_type_id;
        $new_student->document_type = $request->document_type;
        $new_student->ilova = $request->ilova;
        $new_student->sinov_daftarchasi = $request->sinov_daftarchasi;
        $new_student->topografiya_nomeri = $request->topografiya_nomeri;
        $new_student->royhat_raqami = $request->royhat_raqami;
        $new_student->room_id = $request->room_id;
        $new_student->created_by = Auth::id();
        if ($new_student->save()) {
            // return redirect()->route('student.create')->with('success', 'Talaba qo`shildi');
            return redirect()->route('student.show', $new_student->id)->with('success', 'Talaba qo`shildi');
        }

        return redirect()->back()->with('error', 'AAA');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        $countries = Country::all();
        $regions = Region::all();

        $order_types = StdOrderType::where('status', 1)->get();
        $orders = StdOrder::where('student_id', $id)->where('status', 1)->get();

        return view('mk.pages.student.show', [
            'data' => $student,
            'countries' => $countries,
            'regions' => $regions,
            'order_types' => $order_types,
            'orders' => $orders,
        ]);
    }


    public function student_pdf($id)
    {

        $student = Student::find($id);

        $edu_type = EduType::all();

        $mudir =  DB::table('archive_mudir')->orderBy('id', 'DESC')->get();

        return PDF::loadView('mk.pages.student.pdf_student', [
            'student' => $student,
            'enter_date' => date("Y", strtotime($student->enter_order_date)),
            'graduate_date' =>  date("Y", strtotime($student->graduated_order_date)),
            'edu_type' => $edu_type,
            'mudir' => $mudir
        ])->download('new.pdf');


        //        return PDF::loadView('admin.pages.staff.resume' , [
        //            'data' => $staff,
        //            'relative'=>$relarive,
        //            'education'=>$education,
        //
        //            'workplaces'=>$workplaces,
        //            'mukofot_all'=>$mukofot_all,
        //        ])->download($staff->last_name.$staff->first_name.'.pdf');
    }

    public function std_order(Request $request, $student_id)
    {
        $input = $request->all();

        $validator = Validator::make($input, [

            'description'               => ['required', 'max:255', 'string'],
            'name'                => ['required', 'max:255', 'string'],
            'std_order_type_id'   => ['required', 'int'],
            'date'                => ['required', 'date'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('error', 'a');
        }

        $std_order_new = new StdOrder();
        $std_order_new->status = 1;
        $std_order_new->std_order_type_id = $request->std_order_type_id;
        $std_order_new->student_id = $student_id;
        $std_order_new->date = $request->date;
        $std_order_new->name = $request->name;
        $std_order_new->description = $request->description;

        if ($std_order_new->save()) {
            return redirect()->back()->with('success', 'a');
        } else {
            return redirect()->back()->with('error', 'a');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $date = date("Y-m-d");
        $this_year = date("Y");

        $student = Student::find($id);
        $student->lang_id = json_decode($student->lang_id);
        $regions = Region::where('status', 1)->get();
        $area = Area::where('status', 1)->get();
        $country = Country::all();


        $country = Country::all();
        $faculty = Faculty::all();
        $edu_type = EduType::all();
        $edu_form = EduForm::all();
        $Room = Room::all();

        $yesterday = date("Y-m-d", strtotime("-1 day", strtotime($date)));
        $maxdateofbirth = date("Y-m-d", strtotime("-18 year", strtotime($date)));
        $mindateofbirth = date("Y-m-d", strtotime("-80 year", strtotime($date)));
        $minpassportdate = date("Y-m-d", strtotime("-10 year", strtotime($date)));


        // return $student;

        return view('mk.pages.student.editstd', [

            'regions' => $regions,
            'areas' => $area,
            'countries' => $country,
            'data' => $student,

            'regions' => $regions,
            'countries' => $country,

            'room' => $Room,
            'today' => $date,
            'faculty' => $faculty,
            'edu_type' => $edu_type,
            'edu_form' => $edu_form,
            'this_year' => $this_year,
            'yesterday' => $yesterday,
            'date18' => $maxdateofbirth,
            'date80' => $mindateofbirth,
            'minpassportdate' => $minpassportdate,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //                return $id;
        //                return $request;

        $input = $request->all();

        $validator = Validator::make($input, [

            'first_name'               => ['required', 'max:255', 'string'],
            'last_name'                => ['required', 'max:255', 'string'],
            'middle_name'              => ['required', 'max:255', 'string'],
            'country_id'               => ['required'],
            'region_id'                => ['required'],
            'area_id'                  => ['required'],
            'address'                  => ['required', 'string'],
            'birthday'                 => ['required', 'date'],

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput()->with('error', 'a');
        }

        $update_student = Student::find($id);
        $update_student->first_name = $request->first_name;

        // 

        $update_student->last_name = $request->last_name;
        $update_student->first_name = $request->first_name;
        $update_student->middle_name = $request->middle_name;
        $update_student->country_id = $request->country_id;
        $update_student->region_id = $request->region_id;
        $update_student->area_id = $request->area_id;
        $update_student->address = $request->address;
        $update_student->birthday = $request->birthday;
        $update_student->enter_year = $request->enter_year;
        $update_student->enter_order = $request->enter_order;
        $update_student->enter_order_date = $request->enter_order_date;
        // $update_student->faculty_id = $request->faculty_id;
        // $update_student->direction_id = $request->direction_id;

        $update_student->direction = $request->direction;
        $update_student->faculty = $request->faculty;

        $update_student->is_contract = $request->is_contract;
        $update_student->edu_form_id = $request->edu_form_id;
        $update_student->graduated_year = $request->graduated_year;
        $update_student->graduated_order = $request->graduated_order;
        $update_student->graduated_order_date = $request->graduated_order_date;
        $update_student->edu_type_id = $request->edu_type_id;
        $update_student->document_type = $request->document_type;
        $update_student->ilova = $request->ilova;
        $update_student->sinov_daftarchasi = $request->sinov_daftarchasi;
        $update_student->topografiya_nomeri = $request->topografiya_nomeri;
        $update_student->royhat_raqami = $request->royhat_raqami;
        $update_student->room_id = $request->room_id;
        $update_student->updated_by = Auth::id();

        // 

        if ($update_student->update()) {
            return redirect()->route('student.index', $update_student->id)->with('success', 'A');
        } else {
            return back()->with('error', "AAA");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        if ($student) {
            $student->delete();
            return redirect()->back()->with('success', "O'chirildi");
        } else {
            return redirect()->back()->with('danger', "Topilmadi");
        }
    }
}
