<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceRequest;
use App\Models\Admin\Service;
use App\Traits\ImageProcess;
use App\Traits\StoreUpdateTrait;


class ServiceController extends Controller
{
    use StoreUpdateTrait, ImageProcess;

    /**
     * Display a listing of the services.
     *
     * @return view
     */
    public function index()
    {
        $services = Service::all();

        return view('admin.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new Service.
     *
     * @return view
     */
    public function create()
    {
        $service = new Service();

        return view('admin.services.create',compact('service'));

    }

    /**
     * Store a newly created Service in storage.
     *
     * @param ServiceRequest  $request
     * @param Service $service
     * @return Response
     */
    public function store(ServiceRequest $request, Service $service)
    {
        $this->storeData($request, $service);

        return redirect(route('admin.services.index'))->with('success' , 'Service Saved Successfully') ;

    }

    /**
     * Show the form for editing the specified Service.
     *
     * @param Service  $service
     * @return View
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ServiceRequest  $request
     * @param  Service  $service
     * @return Response
     */
    public function update(ServiceRequest $request, Service $service)
    {
        $this->updateData($request, $service);

        return redirect(route('admin.services.index'))->with('success' , 'Service Updated Successfully') ;

    }

    /**
     * Remove the specified Service from storage.
     *
     * @param  Service  $service
     * @return Response
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect(route('admin.services.index'))->with('success' , 'Service Deleted Successfully') ;

    }
}
