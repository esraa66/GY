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

    public function translate($lang)
    {
        $full_data = include(base_path('lang/' . $lang . '/auth.php'));
        $lang_data = [];
        ksort($full_data);
        foreach ($full_data as $key => $data) {
            array_push($lang_data, ['key' => $key, 'value' => $data]);
        }
        return view('admin.language.translate', compact('lang', 'lang_data'));
    }

    public function translate_submit(Request $request, $lang)
    {
        $full_data = include(base_path('lang/' . $lang . '/auth.php'));
        $full_data[$request['key']] = $request['value'];
        $str = "<?php return " . var_export($full_data, true) . ";";
        file_put_contents(base_path('lang/' . $lang . '/auth.php'), $str);
    }
}
