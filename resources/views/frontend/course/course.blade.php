@extends('frontend.layouts.master')
@section('container')

<div class="contact_area pt-85 pb-90"
style="background-image:url('../assets/frontend/images/slider/dark2.jpg'); background-attachment: fixed; background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breatcome_title">
                    <div class="breatcome_title_inner pb-2">
                        <h2>Course</h2>
                    </div>
                    <div class="breatcome_content">
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a> <i class="fa fa-angle-right"></i>  <span>Course</span></li>
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
                        <h1>All Courses <span>We Provide</span></h1>
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
                <div class="single_blog mb-30 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="single_blog_thumb pb-4">
                        <a href="{{route('courseDetail',$course->slug)}}"><img src="{{ $course->image }}" style="height: 400px; width: 500px;" alt="" /></a>
                    </div>
                    <div class="single_blog_content pl-4 pr-4">
                        <div class="techno_blog_meta">
                            <a href="{{route('courseDetail',$course->slug)}}">{{ $course->title }} </a>
                            <span class="meta-date pl-3">{{ $course->price }}</span>
                        </div>
                        <div class="blog_page_title pb-35">
                            <h3><a href="{{route('courseDetail',$course->slug)}}">{!! Illuminate\Support\Str::limit($course->description ?? '', 30, '') !!}</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>

@endsection
