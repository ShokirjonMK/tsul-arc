<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaffCommand extends Model
{
    protected $table = 'staff_commands';

    public function command_type()
    {
        return $this->belongsTo(CommandType::class , 'command_type_id' , 'id');
    }
}
