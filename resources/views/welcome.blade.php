<!DOCTYPE HTML>
<html lang="en-US">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Passion Education and Visa Consultancy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="70x70" href="{{ asset('assets/frontend/img/logo.png') }}">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" type="text/css" media="all" />
    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}" type="text/css"
        media="all" />
    <!-- nivo-slider CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/nivo-slider.css') }}" type="text/css" media="all" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}" type="text/css" media="all" />
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animated-text.css') }}" type="text/css" media="all" />
    <!-- font-awesome CSS -->
    <link type="text/css" rel="stylesheet"
        href="{{ asset('assets/frontend/fonts/font-awesome/css/font-awesome.min.css') }}">
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/flaticon.css') }}" type="text/css" media="all" />
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/theme-default.css') }}" type="text/css" media="all" />
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/meanmenu.min.css') }}" type="text/css" media="all" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/style.css') }}" type="text/css" media="all" />
    <!-- transitions CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.transitions.css') }}" type="text/css"
        media="all" />
    <!-- venobox CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/venobox/venobox.css') }}" type="text/css" media="all" />
    <!-- widget CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/widget.css') }}" type="text/css" media="all" />
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}" type="text/css" media="all" />
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <style>
        .parallax {
            position: relative;
            overflow: hidden;
        }

        .parallax::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center center;
            z-index: -1;
        }

        .single_about_thumb_inner:hover img {
            transform: scale(1.1);
            /* Increase the scale factor as needed */
            transition: transform 0.3s ease;
            /* Add a smooth transition effect */
        }
    </style>
</head>

