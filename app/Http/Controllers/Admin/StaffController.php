<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Staff\StoreStaffRequest;
use App\Http\Requests\Staff\UpdateStaffRequest;
use App\Models\Staff;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::latest()->paginate(10);
        return view('backend.staff.index', compact('staffs'));
    }

    public function create(Staff $staff)
    {
        return view('backend.staff.create', compact('staff'));
    }

    public function store(StoreStaffRequest $request)
    {
        Staff::create($request->validated());
        toast('Staff added successfully ', 'success');
        return redirect(route('admin.staff.index'));
    }

    public function edit(Staff $staff)
    {
        return view('backend.staff.edit', compact('staff'));
    }

    public function update(UpdateStaffRequest $request, Staff $staff)
    {
        $staff->update($request->validated());
        toast('Staff updated successfully', 'success');
        return redirect(route('admin.staff.index'));
    }


    public function destroy( Staff $staff)
    {
        $this->deleteFile($staff->image);
        $staff->delete();
        return back();
    }

    public function updateStatus(Staff $staff)
    {
        $staff->update([
            'status' => !$staff->status
        ]);
        toast('Status updated successfully', 'success');
        return back();
    }


}
