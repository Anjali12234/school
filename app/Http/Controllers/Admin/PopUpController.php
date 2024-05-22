<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PopUp\StorePopUpRequest;
use App\Http\Requests\PopUp\UpdatePopUpRequest;
use App\Models\PopUp;
use Illuminate\Http\Request;

class PopUpController extends Controller
{
    public function index()
    {
        $popUps = PopUp::latest()->paginate(10);
        return view('backend.popUp.index', compact('popUps'));
    }

    public function create()
    {
        return view('backend.popUp.create');
    }

    public function store(StorePopUpRequest $request)
    {
        PopUp::create($request->validated());
        toast('PopUp added successfully ', 'success');
        return redirect(route('admin.popUp.index'));
    }

    public function edit(popUp $popUp)
    {
        return view('backend.popUp.edit', compact('popUp'));
    }


    public function update(UpdatePopUpRequest $request, PopUp $popUp)
    {
        $popUp->update($request->validated());
        toast('PopUp updated successfully', 'success');
        return redirect(route('admin.popUp.index'));
    }


    public function destroy(PopUp $popUp)
    {
        $this->deleteFile($popUp->image);
        $popUp->delete();
        return back();
    }

    public function updateStatus(PopUp $popUp)
    {
        $popUp->update([
            'status' => !$popUp->status
        ]);
        toast('Status updated successfully', 'success');
        return back();
    }

}
