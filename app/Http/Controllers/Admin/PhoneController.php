<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PhoneRequest;
use App\Models\Admin\Phone;
use App\Traits\StoreUpdateTrait;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    use StoreUpdateTrait;
    /**
     * Display a listing of the phones.
     *
     * @return view
     */
    public function index()
    {
        $phones = Phone::all();

        return view('admin.settings.phone.index',compact('phones'));
    }

    /**
     * Show the form for creating a new Phone.
     * @param PhoneRequest $request
     * @param Phone $model
     * @return Response
     */
    public function store(PhoneRequest $request, Phone $model)
    {
        $this->storeData($request, $model);

        return back()->with('success' , 'Phone Saved Successfully') ;
    }
    /**
     * Show the form for editing the specified Phone.
     *
     * @param  Request $request
     * @param  $id
     * @return json
     */
    public function edit(Request $request, $id)
    {
        if ($request->ajax())
        {
            $data = Phone::find($id);

            return response()->json($data);
        }
    }

    /**
     * Update the specified Phone in storage.
     *
     * @param PhoneRequest  $request
     * @param Phone  $phone
     * @return Response
     */
    public function update(PhoneRequest $request, Phone $phone)
    {
        $this->updateData($request, $phone);

        return back()->with('success' , 'Phone Updated Successfully') ;
    }

    /**
     * Remove the specified Phone from storage.
     *
     * @param  Phone  $phone
     * @return Response
     */
    public function destroy(Phone $phone)
    {
        $phone->delete();

        return back()->with('success' , 'Phone Updated Successfully') ;
    }
}