<body>

    <!-- Loder Start-->
    {{-- <div class="loader-wrapper">
	  <div class="loader"></div>
	  <div class="loder-section left-section"></div>
	  <div class="loder-section right-section"></div>
	</div> --}}
    <!-- Loder End -->

    <!--==================================================-->
    <!----- Start	Techno Header Top Menu Area Css ----->
    <!--==================================================-->
    <div class="header_top_menu pt-2 pb-2 bg_color">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8">
                    <div class="header_top_menu_address">
                        <div class="header_top_menu_address_inner">
                            <ul>
                                <li><a href="#"><i
                                            class="fa fa-envelope-o"></i>{{ officeSetting()->institute_email ?? '' }}</a>
                                </li>
                                {{-- <li><a href="#"><i class="fa fa-map-marker"></i>{{ officeSetting()->institute_address ??'' }}</a></li> --}}
                                <li><a href="#"><i
                                            class="fa fa-phone"></i>{{ officeSetting()->institute_phone ?? '' }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="header_top_menu_icon">
                        <div class="header_top_menu_icon_inner">
                            <ul>
                                <li><a href="{{ officeSetting()->facebook_url ?? '' }}"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a href="{{ officeSetting()->twitter_url ?? '' }}"><i
                                            class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End	Techno Header Top Menu Area Css ----->
    <!--===================================================-->

    <!--==================================================-->
    <!----- Start Techno Main Menu Area ----->
    <!--==================================================-->
    <div id="sticky-header" class="techno_nav_manu d-md-none d-lg-block d-sm-none d-none">
        <div class="container">
            <div class="row align-items-center">
                <div class="menu">
                    <a href="index.html" class="logo"><img class="down"
                            src="{{ officeSetting()->institute_logo ?? '' }}" alt=""> <img class="main_sticky"
                            src="{{ officeSetting()->institute_logo ?? '' }}" alt=""></a>
                    <ul class="clearfix">
                        <li><a href="#">Home</a>
                        </li>
                        <li><a href="#">About</a>
                        </li>
                        <li><a href="#">Courses</a>
                        </li>
                        <li><a href="#">Gallery</a>
                        </li>
                        <li><a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Techno Mobile Menu Area -->
    <div class="mobile-menu-area d-sm-block d-md-block d-lg-none">
        <div class="mobile-menu">
            <nav class="techno_menu">
                <ul class="clearfix">
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">About</a>
                    </li>
                    <li><a href="#">Courses</a>
                    </li>
                    <li><a href="#">Gallery</a>
                    </li>
                    <li><a href="#">Contact</a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>

    <!--==================================================-->
    <!----- End Techno Main Menu Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Slider Area ----->
    <!--==================================================-->
    <div class="slider_list owl-carousel">
        @foreach ($sliders as $slider)
            <div class="slider_area d-flex align-items-center slider1" id="home"
                style="background-image: url('{{ $slider->image ?? '' }}'); background-size: cover; background-position: center;">
                <div class="container">
                    <div class="row">
                        <!--Start Single Portfolio -->
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
                                                <a href="#">Contact Us <i
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
    <!--==================================================-->
    <!----- End Techno Slider Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Flipbox Top Feature Area ----->
    <!--==================================================-->
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
    <!--==================================================-->
    <!----- End Techno Flipbox Top Feature Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno About Area ----->
    <!--==================================================-->

    <div class="about_area pt-70 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6 wow fadeInLeft" data-wow-delay="0.4s">
                    <div class="single_about_thumb mb-3">
                        <div class="single_about_thumb_inner" style="position: relative;">

                            <!-- Image -->
                            <img src="{{ $about->about_image ?? '' }}" style="height: 600px; width:500px;"
                                alt="" />

                            <!-- Video Icon and Link -->
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

                    <div class="single_about_shape">
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
                            {{-- <h1>Provide Best <span>IT Solutions.</span></h1> --}}
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                        <div class="section_content_text pt-4">
                            <p> {!! Str::words($about->about_description ?? '', 150, '..') !!}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno About Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Flipbox Area ----->
    <!--==================================================-->
    @if (count($services) > 0)
        <div class="flipbox_area parallax pt-85 pb-70"
            style="background-image:url('../assets/frontend/images/slider/bg2.jpg'); background-size:cover;">
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
                                            <p>{!! Str::words($service->description ?? '', 150, '..') !!}</p>
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
                                            <p>{!! Str::words($service->description ?? '', 150, '..') !!}</p>

                                        </div>
                                        <div class="flipbox_button">
                                            <a href="#">Read More<i class="fa fa-angle-double-right"></i></a>
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
    <!--==================================================-->
    <!----- End Techno Flipbox Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Team Area ----->
    <!--==================================================-->
    @if (count($staffs) > 0)
        <div class="team_area pt-80 pb-75" style="background-image:url('../assets/frontend/images/team-bg2.jpg');">
            <div class="container">
                <div class="row">
                    <!-- Start Section Tile -->
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
                                <a href="#">Join Our Team</a>
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
    <!--==================================================-->
    <!----- End Techno Team Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Case Study Area ----->
    <!--==================================================-->
    <div class="case_study_area pt-80" id="portfolio">
        <div class="container-fluid">
            <div class="row">
                <!-- Start Section Tile -->
                <div class="col-lg-12">
                    <div class="section_title text_center mb-50 mt-3 wow fadeInDown" data-wow-delay="0.4s">

                        <div class="section_sub_title uppercase mb-3">
                            <h6>FEATURES CASE</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>Our Latest Case Study</h1>
                            <h1>For Your Business</h1>
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
                            @foreach ($courses as $course)
                                <div class="col-lg-12 pdn_0">
                                    <div class="single_case_study wow fadeInUp" data-wow-delay="0.4s"
                                        style="padding: 10px;">
                                        <div class="single_case_study_inner">
                                            <div class="single_case_study_thumb">
                                                <a href="case-study-details.html"><img src="{{ $course->image }}"
                                                        alt="" style="height: 270px; width:370;" /></a>
                                            </div>  
                                        </div>
                                        <div class="single_case_study_content">
                                            <div class="single_case_study_content_inner">
                                                <div class="row">
                                                    <div class="col-md-4 text-center mt-2"
                                                        style="border-right: 1.5px solid #0b24e3;padding-right: 15px;">
                                                        {{ $course->time }}
                                                    </div>
                                                    <div class="col-md-4 text-center"
                                                        style="border-right: 1.5px solid #0b24e3;padding-right: 15px;">
                                                        {{ $course->title }}
                                                    </div>
                                                    <div class="col-md-4 text-center">
                                                        {{ $course->price }}
                                                    </div>
                                                </div>
                                                {{-- <h2><a href="case-study-details.html"></a>{{ $course->title }}</h2> --}}
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
    <!--==================================================-->
    <!----- End Techno Case Study Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno How IT Work Area ----->
    <!--==================================================-->
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
    <!--==================================================-->
    <!----- End Techno How IT Work Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Call Do Action Area ----->
    <!--==================================================-->
    <div class="call_do_action pt-85 pb-130 bg_color parallax"
        style="background-image:url('../assets/frontend/images/call-bg.png'); backgound-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="section_title white text_left mb-60 mt-3 wow fadeInLeft" data-wow-delay="0.4s">
                        <div class="phone_number mb-3">
                            <h5>+880 013 143 206</h5>
                        </div>
                        <div class="section_main_title">
                            <h1>To make requests for the</h1>
                            <h1>further information</h1>
                        </div>
                        <div class="button three mt-40">
                            <a href="#">Join With Now<i class="fa fa-long-arrow-right"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-video mt-90 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="video-icon">
                            <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
                                href="https://youtu.be/BS4TUd7FJSg"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Call Do Action Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Counter Area ----->
    <!--==================================================-->
    <div class="counter_area">
        <div class="container">
            <div class="row cntr_bg_up nagative_margin pt-50 pb-45 wow fadeInUp" data-wow-delay="0.4s">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single_counter text_center mb-4">
                        <div class="countr_text">
                            <h1><span class="counter">15</span><span>K</span> </h1>
                        </div>
                        <div class="counter_desc">
                            <h5>Happy Clients</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single_counter text_center mb-4">
                        <div class="countr_text">
                            <h1><span class="counter">1280</span><span>+</span> </h1>
                        </div>
                        <div class="counter_desc">
                            <h5>Account Number</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single_counter text_center mb-4">
                        <div class="countr_text">
                            <h1><span class="counter">10</span><span>K</span> </h1>
                        </div>
                        <div class="counter_desc">
                            <h5>Finished Projects</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single_counter text_center mb-4">
                        <div class="countr_text">
                            <h1><span class="counter">992</span><span>+</span> </h1>
                        </div>
                        <div class="counter_desc">
                            <h5>Win Awards</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Counter Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Testimonial Area ----->
    <!--==================================================-->
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
                                <h1>Our Happy Clients</h1>
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
                                                    <p>{{ $testimonial->description ?? '' }}</p>
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
    <!--==================================================-->
    <!----- End Techno Testimonial Area ----->
    <!--==================================================-->


    <!--==================================================-->
    <!----- Start Techno Contact Area ----->
    <!--==================================================-->
    <div class="contact_area pt-85 pb-90 parallax"
        style="background-image:url('../assets/frontend/images/slider/dark2.jpg'); background-attachment: fixed; background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title white text_center mb-60 mt-3 wow fadeInDown" data-wow-delay="0.4s">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>GET QUOTE</h6>
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
                        <form id="contact_form" action="{{ route('admin.contact.store') }}" method="POST"
                            id="dreamit-form">
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
                                        <button class="btn" type="submit">Free Consultancy</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="status"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Contact Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Blog Area ----->
    <!--==================================================-->
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
                            <h1>Blog Posts</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_blog text-center mb-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="single_blog_thumb">
                            <a href="blog-details.html"><img src="{{ asset('assets/frontend/images/blog1.jpg') }}"
                                    alt="" /></a>
                        </div>
                        <div class="single_blog_date">
                            <div class="single_blog_date_inner">
                                <h3>25</h3>
                                <span>DEC</span>
                                <span class="years">2023</span>
                            </div>
                        </div>
                        <div class="single_blog_content pt-4 pl-4 pr-4">
                            <div class="techno_blog_meta">
                                <a href="#">Techno </a>
                                <span class="meta-date pl-3">Corporate</span>
                            </div>
                            <div class="blog_page_title pb-1">
                                <h3><a href="blog-details.html">The five devices you need to work anytime</a></h3>
                            </div>
                            <div class="blog_description">
                                <p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt
                                    on labore et dolore. </p>
                            </div>
                            <div class="blog_page_button style_two pb-5">
                                <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_blog text-center mb-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="single_blog_thumb">
                            <a href="blog-details.html"><img src="{{ asset('assets/frontend/images/blog2.jpg') }}"
                                    alt="" /></a>
                        </div>
                        <div class="single_blog_date color3">
                            <div class="single_blog_date_inner">
                                <h3>28</h3>
                                <span>DEC</span>
                                <span class="years">2023</span>
                            </div>
                        </div>
                        <div class="single_blog_content pt-4 pl-4 pr-4">
                            <div class="techno_blog_meta">
                                <a href="#">Techno </a>
                                <span class="meta-date pl-3">Business</span>
                            </div>
                            <div class="blog_page_title pb-1">
                                <h3><a href="blog-details.html">How to learn PHP 10 tips to get you started</a></h3>
                            </div>
                            <div class="blog_description">
                                <p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt
                                    on labore et dolore. </p>
                            </div>
                            <div class="blog_page_button style_two pb-5">
                                <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_blog text-center mb-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="single_blog_thumb">
                            <a href="blog-details.html"><img src="{{ asset('assets/frontend/images/blog3.jpg') }}"
                                    alt="" /></a>
                        </div>
                        <div class="single_blog_date color2">
                            <div class="single_blog_date_inner">
                                <h3>22</h3>
                                <span>DEC</span>
                                <span class="years">2023</span>
                            </div>
                        </div>
                        <div class="single_blog_content pt-4 pl-4 pr-4">
                            <div class="techno_blog_meta">
                                <a href="#">Techno </a>
                                <span class="meta-date pl-3">Consulting</span>
                            </div>
                            <div class="blog_page_title pb-1">
                                <h3><a href="blog-details.html">The five devices you need to work anytime</a></h3>
                            </div>
                            <div class="blog_description">
                                <p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt
                                    on labore et dolore. </p>
                            </div>
                            <div class="blog_page_button style_two pb-5">
                                <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Blog Area ----->
    <!--==================================================-->


    <!--==================================================-->
    <!----- Start Techno Footer Middle Area ----->
    <!--==================================================-->

    <div class="footer-middle pt-95 parallax" style="background-image:url('../assets/frontend/images/call-bg.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widgets-company-info">
                        <div class="footer-bottom-logo pb-40">
                            <img src="  {{ officeSetting()->institute_logo ?? '' }}"
                                style="height: 90px; width:100px;" alt="" />
                        </div>
                        <div class="company-info-desc">
                            <p>
                                {{ Str::limit(strip_tags(officeSetting()->description ?? ''), $limit = 100, '') }}
                            </p>
                        </div>
                        <div class="follow-company-info pt-3">
                            <div class="follow-company-text mr-3">
                                <a href="#">
                                    <p>Follow Us</p>
                                </a>
                            </div>
                            <div class="follow-company-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widget-nav-menu">
                        <h4 class="widget-title pb-4">Our Services</h4>
                        <div class="menu-quick-link-container ml-4">
                            <ul id="menu-quick-link" class="menu">
                                @foreach (services() as $service)
                                    <li><a href="#">{{ $service->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widgets-company-info">
                        <h3 class="widget-title pb-4">Institute Address</h3>
                        <div class="footer-social-info">
                            <p><span>Address :</span> {{ officeSetting()->institute_address ?? '' }}</p>
                        </div>
                        <div class="footer-social-info">
                            <p><span>Phone :</span> {{ officeSetting()->institute_phone ?? '' }}</p>
                        </div>
                        <div class="footer-social-info">
                            <p><span>Email :</span> {{ officeSetting()->institute_email ?? '' }}</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div id="em-recent-post-widget">
                        <div class="single-widget-item">
                            <h4 class="widget-title pb-3">Popular Post</h4>

                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpassionnpj&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                             width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                              allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

                        </div>
                    </div>
                </div>

            </div>
            <div class="row footer-bottom mt-70 pt-3 pb-1">
                <div class="col-lg-6 col-md-6">
                    <div class="footer-bottom-content">
                        <div class="footer-bottom-content-copy">
                            <p>© {{ now()->year }} Passion.All Rights Reserved. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer-bottom-right">
                        <div class="footer-bottom-right-text">
                            <a class="absod" href="#">Privacy Policy </a>
                            <a href="#"> Terms & Conditions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Footer Middle Area ----->
    <!--==================================================-->

    <!-- jquery js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <!-- carousel js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <!-- counterup js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>
    <!-- waypoints js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/waypoints.min.js') }}"></script>
    <!-- wow js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/wow.js') }}"></script>
    <!-- imagesloaded js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- venobox js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/venobox/venobox.js') }}"></script>
    <!-- ajax mail js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/ajax-mail.js') }}"></script>
    <!--  testimonial js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/testimonial.js') }}"></script>
    <!--  animated-text js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/animated-text.js') }}"></script>
    <!-- venobox min js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/venobox/venobox.min.js') }}"></script>
    <!-- isotope js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
    <!-- jquery nivo slider pack js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.nivo.slider.pack.js') }}"></script>
    <!-- jquery meanmenu js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.meanmenu.js') }}"></script>
    <!-- jquery scrollup js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.scrollUp.js') }}"></script>
    <!-- theme js -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/theme.js') }}"></script>
    <!-- jquery js -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var flipboxAreas = document.querySelectorAll('.parallax');

            function updateParallax() {
                flipboxAreas.forEach(function(area) {
                    var boundingRect = area.getBoundingClientRect();
                    var offset = window.pageYOffset - boundingRect.top;
                    var speed = 0.5; // Adjust the parallax speed

                    area.style.backgroundPositionY = offset * speed + "px";
                });
            }

            // Initial call to set the background position on page load
            updateParallax();

            // Update the parallax effect on scroll
            window.addEventListener("scroll", updateParallax);
        });
    </script>

</body>

<!-- Mirrored from html.ditsolution.net/techno/index-14.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 15:40:52 GMT -->

</html>
