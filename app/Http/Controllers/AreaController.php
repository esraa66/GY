<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AreaController extends Controller
{



    public function Create()
    {

        return view('admin.area.create');
    }

    public function getArea($id)
    {

        $areas = Area::where('region_id', $id)->get();

        return response()->json(['areas' => $areas], 200);
    }

    
}
