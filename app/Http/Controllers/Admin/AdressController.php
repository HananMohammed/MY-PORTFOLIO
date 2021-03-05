<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AddressRequest;
use App\Models\Admin\Adress;
use App\Traits\StoreUpdateTrait;
use Illuminate\Http\Request;

class AdressController extends Controller
{
    use StoreUpdateTrait;
    /**
     * Display a listing of the Address.
     *
     * @return Response
     */
    public function index()
    {
        $addresses = Adress::all();

        return view('admin.settings.address.index',compact('addresses'));

    }

    /**
     * Store a newly created address in storage.
     *
     * @param AddressRequest $request
     * @param Adress $model
     * @return response
     */
    public function store(AddressRequest $request, Adress $model)
    {
        $this->storeData($request, $model);

        return back()->with('success' , 'Address Saved Successfully') ;
    }

    /**
     * Show the form for editing the specified address.
     *
     * @param  Request $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        if ($request->ajax())
        {
            $data = Adress::find($id);

            return response()->json($data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AddressRequest  $request
     * @param  Adress  $address
     * @return Response
     */
    public function update(AddressRequest $request, Adress $address)
    {
        $this->updateData($request, $address);

        return back()->with('success' , 'Address Updated Successfully') ;

    }

    /**
     * Remove the specified resource from address.
     *
     * @param  Adress  $address
     * @return Response
     */
    public function destroy(Adress $address)
    {
        $address->delete();

        return back()->with('success' , 'Address Deleted Successfully') ;
    }
}
