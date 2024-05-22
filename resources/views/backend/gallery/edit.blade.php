@extends('backend.layouts.master')
@section('container')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Gallery Form</h4>

                    </div>
                    <div class="mb-3 float-right justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.gallery.index') }}">Gallery List</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery Form</li>
                            </ol>
                          </nav>
                    </div>
                </div>
                <form action="{{ route('admin.gallery.update', $gallery) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="title">Title *</label>
                           
                            <input class="form-control" id="title" type="text" name="title"
                                value="{{ old('title',$gallery->title ??'') }}">
                            <span class="text-warning">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="image"> Image*</label>
                            <span>
                                <img src="{{ $gallery->image ?? '' }}" height="70" width="70" alt="">
                            </span>
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
