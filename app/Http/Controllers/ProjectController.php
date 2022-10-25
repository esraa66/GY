<?php

namespace App\Http\Controllers;

use Image;
use DataTables;
use App\Models\AP;
use App\Models\Payment;
use App\Models\Project;
use App\Models\Template;
use App\Http\Traits\media;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    use media;

    public function create()
    {
        return view('admin.project.create1');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            if ($request->has('pdf')) {
                $pdfname = $this->uploadfiles($request->file('pdf'), 'projects/');
               
            }
            $project = new Project();
            $project->name_ar = $request->name_ar; //
            $project->name = $request->name;   //
            $project->name_fr = $request->name_fr;  //
            $project->description = $request->description; //
            $project->description_ar = $request->description_ar;  //
            $project->description_fr = $request->description_fr; //
            $project->price = $request->price;  // 
            $project->pay_plan = $request->pay_plan;  //
            $project->code = $request->code;  //
            $project->region_id = $request->region_id; // 
            $project->area_id = $request->area_id;  //
            $project->vedio_link = $request->vedio_link;
            $project->rooms = $request->rooms;   //
            $project->bedrooms = $request->bedrooms;  //
            $project->bath = $request->bath;   // 
            $project->garage = $request->garage;  //
            $project->type_id = $request->type_id;  //
            $project->status_id = $request->status_id; //
            $project->dev_id = $request->dev_id; //
            $project->pdf = $pdfname; //
            $project->save();
            for ($x = 0; $x <= count($request->pers) - 1; $x++) {
                Payment::create(['project_id' => $project->id, 'pers' => $request->pers[$x]]);
            }
            if ($request->has('image')) {
                for ($x = 0; $x <= count($request->image) - 1; $x++) {
                    $filename = $this->uploadManyMedia($request->image[$x], 'images/projects/', $x, 700, 600);
                }
                ProjectImage::create(['project_id' => $project->id, 'name' => $filename]);
            }
            if ($request->has('plan_image')) {
                $filename = $this->uploadMedia($request->file('plan_image'), 'images/projects/plan/', 700, 600);
                Template::create(['project_id' => $project->id, 'name' => $request->planName, 'image' => $filename]);
            }
            for ($r = 0; $r <= count($request->amenitie) - 1; $r++) {
                AP::create(['project_id' => $project->id, 'amenitie_id' => $request->amenitie[$r]]);
            }
            

        } catch (\Exception  $e) {
            DB::rollBack();
            return response()->json(['msg' => $e->getMessage()], 200);
        }
        DB::commit();
        return response()->json(['err' => false, 'msg' => 'تم الحفظ بنجاح'], 200);

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

    public function edit($id)
    {
        $data = Project::find($id);
    }

    public function OneProject($id)
    {

        $project = Project::find($id);

        return view('oneProject', compact('project'));
    }

    public function update(Request $request)
    {
        DB::beginTransaction();
        try {

            if ($request->has('pdf')) {
                $pdfname = $this->uploadfiles($request->file('pdf'), 'projects/');
                dd($pdfname);
            }
            $project =  Project::find($request->id);
            $project->name_ar = $request->name_ar; //
            $project->name = $request->name;   //
            $project->name_fr = $request->name_fr;  //
            $project->description = $request->description; //
            $project->description_ar = $request->description_ar;  //
            $project->description_fr = $request->description_fr; //
            $project->price = $request->price;  // 
            $project->pay_plan = $request->pay_plan;  //
            $project->code = $request->code;  //
            $project->region_id = $request->region_id; // 
            $project->area_id = $request->area_id;  //
            $project->vedio_link = $request->vedio_link;
            $project->rooms = $request->rooms;   //
            $project->bedrooms = $request->bedrooms;  //
            $project->bath = $request->bath;   // 
            $project->garage = $request->garage;  //
            $project->type_id = $request->type_id;  //
            $project->status_id = $request->status_id; //
            $project->dev_id = $request->dev_id; //
            $project->pdf = $pdfname; //
            $project->save();

            for ($x = 0; $x <= count($request->pers) - 1; $x++) {
                Payment::create(['project_id' => $project->id, 'pers' => $request->pers[$x]]);
            }
            if ($request->has('image')) {
                for ($x = 0; $x <= count($request->image) - 1; $x++) {
                    $filename = $this->uploadManyMedia($request->image[$x], 'images/projects/', $x, 700, 600);
                }
                ProjectImage::create(['project_id' => $project->id, 'name' => $filename]);
            }
            if ($request->has('plan_image')) {
                $filename = $this->uploadMedia($request->file('plan_image'), 'images/projects/plan/', 700, 600);
                Template::create(['project_id' => $project->id, 'name' => $request->planName, 'image' => $filename]);
            }

            for ($r = 0; $r <= count($request->amenitie) - 1; $r++) {
                AP::create(['project_id' => $project->id, 'amenitie_id' => $request->amenitie[$r]]);
            }

            // $Attach = $request->only(['chest_o', 'chest_r', 'flame', 'chest_f', 'medium_l', 'medium_r', 'shoulder_r', 'bracelet', 'legs_l', 'knee', 'points_b', 'sleeve_l', 'pleura', 'shoulder_w']);

            // $newBill->attach()->update($Attach);
        } catch (\Exception  $e) {
            DB::rollBack();
            return response()->json(['msg' => $e->getMessage()], 200);
        }
        DB::commit();
        return response()->json(['err' => false, 'msg' => 'تم الحفظ بنجاح'], 200);
    }

    public function allprojects()
    {

        $projects = Project::paginate(5);

        return view('projects.fullProject', compact('projects'));
    }

    public function filterLocation($id)
    {

        $projects = Project::where('region_id', $id)->paginate(5);
        return view('projects.fullProject', compact('projects'));
    }
}
