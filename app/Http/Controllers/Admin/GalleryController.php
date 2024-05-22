<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Gallery\StoreGalleryRequest;
use App\Http\Requests\Gallery\UpdateGalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::latest()->paginate(10);
        return view('backend.gallery.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGalleryRequest $request)
    {
        Gallery::create($request->validated());
        toast('photo added successfully ', 'success');
        return redirect(route('admin.gallery.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('backend.gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        $gallery->update($request->validated());
        toast('gallery updated successfully', 'success');
        return redirect(route('admin.gallery.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $this->deleteFile($gallery->image);
        $gallery->delete();
        toast('deleted successfully', 'success');
        return back();
    }

    public function updateStatus(Gallery $gallery)
    {
        $gallery->update([
            'status' => !$gallery->status
        ]);
        toast('Status updated successfully', 'success');
        return back();
    }
}
