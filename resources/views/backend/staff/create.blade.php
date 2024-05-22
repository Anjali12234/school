@extends('backend.layouts.master')
@section('container')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Staff Form</h4>

                    </div>
                    <div class="mb-3 float-right justify-content-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.staff.index') }}">Staff List</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Staff Form</li>
                            </ol>
                        </nav>

                    </div>
                </div>
                <form action="{{ route('admin.staff.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="full_name">Full Name *</label>
                            <input class="form-control" id="full_name" type="text" name="full_name"
                                value="{{ old('full_name') }}">
                            <span class="text-warning">
                                @error('full_name')
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
                        <div class="col-sm-6 form-group">
                            <label class="weight-600">Gender *</label>
                            <div class="d-flex">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="gender" id="male" value="male"
                                    {{ old('gender') == 'male' ? 'checked' : '' }}>
                                <label class="form-check-label" for="male">male &nbsp;</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="gender" id="female" value="female"
                                    {{ old('gender') == 'female' ? 'checked' : '' }}>
                                <label class="form-check-label" for="female">female &nbsp;</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="gender" id="other" value="other"
                                    {{ old('gender') == 'other' ? 'checked' : '' }}>
                                <label class="form-check-label" for="other">other &nbsp;</label>
                                </div>
                            </div>
                            <span class="text-warning">
                                @error('gender')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="dob">Date Of Birth</label>
                            <div >
                                <input class="form-control date-picker" value="{{ old('dob') }}" id="dob"
                                    name="dob" placeholder="Select Date" type="text" />
                            </div>
                            <span class="text-warning">
                                @error('dob')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="phone">Phone Number</label>
                            <input class="form-control" id="phone" type="text" name="phone"
                                value="{{ old('phone') }}">
                            <span class="text-warning">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="email">Email</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" value="{{ old('email') }}" id="email" name="email"
                                    placeholder="Email" type="email" name="email" />
                            </div>
                            <span class="text-warning">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="address">Address</label>
                            <input class="form-control" id="address" type="text" name="address"
                                value="{{ old('address') }}">
                            <span class="text-warning">
                                @error('address')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="join_date">Join Date</label>
                            <div >
                                <input class="form-control date-picker" value="{{ old('join_date') }}" id="join_date"
                                    name="join_date" placeholder="Select Date" type="text" />
                            </div>
                            <span class="text-warning">
                                @error('join_date')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="leaving_date">Leaving Date</label>
                            <div>
                                <input class="form-control date-picker" value="{{ old('leaving_date') }}"
                                    id="leaving_date" name="leaving_date" placeholder="Select Date" type="text" />
                            </div>
                            <span class="text-warning">
                                @error('leaving_date')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="post">Post</label>
                            <div>
                                <input class="form-control" id="post" value="{{ old('post') }}" name="post"
                                    placeholder="post" type="post" name="post" />
                            </div>
                            <span class="text-warning">
                                @error('post')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="position">Position</label>
                            <input class="form-control" id="position" type="text" name="position"
                                value="{{ old('position') }}">
                            <span class="text-warning">
                                @error('position')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-sm-12 form-group">
                            <label for="description">Description</label>
                            <textarea class="textarea_editor form-control border-radius-0" id="description" type="text" name="description">{{ old('description') }}</textarea>
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
@endsection
