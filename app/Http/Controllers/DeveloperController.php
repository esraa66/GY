<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use Illuminate\Http\Request;
use Image;
use DataTables;
class DeveloperController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Developer::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a>';
                    $actionBtn .= '<a href="javascript:void(0)" value="' . $row->id . '" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.dev.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'logo' => 'required',
        ], [
            'name.required' => 'الاسم مطلوب ',
            'logo.required' => 'الاسم مطلوب ',
        ]);
        if ($request->hasFile('logo')) {
            $classifiedImg = $request->file('logo');
            $filename = time() . rand(1, 200);
            $image = Image::make($classifiedImg)->encode('webp', 90)->resize(700, 600)->save(public_path('images/devs/'  .  $filename . '.webp'));
        }
        $dev = new Developer();
        $dev->name = $request->name;
        $dev->logo = $filename  . '.webp';

        $dev->phone = $request->phone;
        $dev->fax   = $request->fax;
        $dev->email = $request->email;
        $dev->site = $request->site;
        $dev->save();
        return response()->json(['err' => false, 'msg' => 'تم اضافة مطور بنجاح'], 200);
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
