<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;

class ProjectController extends Controller
{
    //

    public function create()
    {
        return view('admin.project.create1');
    }

    public function store(Request $request)
    {

        DB::beginTransaction();
        try {
            $project = new Project();
            $project->name = $request->name;
            $project->description = $request->description;
            $project->price = $request->price;
            $project->pay_plan = $request->pay_plan;
            $project->save();

            $langs = ['ar', 'fr'];
            foreach ($langs as $lang) {
                $name = 'name_' . $lang;
                $description = 'description_' . $lang;
                // $area = 'area_' . $lang;
                add($project, [
                    'name' => $request->$name,
                    'description' => $request->$description,
                    // 'area' => $request->$area,
                ], $lang);
            }
            for ($x = 0; $x <= count($request->pers) - 1; $x++) {
                Payment::create(['project_id' => $project->id, 'pers' => $request->pers[$x]]);
            }
            for ($x = 0; $x <= count($request->image) - 1; $x++) {
                ProjectImage::create(['project_id' => $project->id, 'name' => $request->image[$x]]);
            }
        } catch (\Exception  $e) {
            DB::rollBack();
            return response()->json(['msg' => $e->getMessage()], 500);
        }
        DB::commit();
        return response()->json(['err' => false, 'msg', 'تم الحفظ بنجاح'], 200);

        // $project->status = $;
        // $project->image = $;
        // $project->price = $;
        // $project->email = $;
        // $project->phone = $;
        // $project->location = $;
        // $project->area = $;
        // $project->description = $;
        // $project->vedio = $;
        // $project->pay_plan = $;

        // if ($request->hasFile('images')) {
        //     $classifiedImg = $request->file('image');
        //     $filename = time() . rand(1, 400);
        //     $image = Image::make($classifiedImg)->encode('webp', 90)->resize(1000, 750)->save(public_path('images/projects/'  .  $filename . '.webp'));
        //     $ab->image    =    $filename  . '.webp';
        // }


        // // attachment
        // // templates
        //     - name
        //     - project_id
        //     - images




    }


    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Project::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.project.index');
    }
}
