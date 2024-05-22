<?php

namespace App\Http\Controllers\Admin;


use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Testimonial\StoreTestimonialRequest;
use App\Http\Requests\Testimonial\UpdateTestimonialRequest;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('backend.testimonial.index', compact('testimonials'));
    }

    public function store(StoreTestimonialRequest $request)
    {
        Testimonial::create($request->validated());
        toast('Testimonial added successfully ', 'success');
        return redirect(route('admin.testimonial.index'));
    }



    public function edit(Testimonial $testimonial)
    {
        return view('backend.testimonial.edit', compact('testimonial'));
    }


    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        $testimonial->update($request->validated());
        toast('Testimonial updated successfully', 'success');
        return redirect(route('admin.testimonial.index'));
    }


    public function destroy( Testimonial $testimonial)
    {
        $this->deleteFile($testimonial->image);
        $testimonial->delete();
        return back();
    }

}
