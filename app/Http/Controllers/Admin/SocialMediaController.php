<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SocialMediaRequest;
use App\Models\Admin\Icon;
use App\Models\Admin\SocialMedia;
use App\Traits\StoreUpdateTrait;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    use StoreUpdateTrait;
    /**
     * Display a listing of the SocialMedia.
     *
     * @return Response
     */
    public function index()
    {
        $socialMedias = SocialMedia::all();

        $icons = Icon::where('related_to','social_media')->get();

        return view('admin.settings.socialMedia.index',compact('socialMedias', 'icons'));

    }
    /**
     * Store a newly created SocialMedia in storage.
     *
     * @param  SocialMediaRequest  $request
     * @param SocialMedia $model
     * @return Response
     */
    public function store(SocialMediaRequest $request, SocialMedia $model)
    {
        $this->storeData($request, $model);

        return back()->with('success' , 'SocialMedia Stored Successfully') ;

    }
    /**
     * Show the form for editing the specified SocialMedia.
     *
     * @param  Request $request
     * @param  $id
     * @return json
     */
    public function edit(Request $request, $id)
    {
        if ($request->ajax())
        {
            $data = SocialMedia::find($id);

            $icon = $data->icon()->select("id","title","icon")
                         ->where('id', $data->icon_id)->get();

            return response()->json(["data" => $data,"icon" => $icon]);
        }
    }

    /**
     * Update the specified SocialMedia in storage.
     *
     * @param  SocialMediaRequest  $request
     * @param  $id
     * @return Response
     */
    public function update(SocialMediaRequest $request, $id)
    {
        $model = SocialMedia::find($id);

        $this->updateData($request, $model);

        return back()->with('success' , 'SocialMedia Updated Successfully') ;
    }

    /**
     * Remove the specified SocialMedia from storage.
     *
     * @param  $id
     * @return Response
     */
    public function destroy($id)
    {
        $model = SocialMedia::find($id);

        $model->delete();

        return back()->with('success' , 'SocialMedia Deleted Successfully') ;

    }
}
