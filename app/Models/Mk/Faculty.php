<?php

namespace App\Models\Mk;


use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'faculty';

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
