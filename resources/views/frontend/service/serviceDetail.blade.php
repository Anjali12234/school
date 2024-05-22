@extends('frontend.layouts.master')
@section('container')
    <div class="contact_area pt-85 pb-90"
        style="background-image:url('../assets/frontend/images/slider/dark2.jpg'); background-attachment: fixed; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcome_title">
                        <div class="breatcome_title_inner pb-2">
                            <h2>Service Detail</h2>
                        </div>
                        <div class="breatcome_content">
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a> <i class="fa fa-angle-right"></i> <span>Service
                                        Detail</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

        <div class="blog_area pt-85 pb-70">
            <div class="container">
                <div class="row">
                    <!-- Start Section Tile -->
                    <div class="col-lg-12">
                        <div class="section_title text_center mb-50 mt-3">
                            <div class="section_main_title">
                                <h1>Service <span>Detail</span></h1>
                            </div>
                            <div class="em_bar">
                                <div class="em_bar_bg"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 mx-auto">
                        <div class=" mb-30 wow fadeInRight" data-wow-delay="0.4s">
                            <div class=" pb-4">
                                <a href="#"><img src="{{ $service->image }}" style="width: 400px; height:400px;"
                                         alt="" /></a>
                            </div>
                            <div class=""  style="width: 400px;">
                                <div class="text-justify">
                                    <h5 href="#">{{ $service->title }} </h5>

                                </div>
                                <div class="text-justify">
                                    <p>{!! $service->description ?? '' !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
