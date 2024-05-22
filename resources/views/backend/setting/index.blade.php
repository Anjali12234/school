@extends('backend.layouts.master')
@section('container')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Setting Form</h4>
                    </div>

                </div>
                <form action="{{ route('admin.officeSetting.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="institute_name">Name Of Institute *</label>
                            <input class="form-control" id="institute_name" type="text" name="institute_name"
                                value="{{ old('institute_name', $officeSetting->institute_name ?? '') }}" placeholder="Name Of Institute">
                            <span class="text-warning">
                                @error('institute_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="institute_address">Address *</label>
                            <input class="form-control" id="institute_address" type="text" name="institute_address"
                                value="{{ old('institute_address', $officeSetting->institute_address ?? '') }}"  placeholder="Address">
                            <span class="text-warning">
                                @error('institute_address')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="institute_phone">Phone Number*</label>
                            <input class="form-control" id="institute_phone" type="text " name="institute_phone"
                                value="{{ old('institute_phone', $officeSetting->institute_phone ?? '') }}" placeholder="Phone Number">
                            <span class="text-warning">
                                @error('institute_phone')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="institute_email">Email</label>
                            <input class="form-control" id="institute_email" type="email" name="institute_email"
                                value="{{ old('institute_email', $officeSetting->institute_email ?? '') }}"  placeholder="Email">
                            <span class="text-warning">
                                @error('institute_email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                    </div>


                    <div class="row">

                        <div class="col-sm-6 form-group">
                            <label for="institute_logo"> Institute Logo </label>
                            <span>
                                <img src="{{ $officeSetting->institute_logo ?? '' }}" height="100px" width="100px"  alt="">
                            </span>
                            <input class="form-control" id="institute_logo" type="file" name="institute_logo">

                            <span class="text-warning">
                                @error('institute_logo')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>


                    </div>

                    <div class="col-sm-12 form-group">
                        <label for="map">Map Url</label>
                        <input class="form-control" type="url" id="map"
                            value="{{ old('map_url', $officeSetting->map_url ?? '') }}" name="map_url" placeholder="Map Url">
                        <span class="text-warning">
                            @error('map_url')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="facebook_url">Facebook Url</label>
                        <input class="form-control" id="facebook_url" type="url"
                            value="{{ old('facebook_url', $officeSetting->facebook_url ?? '') }}" name="facebook_url"
                            placeholder="Facebook Url">
                        <span class="text-warning">
                            @error('facebook_url')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="twitter_url">Twitter Url</label>
                        <input class="form-control" id="twitter_url" type="url" name="twitter_url"
                            value="{{ old('twitter_url', $officeSetting->twitter_url ?? '') }}" placeholder="Twitter Url">
                        <span class="text-warning">
                            @error('twitter_url')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="col-sm-12 form-group">
                        <label for="instagram_url">Instagram Url</label>
                        <input class="form-control" id="instagram_url" type="url" name="instagram_url"
                            value="{{ old('instagram_url', $officeSetting->instagram_url ?? '') }}"
                            placeholder="Instagram Url">
                        <span class="text-warning">
                            @error('instagram_url')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" placeholder="Write Something" type="text" name="description">{{ old('description', $officeSetting->description ?? '') }}</textarea>
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
