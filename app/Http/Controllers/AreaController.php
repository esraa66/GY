<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{



    public function Create()
    {

        return view('admin.area.create');
    }
}
