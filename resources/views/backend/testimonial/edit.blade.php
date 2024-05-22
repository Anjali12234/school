@extends('backend.layouts.master')
@section('container')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Testimonial Edit Form</h4>

                    </div>
                    <div class="mb-3 float-right justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.testimonial.index') }}">Testimonial List</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Testimonial Edit Form</li>
                            </ol>
                        </nav>

                    </div>
                </div>
                <form action="{{ route('admin.testimonial.update',$testimonial) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="name">Name *</label>
                            <input class="form-control" id="name" type="text" name="name"
                                value="{{ old('name',$testimonial->name??'') }}">
                            <span class="text-warning">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="image"> Image*</label>
                            <img src="{{ $testimonial->image }}" height="100px" width="100px" alt="">
                            <input class="form-control" id="image" type="file" name="image">
                            <span class="text-warning">
                                @error('image')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="post">Post *</label>
                            <input class="form-control" id="post" type="text" name="post"
                                value="{{ old('post', $testimonial->post??'') }}">
                            <span class="text-warning">
                                @error('post')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-sm-12 form-group">
                            <label for="description">Description</label>
                            <textarea class="textarea_editor form-control border-radius-0" id="description" type="text"
                                name="description">{{ old('description',$testimonial->description??'') }}</textarea>

                            <span class="text-warning">
                                @error('description')
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
    </div>
@endsection
