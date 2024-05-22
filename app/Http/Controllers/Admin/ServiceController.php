<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Service\StoreServiceRequest;
use App\Http\Requests\Service\UpdateServiceRequest;
use App\Models\Service;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('backend.service.index', compact('services'));
    }

    public function create()
    {
        return view('backend.service.create');
    }

    public function store(StoreServiceRequest $request)
    {
        Service::create($request->validated());
        toast('Service added successfully ', 'success');
        return redirect(route('admin.service.index'));
    }

    public function edit(Service $service)
    {
        return view('backend.service.edit', compact('service'));
    }


    public function update(UpdateServiceRequest $request, Service $service)
    {
        $service->update($request->validated());
        toast('Service updated successfully', 'success');
        return redirect(route('admin.service.index'));
    }


    public function destroy(Service $service)
    {
        $this->deleteFile($service->image);
        $service->delete();
        return back();
    }

    public function updateStatus(Service $service)
    {
        $service->update([
            'status' => !$service->status
        ]);
        toast('Status updated successfully', 'success');
        return back();
    }
}
