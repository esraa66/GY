<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use DataTables;
class AreaController extends Controller
{

    public function getArea($id)
    {
        $areas = Area::where('region_id', $id)->get();
        return response()->json(['areas' => $areas], 200);
    }

    public function Create()
    {
        return view('admin.area.create');
    }



    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Area::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $edit = route('projects.edit', $row->id);
                    $actionBtn = '<a href="' . $edit . '" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.location.index');
    }

    public function store(Request $request)
    {
        $new = new Location();
        $new->location = $request->name;
        $new->location_ar = $request->name_ar;
        $new->location_fr = $request->name_fr;
        if ($request->hasFile('image')) {
            $filename = $this->uploadMedia($request->file('image'), 'images/locations/', 700, 600);
        }
        $new->image = $filename;
        $new->save();
        return response()->json(['err' => false, 'msg' => ' تم اضافة مكان جديد بنجاح']);
    }

    public function delete(Request $request)
    {
        $location = Area::find($request->id);
        return view('admin.location.edit', compact('location'));
    }

    public function edit($id)
    {
        $location = Area::find($id);
        return view('admin.location.edit', compact('location'));
    }

    public function update(Request $request)
    {
        $new = Location::find($request->id);
        $new->location = $request->name;
        $new->location_ar = $request->name_ar;
        $new->location_fr = $request->name_fr;
        if ($request->hasFile('image')) {
            deleteMedia('locations/', $new->image);
            $filename = $this->uploadMedia($request->file('image'), 'images/locations/', 700, 600);
        }
        $new->image = $filename;
        $new->save();
        return response()->json(['err' => false, 'msg' => ' تم التعديل بنجاح']);
    }


}
