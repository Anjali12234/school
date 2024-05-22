@extends('frontend.layouts.master')
@section('container')

    <div class="contact_area pt-90 pb-90 "
        style="background-image:url('../assets/frontend/images/slider/dark2.jpg'); background-attachment: fixed; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcome_title">
                        <div class="breatcome_title_inner pb-2">
                            <h2>Gallery</h2>
                        </div>
                        <div class="breatcome_content">
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a> <i
                                        class="fa fa-angle-right"></i><span>Gallery</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container py-5 fadeInRight" data-wow-delay="0.4s">
        <div class="row">
            @foreach ($galleries as $gallery)
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $gallery->image }}" height="350" width="350"
                            alt="Card image cap">
                    </div>
                    <p class="text-justify" style="width: 18rem;">{!! $gallery->title !!}</p>

                </div>
            @endforeach
        </div>
    </div>
@endsection
