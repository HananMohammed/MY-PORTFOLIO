<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutRequest;
use App\Models\Admin\About;
use App\Traits\ImageProcess;
use App\Traits\StoreUpdateTrait;

class AboutController extends Controller
{
    use ImageProcess, StoreUpdateTrait;
    /**
     * Show the form for editing the specified About.
     *
     * @return Response
     */
    public function edit()
    {
        $about = About::first() ;

        if ($about === null)
            $about = new About();

        return view('admin.homepage.about.edit', compact('about'));
    }

    /**
     * Update the specified About in storage.
     *
     * @param  AboutRequest  $request
     * @return Response
     */
    public function update(AboutRequest $request)
    {
        $about = About::first() ;
        if ($about === null)
        {
            $about = new About();
            $this->storeData($request, $about);
            return back()->with(["success" => "About Us Stored Successfully"]);
        }
        else
        {
            $this->updateData($request, $about);
            return back()->with(["success" => "About Us Updated Successfully"]);

        }
    }
}
