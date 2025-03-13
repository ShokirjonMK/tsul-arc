<?php

namespace App\Models\Mk;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    // protected $fillable = [
    //     'first_name',
    //     'last_name',
    //     'middle_name',
    //     'address',
    //     'birthday',
    //     'nationality_id',
    //     'region_id',
    //     'country_id',
    //     'area_id',
    //     'group_id',
    //     'contract_type_id',
    //     'edu_type_id',
    //     'edu_enter_date',
    //     'passport_seria',
    //     'passport_number',
    //     'passport_given_date',
    //     'passport_given_date',
    //     'phone1',
    //     'phone2',
    //     'course_id',
    //     'image',
    //     'faculty_id',
    //     'created_by',
    //     'updated_by',
    //     'edu_type_id',
    //     'gender',
    //     'circle_type_id',
    //     'parent_work_place_type_id',
    //     'disability_type_id',
    //     'disability_group',
    //     'social_protection_type_id',
    //     'edu_home_type_id',
    //     'additional_information',
    //     'disability_group',
    //     'passport_copy',
    //     'diplom_copy',
    //     'direction_id',
    //     'passport_jshir',
    //     'command_date',
    //     'command_number'
    // ];

    public function fio()
    {
        return $this->last_name . ' ' . $this->first_name . ' ' . $this->middle_name;
    }
    public function fi()
    {
        return $this->last_name . ' ' . $this->first_name;
    }
    public function room()
    {
        return $this->belongsTo('App\Models\Mk\Room');
    }
    public function faculty()
    {
        return $this->belongsTo('App\Models\Mk\Faculty');
    }
    public function direction()
    {
        return $this->belongsTo('App\Models\Mk\Direction');
    }
    public function region()
    {
        return $this->belongsTo('App\Models\Region', 'region_id', 'id');
    }
    public function area()
    {
        return $this->belongsTo('App\Models\Area', 'area_id', 'id');
    }

    public function contracttype()
    {
        return $this->belongsTo('App\Models\Contracttype');
    }
    public function edutype()
    {
        return $this->belongsTo('App\Models\Edutype');
    }
    public function country()
    {
        return $this->belongsTo('App\Models\Country', 'country_id', 'id');
    }
    public function nationality()
    {
        return $this->belongsTo('App\Models\Nationality');
    }
    public function circle_type()
    {
        return $this->belongsTo('App\Models\CircleType', 'circle_type_id', 'id');
    }
    public function parent_work_place_type()
    {
        return $this->belongsTo('App\Models\ParentWorkPlaceType', 'parent_work_place_type_id', 'id');
    }
    public function disability_type()
    {
        return $this->belongsTo('App\Models\DisabilityType', 'disability_type_id', 'id');
    }
    public function social_protection_type()
    {
        return $this->belongsTo('App\Models\SocialProtectionType', 'social_protection_type_id', 'id');
    }
    public function edu_home_type()
    {
        return $this->belongsTo('App\Models\EduHomeType', 'edu_home_type_id', 'id');
    }
    public function additional_files()
    {
        return $this->hasMany(AdditionalFile::class, 'student_id', 'id');
    }
    public function contract()
    {
        if ($this->is_contract == 0) {
            return "Grand";
        } elseif ($this->is_contract == 1) {
            return "Kontrakt";
        } else {
            return "Aniqlanmadi );";
        }
    }
}
