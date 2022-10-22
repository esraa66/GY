<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use DataTables;

class TypeController extends Controller
{


    public function store(Request $request)
    {
        $type = new Type();
        $type->type = $request->name;
        $type->save();
        $langs = ['ar', 'fr'];
        foreach ($langs as $lang) {
            $name = 'name_' . $lang;
            add($type, [
                'type' => $request->$name,
            ], $lang);
        }
        return response()->json(['err' => false, 'msg' => 'تم الحفظ بنجاح'], 200);
    }

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Type::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a>';
                    $actionBtn .= '<a href="javascript:void(0)" value="' . $row->id . '" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->addColumn('name_ar', function ($row) {
                    $name_ar = evaluateSp($row, 'fr')['type'];
                    return $name_ar;
                })
                ->addColumn('name_fr', function ($row) {
                    $name_fr = evaluateSp($row, 'fr')['type'];
                    return $name_fr;
                })
                ->rawColumns(['action', 'name_ar', 'name_fr'])
                ->make(true);
        }
        return view('admin.type.index');
    }

    public function delete(Request $request)
    {
        $t = Type::find($request->id);
        $t->delete();
        return response()->json(['err' => false, 'msg', 'تم الحذف بنجاح'], 200);
    }
}
