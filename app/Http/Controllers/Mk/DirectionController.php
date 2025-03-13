<?php

namespace App\Http\Controllers\Mk;

use App\Http\Controllers\Controller;
use App\Models\Mk\Direction;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    public function get_direction($id)
    {
        $areas = Direction::where('faculty_id', $id)->get();
        return json_encode($areas);
    }
}
