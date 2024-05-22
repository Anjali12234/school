<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\StoreCourseRequest;
use App\Http\Requests\Course\UpdateCourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::latest()->paginate(10);
        return view('backend.course.index', compact('courses'));
    }


    public function create()
    {
        return view('backend.course.create');
    }

    public function store(StoreCourseRequest $request)
    {
        Course::create($request->validated());
        toast('Course added successfully ', 'success');
        return redirect(route('admin.course.index'));
    }



    public function edit(Course $course)
    {
        return view('backend.course.edit', compact('course'));
    }


    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course->update($request->validated());
        toast('Course updated successfully', 'success');
        return redirect(route('admin.course.index'));
    }


    public function destroy(Course $course)
    {
        $this->deleteFile($course->image);
        $course->delete();
        return back();
    }

    public function updateStatus(Course $course)
    {
        $course->update([
            'status' => !$course->status
        ]);
        toast('Status updated successfully', 'success');
        return back();
    }
}
