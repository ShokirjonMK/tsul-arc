<?php

namespace App\Models\Mk;

use Illuminate\Database\Eloquent\Model;

class StdOrder extends Model
{
    protected $table = 'std_order';


    public function std_order_type()
    {
        return $this->belongsTo('App\Models\Mk\StdOrderType');
    }

    public function student()
    {
        return $this->belongsTo('App\Models\Mk\Student');
    }

}
