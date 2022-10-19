<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function create()
    {

        return view('admin.dev.create');
    }
    public function store(Request $request)
    {
        $dev = new Developer();
        $dev->name = $request->name;
        $dev->phone = $request->name;
        $dev->fax   = $request->name;
        $dev->logo = $request->name;
        $dev->location = $request->name;
        $dev->save();
        return response()->json(['err' => false, 'msg' => 'تم اضافة مطور بنجاح'], 200);
    }

    public function index()
    {
        $devs = Developer::all();
    }

    public function edit($id)
    {
        $dev =  Developer::find($id);
    }

    public function update(Request $request)
    {
        $dev =  Developer::find($request->id);
        $dev->name = $request->name;
        $dev->phone = $request->name;
        $dev->fax   = $request->name;
        $dev->logo = $request->name;
        $dev->location = $request->name;
        $dev->save();
    }

    public function delete(Request $request)
    {
        $dev =  Developer::find($request->id);
        $dev->delete();

        return response()->json(['err' => false, 'msg' => 'تم مسح مطور بنجاح'], 200);
    }
}
