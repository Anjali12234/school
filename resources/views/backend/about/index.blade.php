@extends('backend.layouts.master')
@section('container')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">About Form</h4>
                    </div>

                </div>
                <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="title">Title *</label>
                            <input class="form-control" id="title" type="text" name="title"
                                value="{{ old('title', $about->title ?? '') }}">
                            <span class="text-warning">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="director_name">Director Name *</label>
                            <input class="form-control" id="director_name" type="text" name="director_name"
                                value="{{ old('director_name', $about->director_name ?? '') }}">
                            <span class="text-warning">
                                @error('director_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="director_phone_number">Phone Number</label>
                            <input class="form-control" id="director_phone_number" type="text "
                                name="director_phone_number"
                                value="{{ old('director_phone_number', $about->director_phone_number ?? '') }}">
                            <span class="text-warning">
                                @error('director_phone_number')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="director_email">Email</label>
                            <input class="form-control" id="director_email" type="email" name="director_email"
                                value="{{ old('director_email', $about->director_email ?? '') }}">
                            <span class="text-warning">
                                @error('director_email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="post"> Post </label>
                            <input class="form-control" id="post" type="text"
                                value="{{ old('post', $about->post ?? '') }}" name="post">
                            <span class="text-warning">
                                @error('post')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="about_image">About Image</label>
                            <span>
                                <img src="{{ $about->about_image ?? '' }}" height="100px" width="100px"  alt="">
                            </span>
                            <input class="form-control" id="about_image" type="file" name="about_image">
                            <span class="text-warning">
                                @error('about_image')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label for="about_image">Director Image</label>
                        <span>
                            <img src="{{ $about->director_image ?? '' }}" height="100px" width="100px" alt="">
                        </span>
                        <input class="form-control" id="director_image" type="file" name="director_image">
                        <span class="text-warning">
                            @error('director_image')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>



                    <div class="col-sm-12 form-group">
                        <label for="about_description">Description</label>
                        <textarea class="textarea_editor form-control border-radius-0" id="about_description" type="text"
                            name="about_description">{{ old('about_description', $about->about_description ?? '') }}</textarea>

                        <span class="text-warning">
                            @error('about_description')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="message">Message</label>
                        <textarea class="textarea_editor form-control border-radius-0" id="message" type="text" name="message">{{ old('message', $about->message ?? '') }}</textarea>
                        <span class="text-warning">
                            @error('message')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>



                    <div class="form-group">
                        <button class="btn btn-info" type="submit">Submit</button>
                    </div>
                </form>



            </div>
        </div>
    </div>
@endsection
