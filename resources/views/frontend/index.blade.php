@extends('frontend.layouts.master')

@section('container')
 <!-- Loder Start-->
 <div class="loader-wrapper">
    <div class="loader"></div>
    <div class="loder-section left-section"></div>
    <div class="loder-section right-section"></div>
  </div>
  <!-- Loder End -->

    <!-- Modal popup notice -->
    @if ($popups->count() > 0)
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle">Notice</h5>
                        <button type="button" id="closeModalButton" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
                            <ol class="carousel-indicators">
                                @foreach ($popups as $key => $popup)
                                    <li data-target="#carouselExampleControls" data-slide-to="{{ $key }}"
                                        class="{{ $key == 0 ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach ($popups as $key => $popup)
                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                        <img class="d-block w-100" src="{{ $popup->image }}" alt=""
                                            style="width: 100%;">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    @endif



    {{-- slider --}}
    <div class="slider_list owl-carousel">
        @foreach ($sliders as $slider)
            <div class="slider_area d-flex align-items-center slider1" id="home"
                style="background-image: url('{{ $slider->image ?? '' }}'); background-size: cover; background-position: center;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single_slider">
                                <div class="slider_content">
                                    <div class="slider_text">
                                        <div class="slider_text_inner wow fadeInLeft" data-wow-delay="0.3s">
                                            <h5>Start learning from here</h5>
                                            <h1>{{ $slider->title ?? '' }}</h1>
                                        </div>
                                        <div class="slider_button pt-5 d-flex wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="button">
                                                <a href="#contact_form">Contact Us <i
                                                        class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="slider-video wow fadeInUp" data-wow-delay="0.3s">
                                            <div class="video-icon">
                                                <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube"
                                                    data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg"><i
                                                        class="fa fa-play"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{-- feature --}}
    <div class="flipbox_area top_feature">
        <div class="container">
            <div class="row nagative_margin">
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-global-1"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Provide All Kind Of Diploma Course</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Provide All Kind Of Diploma Course</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Whether bringing new amazing courses and services to market</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-data"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Solution For All IT Security</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Solution For All IT Security</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Whether bringing new amazing products and services to market</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-interaction"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>All IT Consultancy Solution</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>All IT Consultancy Solution</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Whether bringing new amazing products and services to market</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-developer"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Best Experience Engineer </h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Best Experience Engineer </h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Whether bringing new amazing products and services to market</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- about --}}

    <div class="about_area pt-70 pb-200">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6 wow fadeInLeft" data-wow-delay="0.4s">
                    <div class="single_about_thumb mb-3">
                        <div class="single_about_thumb_inner" style="position: relative;">
                            <img src="{{ $about->about_image ?? '' }}"
                                style="height: 600px; width:500px; padding-bottom: 100px;" alt="" />
                            <div class="slider-video wow fadeInUp" data-wow-delay="0.3s"
                                style="position: absolute; top: 70%; left: 50%; transform: translate(-50%, -50%);">
                                <div class="video-icon">
                                    <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube"
                                        data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="single_about_shape ">
                        <div class="single_about_shape_thumb bounce-animate">
                            <img src="{{ asset('assets/frontend/images/about-circle.png') }}" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                    <div class="section_title text_left mb-40 mt-3 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>About Us</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>{{ $about->title ?? '' }}</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                        <div class="section_content_text pt-4">
                            <p>{!! Illuminate\Support\Str::limit($about->about_description ?? '', 400, '') !!}</p>
                        </div>
                    </div>
                    <div class="singel_about_left_inner pl-4">
                        <div class="button two">
                            <a href="{{route('about')}}">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (count($services) > 0)
        <div class="flipbox_area pt-85 pb-70"
            style="background-image:url('../assets/frontend/images/slider/bg2.jpg'); background-attachment: fixed; background-size: cover; background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text_center white mb-55 wow fadeInDown" data-wow-delay="0.4s">
                            <div class="section_sub_title uppercase mb-3">
                                <h6>SERVICES</h6>
                            </div>
                            <div class="section_main_title">
                                <h1>Provide Exclusive Services</h1>
                            </div>
                            <div class="em_bar">
                                <div class="em_bar_bg"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
                            <div class="techno_flipbox mb-30 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="techno_flipbox_font">
                                    <div class="techno_flipbox_inner">
                                        <div class="techno_flipbox_icon">
                                            <div class="icon">
                                                <i class="flaticon-padlock"></i>
                                            </div>
                                        </div>
                                        <div class="flipbox_title">
                                            <h3>{{ $service->title }}</h3>
                                        </div>
                                        <div class="flipbox_desc">
                                            <p>{!! Illuminate\Support\Str::limit($service->description ?? '', 100, '') !!}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="techno_flipbox_back "
                                    style="background-image:url('{{ $service->image ?? '' }}');">
                                    <div class="techno_flipbox_inner">
                                        <div class="flipbox_title">
                                            <h3>
                                                <h3>{{ $service->title ?? '' }}</h3>
                                            </h3>
                                        </div>
                                        <div class="flipbox_desc">
                                            <p>{!! Illuminate\Support\Str::limit($service->description ?? '', 100, '') !!}</p>

                                        </div>
                                        <div class="flipbox_button">
                                            <a href="{{ route('service') }}">Read More<i
                                                    class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    {{-- Team --}}
    @if (count($staffs) > 0)
        <div class="team_area pt-80 pb-75" style="background-image:url('../assets/frontend/images/slider/team-bg2.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="section_title text_left mb-50 mt-3 wow fadeInLeft" data-wow-delay="0.4s">

                            <div class="section_sub_title uppercase mb-3">
                                <h6>TEAM MEMBER</h6>
                            </div>
                            <div class="section_main_title">
                                <h1>Our Awesome Creative</h1>
                                <h1>Team Member</h1>
                            </div>
                            <div class="em_bar">
                                <div class="em_bar_bg"></div>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-3">
                        <div class="section_button mt-50 wow fadeInRight" data-wow-delay="0.4s">
                            <div class="button two">
                                <a href="{{ route('team') }}">View Our Team</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($staffs as $staff)
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="single_team mb-4 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="single_team_thumb">
                                    <img src="{{ $staff->image ?? '' }}" height="250px;" alt="" />
                                    <div class="single_team_icon">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </div>
                                <div class="single_team_content">
                                    <h4>{{ $staff->full_name ?? '' }}</h4>
                                    <span>{{ $staff->post ?? '' }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endif

    {{-- Gallery --}}
    <div class="case_study_area pt-80" id="portfolio">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text_center mb-50 mt-3 wow fadeInDown" data-wow-delay="0.4s">

                        <div class="section_sub_title uppercase mb-3">
                            <h6>GALLERY CASE</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>Some Glimpse
                                <div> Of Siddhartha</div>
                            </h1>
                        </div>

                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-item">

                    <div class="row">
                        <!--portfolio owl curousel -->

                        <div class="case_study_list owl-carousel curosel-style">
                            <!--Start Single Portfolio -->
                            @foreach ($galleries as $gallery)
                                <div class="col-lg-12 pdn_0">
                                    <div class="single_case_study wow fadeInUp" data-wow-delay="0.4s"
                                        style="padding: 10px;">
                                        <div class="single_case_study_inner">

                                            <div class="single_case_study_thumb">
                                                <a href="case-study-details.html"><img src="{{ $gallery->image }}"
                                                        alt="" style="height: 450px; width:350px;" /></a>
                                            </div>
                                        </div>
                                        <div class="single_case_study_content">
                                            <div class="single_case_study_content_inner">
                                                <h2><a href="case-study-details.html"></a>{{ $gallery->title }}</h2>
                                                {{-- <span>{!! Illuminate\Support\Str::limit($course->description ?? '', 30, '') !!}</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- working Proces --}}
    <div class="how_it_work pt-50 pb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeInDown" data-wow-delay="0.4s">
                    <div class="section_title text_center mb-60 mt-3">

                        <div class="section_sub_title uppercase mb-3">
                            <h6>FEATURES CASE</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>Our Working Process</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_it_work mb-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single_it_work_content pl-2 pr-2">
                            <div class="single_it_work_content_list pb-5">
                                <span>1</span>
                            </div>
                            <div class="single_work_content_title pb-2">
                                <h4>Select A Project</h4>
                            </div>
                            <div class="single_it_work_content_text pt-1">
                                <p>We have the technology and industry expertise to develop solutions that can connect
                                    people and businesses across variety of mobile devices.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_it_work mb-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single_it_work_content pl-2 pr-2">
                            <div class="single_it_work_content_list pb-5">
                                <span>2</span>
                            </div>
                            <div class="single_work_content_title pb-2">
                                <h4>Project Analysis</h4>
                            </div>
                            <div class="single_it_work_content_text pt-1">
                                <p>We have the technology and industry expertise to develop solutions that can connect
                                    people and businesses across variety of mobile devices.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_it_work mb-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single_it_work_content pl-2 pr-2">
                            <div class="single_it_work_content_list three pb-5">
                                <span>3</span>
                            </div>
                            <div class="single_work_content_title pb-2">
                                <h4>Deliver Result</h4>
                            </div>
                            <div class="single_it_work_content_text pt-1">
                                <p>We have the technology and industry expertise to develop solutions that can connect
                                    people and businesses across variety of mobile devices.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- counter --}}

    <div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3520.869680235719!2d81.63715527514533!3d28.059003475982713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3998679467678b43%3A0xecf4759bb1a1130c!2sSiddhartha%20vidya%20sadan%20secondary%20school!5e0!3m2!1sen!2snp!4v1716451737901!5m2!1sen!2snp"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

    <div class="counter_area">
        <div class="container">
            <div class="row cntr_bg_up nagative_margin pt-50 pb-45 wow fadeInUp" data-wow-delay="0.4s">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single_counter text_center mb-4">
                        <div class="countr_text">
                            <h1><span class="counter">15</span><span>K</span> </h1>
                        </div>
                        <div class="counter_desc">
                            <h5>Happy Students</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single_counter text_center mb-4">
                        <div class="countr_text">
                            <h1><span class="counter">1280</span><span>+</span> </h1>
                        </div>
                        <div class="counter_desc">
                            <h5>Best Teacher</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single_counter text_center mb-4">
                        <div class="countr_text">
                            <h1><span class="counter">10</span><span>K</span> </h1>
                        </div>
                        <div class="counter_desc">
                            <h5>Advanced Course</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single_counter text_center mb-4">
                        <div class="countr_text">
                            <h1><span class="counter">992</span><span>+</span> </h1>
                        </div>
                        <div class="counter_desc">
                            <h5>Best Service</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- testimonial --}}
    @if (count($testimonials) > 0)
        <div class="testimonial_area pt-80 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text_center mb-60 mt-3 wow fadeInRight" data-wow-delay="0.4s">
                            <div class="section_sub_title uppercase mb-3">
                                <h6>TESTIMONIAL</h6>
                            </div>
                            <div class="section_main_title">
                                <h1>What Says</h1>
                                <h1>Our Happy Students</h1>
                            </div>
                            <div class="em_bar">
                                <div class="em_bar_bg"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="testimonial_list owl-carousel curosel-style">
                                @foreach ($testimonials as $testimonial)
                                    <div class="col-lg-12">
                                        <div class="single_testimonial mt-3 mb-5 wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="single_testimonial_content">
                                                <div class="single_testimonial_content_text mb-4">
                                                    <p>{!! $testimonial->description ?? '' !!}</p>
                                                </div>
                                                <div class="single_testimonial_thumb mt-2 mr-3"
                                                    style="border-radius: 50%;">
                                                    <img src="{{ $testimonial->image }}" alt=""
                                                        style="border-radius: 50%; height:100px; width:100px;" />
                                                </div>

                                                <div class="single_testimonial_content_title mt-4">
                                                    <h4>{{ $testimonial->name }}</h4>
                                                    <span>{{ $testimonial->post }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    {{-- Contact --}}

    <div class="contact_area pt-85 pb-90" id="contact_form"
        style="background-image:url('../assets/frontend/images/slider/dark2.jpg'); background-attachment: fixed; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title white text_center mb-60 mt-3 wow fadeInDown" data-wow-delay="0.4s">
                        <div class="section_sub_title uppercase mb-3">
                        </div>
                        <div class="section_main_title">
                            <h1>Make An</h1>
                            <h1>Contact With Us</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                        <div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="quote_wrapper wow fadeInUp" data-wow-delay="0.4s">
                        <div id="status"></div>
                        <form id="dreamit-form">
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
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="text" name="name" placeholder="Name">
                                        <span class="text-warning">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="email" name="email" placeholder="Email Address">
                                        <span class="text-warning">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="number" name="phone" placeholder="Phone Number">
                                        <span class="text-warning">
                                            @error('phone')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="text" name="subject" placeholder="Subject">
                                        <span class="text-warning">
                                            @error('subject')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form_box mb-30">
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Write a Message"></textarea>
                                        <span class="text-warning">
                                            @error('message')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="quote_btn text_center">
                                        <button class="btn" type="button" id="submitBtn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Course --}}
    <div class="blog_area pt-85 pb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text_center mb-60 mt-3 wow fadeInDown" data-wow-delay="0.3s">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>LATEST ARTICLE</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>See Our Latest</h1>
                            <h1>Courses</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($courses as $course)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single_blog text-center mb-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="single_blog_thumb">
                                <a href="{{ route('courseDetail', $course->slug) }}"><img src="{{ $course->image }}"
                                        style="height: 400px" alt="" /></a>
                            </div>

                            <div class="single_blog_content pt-4 pl-4 pr-4">
                                <div class="techno_blog_meta">
                                    <a href="{{ route('courseDetail', $course->slug) }}">{{ $course->time }} </a>
                                    <span class="meta-date pl-3">{{ $course->price }}</span>
                                </div>
                                <div class="blog_page_title pb-1">
                                    <h3><a href="{{ route('courseDetail', $course->slug) }}">{{ $course->title }}</a>
                                    </h3>
                                </div>
                                <div class="blog_description">
                                    <p>{!! Illuminate\Support\Str::limit($course->description ?? '', 100, '') !!}</p>
                                </div>
                                <div class="blog_page_button style_two pb-5">
                                    <a href="{{ route('courseDetail', $course->slug) }}">Read More <i
                                            class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Blog Area ----->
    <!--==================================================-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            // Smooth scrolling when clicking on the "Contact Us" link
            $('.button a').on('click', function(e) {
                e.preventDefault();

                var targetId = $(this).attr('href');
                $('html, body').animate({
                    scrollTop: $(targetId).offset().top
                }, 1000); // Adjust the duration of the animation if needed
            });
        });
        $(document).ready(function () {
        $("#submitBtn").click(function () {
            // Get form data
            var formData = new FormData($('#dreamit-form')[0]);

            // Make an AJAX request
            $.ajax({
                url: '{{ route('admin.contact.store') }}',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    // Handle success response
                    console.log(data);

                    // Display success message
                    $('#status').html('<div class="alert alert-success alert-dismissible">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        'Form submitted successfully!</div>');

                    // Clear form fields or handle other UI changes if needed
                    $('#dreamit-form')[0].reset();
                },
                error: function (error) {
                    // Handle error response
                    console.error('Error:', error);

                    // Display error message
                    $('#status').html('<div class="alert alert-danger alert-dismissible">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        'Form submission failed!</div>');
                }
            });
        });
    });
    </script>
@endsection
