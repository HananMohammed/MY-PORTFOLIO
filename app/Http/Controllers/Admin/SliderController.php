<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SliderRequest;
use App\Models\Admin\Slider;
use App\Traits\ImageProcess;
use App\Traits\StoreUpdateTrait;


class SliderController extends Controller
{
    use StoreUpdateTrait, ImageProcess;
    /**
     * Display a listing of the sliders.
     *
     * @return view
     */
    public function index()
    {
        $sliders = Slider::all();

        return view('admin.homepage.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new slider.
     *
     * @return view
     */
    public function create()
    {
        $slider = new Slider();

        return view('admin.homepage.slider.create', compact('slider'));

    }

    /**
     * Store a newly created Slider in storage.
     *
     * @param  SliderRequest  $request
     * @return Response
     */
    public function store(SliderRequest $request)
    {
        $slider = new Slider();

        $this->storeData($request, $slider);

        return redirect(route('admin.sliders.index'))->with('success' , 'Slider Saved Successfully') ;

    }

    /**
     * Show the form for editing the specified Slider.
     *
     * @param  Slider  $slider
     * @return view
     */
    public function edit(Slider $slider)
    {
        return view('admin.homepage.slider.edit', compact('slider'));
    }

    /**
     * Update the specified Slider in storage.
     *
     * @param  SliderRequest  $request
     * @param  Slider  $slider
     * @return Response
     */
    public function update(SliderRequest $request, Slider $slider)
    {
        $this->updateData($request, $slider);

        return redirect(route('admin.sliders.index'))->with('success' , 'Slider Updated Successfully') ;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Slider  $slider
     * @return Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();

        return redirect(route('admin.sliders.index'))->with('success' , 'Slider Deleted Successfully') ;

    }
}
