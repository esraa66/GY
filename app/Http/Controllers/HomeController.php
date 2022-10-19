<?php

namespace App\Http\Controllers;

use App\Models\Test;

use Illuminate\Http\Request;
use App\Transcode\TranscodeService;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function storTest(Request $request)
    {

        $tes = new Test();
        $tes->name = $request->name_en;
        $tes->save();

        $langs = ['ar', 'fr'];
        $failds = ['name_ar', 'name_fr'];

        foreach ($langs as $lang) {
            $name = 'name_' . $lang;

            add($tes, [
                'name' => $request->$name,
            ], $lang);
        }

        return ' success';
    }
}
