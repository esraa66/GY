<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{



    public function store(Request $request)
    {

        $new_r = new ModelsRequest();
        $new_r->name = $request->name;
        $new_r->email = $request->email;
        $new_r->phone = $request->phone;
        $new_r->msg = $request->msg;
        $new_r->save();

        return response()->json(['msg' => 'سيتم التواصل معك قريبا شكرا لك '], 200);
    }

    public function delete(Request $request)
    {

        $re = ModelsRequest::find($request->id);
        $re->delete();
        return response()->json(['msg' => 'سيتم التواصل معك قريبا شكرا لك '], 200);
    }
}
