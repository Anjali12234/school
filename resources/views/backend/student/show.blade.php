@extends('backend.layouts.master')
@section('container')
<div>
        <div class="card-box mb-30"  style="min-height: 70vh;">
            <div class="pd-20">
                <h4 class="text-blue h4">Student Table</h4>
                <div class="mb-3 float-right justify-content-end">
                    {{-- <button class="btn btn-secondary"><a class="text-white " href="{{ route('admin.student.create') }}">Add
                            +</a></button> --}}

                </div>
            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                   
                </table>
                <div class="card text-center">
                    <div class="card-header">
                        <td><img src="{{ $student->image }}" alt="" width="270px" height="300px"></td>
                    </div>
                    <div class="card-body">
                      <p class="card-title">Name of Student:-<b>{{$student->full_name}}</b> </p>
                      <p class="card-text">Date of birth:- {{$student->dob}} </p>
                        <p class="card-text">  Address of student:- {{$student->address}}</p>
                      <p class="card-text">phone number:- {{$student->phone}}</p>
                      <p class="card-text">Email Address:- {{$student->email}}</p>
                      <p class="card-text">Admission date:- {{$student->admission_date}}</p>
                      <p class="card-text">Institute Leaving date:- {{$student->leaving_date}}</p>
                      <a href="{{route('admin.student.index')}}" class="btn btn-primary">Go Back</a>
                    </div>
                    <div class="card-footer text-muted">
                     About Student: {{$student->description ??''}}
                    </div>
                  </div>
            

            </div>
        </div>


    </div>
@endsection
