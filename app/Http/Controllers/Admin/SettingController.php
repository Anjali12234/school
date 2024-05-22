<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\SettingRequest;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class SettingController extends Controller
{
    public function index()
    {
        $officeSetting = officeSetting();
        return view('backend.setting.index',compact('officeSetting'));
    }


    public function store(SettingRequest $request)
    {
        if ($officeSetting = Setting::latest()->first()) {
            if ($request->hasFile('institute_logo') && $instituteLogo = $officeSetting->getRawOriginal('institute_logo')) {
                $this->deleteFile($instituteLogo);
            }
            if ($request->hasFile('institute_ad_photo') && $instituteAdPhoto = $officeSetting->getRawOriginal('institute_ad_photo')) {
                $this->deleteFile($instituteAdPhoto);
            }
            $officeSetting->update($request->validated());
        } else {
            Setting::create($request->validated());
        }

        Cache::forget('office_setting');

        toast('Setting Updated Successfully!','success');
        return back();
    }
}
