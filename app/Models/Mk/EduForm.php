<?php

namespace App\Models\Mk;


use Illuminate\Database\Eloquent\Model;

class EduForm extends Model
{
    protected $table = 'edu_form';

    public function status()
    {
        if ($this->status == 1) {
            return "Faol";
        } elseif ($this->status == 2) {
            return "Nofaol";
        } elseif ($this->status == 0) {
            return "O'chirilgan";
        }
    }
}
