@extends('frontend.layouts.master')
@section('container')
    <div class="contact_area pt-85 pb-90"
        style="background-image:url('../assets/frontend/images/slider/dark2.jpg'); background-attachment: fixed; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcome_title">
                        <div class="breatcome_title_inner pb-2">
                            <h2>Services</h2>
                        </div>
                        <div class="breatcome_content">
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></i> <i class="fa fa-angle-right"></i>
                                    <span>Service</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Techno Breatcome Area -->
    <!-- ============================================================== -->

    <div class="service_area bg_color2 pt-85 pb-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text_center mb-55">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>SERVICES</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>Service We Provide</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                        <div class="section_content_text pt-4">
                            <p>"At our computer institute, we provide top-notch training in programming, software
                                development, networking, and cybersecurity. Our courses blend theoretical knowledge with
                                practical skills, preparing students for successful careers in the tech industry. Join us to
                                acquire in-demand expertise and excel in the dynamic field of computer science."</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="service_style_one text_center pt-40 pb-40 pl-3 pr-3 mb-4">
                            <div class="service_style_one_icon mb-30">
                                <img src="{{ $service->image ?? '' }}" alt=""
                                    style="height: 80px; width:80px;border-radius: 50%; object-fit: cover;">
                            </div>
                            <div class="service_style_one_title mb-30">
                                <h4>{{ $service->title ?? '' }}</h4>
                            </div>
                            <div class="service_style_one_text">
                                <p>{!! Illuminate\Support\Str::limit($service->description ?? '', 100, '') !!}</p>
                            </div>
                            <div class="service_style_one_button pt-3">
                                <a href="{{ route('serviceDetail', $service->slug) }}">Read More <i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
