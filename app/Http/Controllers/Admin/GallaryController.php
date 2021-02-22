<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GallaryRequest;
use App\Models\Admin\Gallary;
use App\Traits\ImageProcess;
use App\Traits\StoreUpdateTrait;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    use ImageProcess, StoreUpdateTrait;

    /**
     * Display a listing of the Gallary.
     *
     * @return view
     */
    public function index()
    {
        $galleries = Gallary::all();

        return view('admin.homepage.gallary.index', compact('galleries'));
    }

    /**
     * Store a newly created Gallary in storage.
     *
     * @param  GallaryRequest  $request
     * @return Response
     */
    public function store(GallaryRequest $request)
    {
        $model = new Gallary();

        $this->storeData($request, $model);

        return back()->with('success' , 'Gallery Saved Successfully') ;
    }
    /**
     * Remove the specified Blog from storage.
     *
     * @param  Gallary  $gallary
     * @return Response
     */
    public function destroy($id)
    {

        Gallary::find($id)->delete();

        return back()->with('success' , 'Gallery Deleted Successfully') ;
    }
}
