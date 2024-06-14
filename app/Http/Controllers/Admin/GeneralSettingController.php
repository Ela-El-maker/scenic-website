<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $setting = GeneralSetting::first();

        return view('admin.setting.general-setting.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //
        $request->validate([
            'logo' => ['required', 'max:5000', 'image'],

            'favicon' => ['required', 'max:5000', 'image'],


        ]);
        // $setting = GeneralSetting::first();
        // $logo = handleUpload('logo', $setting);
        // $favicon = handleUpload('favicon', $setting);
        // $setting->save();
        // $setting = GeneralSetting::first();
        $logo = handleUpload('logo');
        $favicon = handleUpload('favicon');
      

        // $generalSetting =  GeneralSetting::first();

        // $generalSetting->logo = (!empty($logo) ? $logo : $setting->logo);
        // $generalSetting->favicon = (!empty($favicon) ? $favicon : $setting->favicon);

        // $generalSetting->save();

        toastr()->success('Settings Updated Successfully!', 'Congrats');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
