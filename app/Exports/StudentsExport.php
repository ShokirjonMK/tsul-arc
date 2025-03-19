<?php

namespace App\Exports;

namespace App\Exports;

use App\Models\Mk\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StudentsExport implements FromCollection, WithHeadings, WithMapping
{
    protected $filters;

    public function __construct($filters)
    {
        $this->filters = $filters;
    }

    public function collection()
    {
        $query = Student::with([
            'country',
            'region',
            'area',
            'faculty',
            'direction',
            'edutype',
            'eduForm',
            'room',
            'nationality',
            // 'circle_type',
            // 'parent_work_place_type',
            // 'disability_type',
            // 'social_protection_type',
            // 'edu_home_type'
        ]);

        if (!empty($this->filters['graduated_year'])) {
            $query->where('graduated_year', $this->filters['graduated_year']);
        }

        // Ta'lim turi bo‘yicha filter
        if (!empty($this->filters['education_type'])) {
            $query->where('edu_type_id', $this->filters['education_type']);
        }

        // Ta'lim shakli bo‘yicha filter
        if (!empty($this->filters['education_form'])) {
            $query->where('edu_form_id', $this->filters['education_form']);
        }

        // F.I.O. bo‘yicha filter (first_name, last_name, middle_name)
        if (!empty($this->filters['fio'])) {
            $searchTerms = explode(' ', $this->filters['fio']); // Matnni bo‘shliqlarga ajratish
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

        // if (!empty($this->filters['year'])) {
        //     $query->where('graduated_year', $this->filters['year']);
        // }

        // if (!empty($this->filters['search'])) {
        //     $query->whereRaw("CONCAT(first_name, ' ', last_name, ' ', middle_name) LIKE ?", ['%' . $this->filters['search'] . '%']);
        // }

        return $query->get();
    }

    public function headings(): array
    {
        return [
            "ID",
            "Ism",
            "Familiya",
            "Otasining ismi",
            "Mamlakat",
            "Viloyat",
            "Tuman",
            "Manzil",
            "Tug‘ilgan sana",
            "Kirish yili",
            "Kirish buyrug‘i",
            "Kirish buyrug‘i sanasi",
            "Fakultet",
            "Yo‘nalish",
            "Ta’lim turi",
            "Bitirgan yil",
            "Bitirgan buyrug‘i",
            "Bitirgan buyrug‘i sanasi",
            "Diplom seriyasi",
            "Diplom raqami",
            "Ta’lim shakli",
            "Hujjat turi",
            "Ilova",
            "Sinov daftar",
            "Topografiya raqami",
            "Ro‘yxat raqami",
            "Xona",
            "Fuqarolik",
            "Millati",
            "Jinsi",
            "Pasport seriya",
            "Pasport raqam",
            "Pasport berilgan sana",
            "Telefon 1",
            "Telefon 2",
            "Kontrakt turi",
            "Nogironlik turi",
            "Ijtimoiy himoya turi",
            "Ota-onaning ish joyi turi",
            "Ta’lim uyi turi",
            "Qo‘shimcha ma’lumot",
            "Pasport JSHIR",
            "Imtiyoz"
        ];
    }

    public function map($student): array
    {
        return [
            $student->id,
            $student->first_name,
            $student->last_name,
            $student->middle_name,
            $student->country ? optional($student->country)->name : null,
            $student->region ? optional($student->region)->name : null,
            $student->area ? optional($student->area)->name : null,
            $student->address,
            $student->birthday,
            $student->enter_year,
            $student->enter_order,
            $student->enter_order_date,
            $student->faculty ? $student->faculty  : ($student->faculty_id ? optional($student->faculty)->name : null),
            $student->direction ? $student->direction  : ($student->direction_id ? optional($student->direction)->name : null),
            $student->edutype ? $student->edutype->name : null,
            $student->graduated_year,
            $student->graduated_order,
            $student->graduated_order_date,
            $student->diplom_serial,
            $student->diplom_number,
            $student->eduForm ? $student->eduForm->name : null,
            $student->document_type,
            $student->ilova,
            $student->sinov_daftarchasi,
            $student->topografiya_nomeri,
            $student->royhat_raqami,
            $student->room ? $student->room->name : null,
            $student->citizenship ?? null,
            $student->nationality ? $student->nationality->name : null,
            $student->gender == 1 ? 'Erkak' : 'Ayol',
            $student->passport_seria,
            $student->passport_number,
            $student->passport_given_date,
            $student->phone1,
            $student->phone2,
            $student->contract(), // Shu yerda noto‘
            $student->disability_type,
            $student->social_protection_type,
            $student->parent_work_place_type,
            $student->edu_home_type,
            $student->additional_information,
            $student->passport_jshir,
            $student->privileged ? 'Ha' : 'Yo‘q',

        ];
    }
}
