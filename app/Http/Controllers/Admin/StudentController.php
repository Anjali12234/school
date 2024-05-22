<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\StoreStudentRequest;
use App\Http\Requests\Student\UpdateStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students= Student::latest()->paginate(10);
        return view('backend.student.index' ,compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Student $student )
    {
        return view('backend.student.create',compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
    //    $student= Student::create($request->validated());
       Student::create($request->validated());
        toast('Student added successfully ', 'success');
        return redirect(route('admin.student.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('backend.student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('backend.student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->validated());
        toast('Student updated successfully', 'success');
        return redirect(route('admin.student.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $this->deleteFile($student->image);
         $student->delete();
         toast('deleted successfully', 'success');
         return back();
    }
    public function updateStatus(Student $student)
    {
        $student->update([
            'status' => !$student->status
        ]);
        toast('Status updated successfully', 'success');
        return back();
    }
}
