@extends('frontend.layouts.master')
@section('container')

<div class="contact_area pt-85 pb-90"
style="background-image:url('../assets/frontend/images/slider/dark2.jpg'); background-attachment: fixed; background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breatcome_title">
                    <div class="breatcome_title_inner pb-2">
                        <h2>About Us</h2>
                    </div>
                    <div class="breatcome_content">
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a> <i class="fa fa-angle-right"></i>  <span>About</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="about_area pt-70 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6 wow fadeInLeft" data-wow-delay="0.4s">
                <div class="single_about_thumb mb-3">
                    <div class="single_about_thumb_inner" style="position: relative;">
                        <img src="{{ $about->about_image ?? '' }}" style="height: 600px; width:500px;"
                            alt="" />
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
                    </div>
                    <div class="em_bar">
                        <div class="em_bar_bg"></div>
                    </div>
                    <div class="section_content_text pt-4">
                        <p> {!! ($about->about_description ??'') !!}</p>
                    </div>
                </div>
            </div>


        </div>

    </div>

</div>
<div class="accordion-area about-pages pt-100 pb-100">
    <div class="container-fluid">
        <div class="row">
             <div class="col-lg-6 main-accordion-lt">
                <div class="acd-items acd-arrow pt-30 pb-30 mr-4 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="section_title white text_left mb-60 mt-3">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>WHY CHOOSE US</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>We Provide World Class</h1>
                            <h1>Facility to everyone</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>

                    </div>
                    <div class="panel-group symb" id="accordion">
                        <div class="panel panel-default">

                            <div id="ac1" class="panel-collapse in">
                                <div class="panel-body pl-4 pr-4">
                                    <p>
                                    {{ $about->message ??'' }}
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 absod">
                <div class="single-panel">
                    <div class="single-panel-thumb">
                        <div class="single-panel-thumb-inner">
                            <img src="{{ $about->director_image ??'' }}" style="height: 741px; width: 800px;" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
