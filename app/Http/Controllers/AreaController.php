<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Location;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\DB;
use App\Http\Traits\media;
use Illuminate\Support\Facades\Auth;

class AreaController extends Controller
{

    use media;
    public function index(Request $request)
    {   
        if ($request->ajax()) {
            $data = Area::latest()->get();
         
            //true
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('location_name', function ($row) {
                    $name =  $row->location->location ?? 'تم حذفه';
                        return $name;
                })
                ->addColumn('action', function ($row) {
                $edit = route('area.edit', $row->id);
                
                $actionBtn = '<a href="' . $edit . '" class="edit m-1 btn btn-success btn-sm">Edit</a>';
                
                    $actionBtn .= '<a href="javascript:void(0)" value="' . $row->id . '" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.area.create');
    }
    public function Create()
    {

        return view('admin.area.create');
    }

    public function store(Request $request)
    {
        $area = new Area();
        $area->area = $request->area; //
        $area->region_id = $request->region_id;   //
        $area->save();   //
        return response()->json(['err' => false, 'msg' => 'تم اضافة منطقه'], 200);
    }

    public function edit($id)
    {

        $area =  Area::find($id);
        return view('admin.area.edit', compact('area'));
    }

    public function update(Request $request)
    {
        $area =  Area::find($request->id);
        $area->area = $request->area; //
        $area->region_id = $request->region_id;   //
        $area->save();   //
        // return redirect()->route('area.index');
        return response()->json(['err' => false, 'msg' => '  تم تعديل المنطقه بنجاح '], 200);
    }

    public function delete(Request $request)
    {
        $b = Area::find($request->id);
        $b->delete();

        return response()->json(['err' => false, 'msg' => ' تم مسح المنطقه '], 200);
    }
    public function getArea($id)
    {

        $areas = Area::where('region_id', $id)->get();

        return response()->json(['areas' => $areas], 200);
    }

    
}
