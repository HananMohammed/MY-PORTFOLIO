<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingRequest;
use App\Models\Admin\Setting;
use App\Traits\ImageProcess;
use App\Traits\StoreUpdateTrait;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use ImageProcess, StoreUpdateTrait;
    /**
     * Show the form for editing the specified Settings.
     *
     * @param  Setting  $setting
     * @return view
     */
    public function edit(Setting $setting)
    {
        $setting = Setting::first();

        if ($setting === null)
            $setting = new Setting();

        return view('admin.settings.edit', compact('setting'));

    }

    /**
     * Update the specified Setting in storage.
     *
     * @param  SettingRequest  $request
     * @return Response
     */
    public function update(SettingRequest $request)
    {
        $setting = Setting::first();

        if ($setting === null)
        {
            $setting = new Setting();

            $this->storeData($request, $setting);

            return back()->with(["success" => "Setting Stored Successfully"]);
        }
        else
        {
            $this->updateData($request, $setting);

            return back()->with(["success" => "Setting Updated Successfully"]);

        }
    }

}
