<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Image;
use DataTables;

class BlogController extends Controller
{

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required',
            'article' => 'required',
            'image' => 'required',
        ], [
            'title.required' => 'العنوان مطلوب ',
            'article.required' => ' المقال مطلوب  ',
            'image.required' => ' صورة المقال مطلوبه  ',
        ]);
        if ($request->hasFile('image')) {
            $classifiedImg = $request->file('image');
            $filename = time() . rand(1, 200);
            $image = Image::make($classifiedImg)->encode('webp', 90)->resize(700, 600)->save(public_path('images/blogs/'  .  $filename . '.webp'));
        }

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->article = $request->article;
        $blog->image =  $filename  . '.webp';
        $blog->save();

        if ($request->title_ar) {
            $langs = ['ar', 'fr'];
            foreach ($langs as $lang) {
                $name = 'title_' . $lang;
                $article = 'article_' . $lang;
                add($blog, [
                    'title' => $request->$name,
                    'article' => $request->$article,
                ], $lang);
            }
        }
        return response()->json(['err' => false, 'msg' => 'تم اضافة مقال'], 200);
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Blog::latest()->get();
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
        return view('admin.blogs.create');
    }





    public function delete(Request $request)
    {
        $b = Blog::find($request->id);
        $b->delete();

        return response()->json(['err' => false, 'msg' => ' تم مسح المقاله '], 200);
    }
}
