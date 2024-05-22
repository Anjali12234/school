@extends('frontend.layouts.master')
@section('container')

    <div class="contact_area pt-85 pb-90"
    style="background-image:url('../assets/frontend/images/slider/dark2.jpg'); background-attachment: fixed; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcome_title">
                        <div class="breatcome_title_inner pb-2">
                            <h2>Team</h2>
                        </div>
                        <div class="breatcome_content">
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a> <i class="fa fa-angle-right"></i><span>Team Detail</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

	<div class="team_member pt-85 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
					<div class="section_title text_left mb-40 mt-3">
						<div class="section_sub_title uppercase mb-3">
							<h6>EXPERTISE OF TEAM</h6>
						</div>
						<div class="section_main_title">
							<h1> Our Experienced Team</h1>
							<h1>for your Business!!</h1>
						</div>
						<div class="team_member_text pt-3">
							<p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in that injected</p>
						</div>
					</div>
					<div class="prfs_experience">
						<div class="headingh_experience_number">
							<h1>26</h1>
						</div>
						<div class="heading_experience_title">
							<h2>Years of experience in IT Solution & Business</h2>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
					<div class="team_join_thumb">
						<img src="{{asset('assets/frontend/images/slider/team-pages.png')}}" alt="" />
					</div>
				</div>

			</div>
		</div>
	</div>

	 <div class="team_area pt-85 pb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 wow fadeInLeft" data-wow-delay="0.4s">
					<div class="section_title text_left mb-60 mt-3">
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

			</div>
			<div class="row">
                @foreach ($staffs as $staff)
				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay="0.4s">
					<div class="team_style_three mb-30">
						<div class="team_style_three_inner">
							<div class="team_style_three-thumb">
								<div class="team_style_three_thumb_inner">
									<img src="{{$staff->image}}" alt="" style="height: 300px; width:255px;" />
								</div>
							</div>
							<div class="team_style_three_content">
								<div class="team_style_three_title">
									<h4>{{$staff->full_name ??''}}</h4>
								</div>
								<div class="team_style_three_sub_title">
									<span>{{$staff->post ??''}}</span>
								</div>
								<div class="team_style_three_icon">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

                @endforeach

			</div>
		</div>
	</div>


@endsection
