@extends('backend.layouts.master')
@section('container')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">PopUp Form</h4>

                    </div>
                    <div class="mb-3 float-right justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.popUp.index') }}">PopUp List</a></li>
                                <li class="breadcrumb-item active" aria-current="page">PopUp Form</li>
                            </ol>
                          </nav>

                    </div>
                </div>
                <form action="{{ route('admin.popUp.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="title">Title *</label>
                            <input class="form-control" id="title" type="text" name="title"
                                value="{{ old('title') }}">
                            <span class="text-warning">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="slug">Slug *</label>
                            <input class="form-control" id="slug" type="text" name="slug"
                                value="{{ old('slug') }}">
                            <span class="text-warning">
                                @error('slug')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-sm-6 form-group">
                            <label for="image"> Image*</label>

                            <input class="form-control" id="image" type="file" name="image">
                            <span class="text-warning">
                                @error('image')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-info" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
