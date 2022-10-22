<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Type;
use App\Models\status;
use App\Models\Setting;
use App\Models\Location;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;


class SettingController extends Controller
{

    public function storeLocation(Request $request)
    {

        $loa = new Location();
        $loa->location = $request->name;
        $loa->save();

        $langs = ['ar', 'fr'];
        foreach ($langs as $lang) {
            $name = 'location_' . $lang;
            add($loa, [
                'location' => $request->$name,
            ], $lang);
        }

        return response()->json(['err' => false, 'msg', 'تم الحفظ بنجاح'], 200);
    }

    public function storeArea(Request $request)
    {
        $area = new Area();
        $area->area = $request->name;
        $area->location_id = $request->location_id;
        $area->save();

        $langs = ['ar', 'fr'];
        foreach ($langs as $lang) {
            $name = 'area_' . $lang;
            add($area, [
                'location' => $request->$name,
            ], $lang);
        }

        return response()->json(['err' => false, 'msg', 'تم الحفظ بنجاح'], 200);
    }
    public function storestatus(Request $request)
    {

        $status = new status();
        $status->name = $request->status;
        $status->save();

        $langs = ['ar', 'fr'];
        foreach ($langs as $lang) {
            $name = 'status_' . $lang;
            add($status, [
                'status' => $request->$name,
            ], $lang);
        }

        return response()->json(['err' => false, 'msg', 'تم الحفظ بنجاح'], 200);
    }



    public function update(Request $request)
    {
        $input = $request->except('token');
        if (isset($input['logo']) && !empty($input['logo'])) {
            $setting = Setting::where('key', '=', 'logo')->first();
            $logo_name = $this->uploadMedia($input['logo'], 'app/logo');
            $delete = $this->deleteMedia($setting->value, 'app/logo');
            $setting = $setting->refresh();
            $setting->update(['value' => $logo_name]);
        }
        if (isset($input['icon']) && !empty($input['icon'])) {
            $setting = Setting::where('key', '=', 'icon')->first();
            $icon_name = $this->uploadMedia($input['icon'], 'app/icon');
            $delete = $this->deleteMedia($setting->value, 'app/icon');
            $setting = $setting->refresh();
            $setting->update(['value' => $icon_name]);
        }
        $settingInputArray = Arr::only($input, [
            'app_name', 'company_name', 'phone', 'address', 'wedd_before', 'wedd_after', 'soiree_before', 'soiree_after'
        ]);
        foreach ($settingInputArray as $key => $value) {
            Setting::where('key', '=', $key)->first()->update(['value' => $value]);
        }
        session()->flash('edit', 'تم حفظ الاعدادات  ');
        return redirect()->route('setting.index');
    }
    public function index(Request $request)
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        return view('settings.settings', compact('settings'));
    }
}
