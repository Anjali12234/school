<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Course;
use App\Models\Gallery;
use App\Models\PopUp;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Staff;
use App\Models\Testimonial;

class FrontendController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $about = About::first();
        $galleries= Gallery::inRandomOrder()->latest()->take(10)->get();
        $services = Service::inRandomOrder()->take(6)->where('status', 1)->get();
        $staffs = Staff::inRandomOrder()->take(4)->where('status', 1)->get();
        $testimonials = Testimonial::all();
        $popups= PopUp::latest()->get();
        $courses = Course::inRandomOrder()->latest()->take(3)->get();
        return view('frontend.index', compact('sliders', 'about', 'services', 'staffs', 'testimonials', 'courses','galleries','popups'));
    }

    public function about()
    {
        $about = About::first();
        return view('frontend.about', compact('about'));
    }

    public function course()
    {
        $courses = Course::all();
        return view('frontend.course.course', compact('courses'));
    }

    public function courseDetail(Course $course)
    {
        return view('frontend.course.courseDetail', compact('course'));
    }
    public function service()
    {
        $services = Service::latest()->get();
        return view('frontend.service.service',compact('services'));
    }
    public function serviceDetail(Service $service)
    {
        return view('frontend.service.serviceDetail',compact('service'));
    }
    public function team(Staff $staff)
    {
        $staffs= Staff::latest()->get();
        return view('frontend.team.team', compact('staffs'));
    }
    public function gallery(Gallery $gallery)
    {
        $galleries = Gallery::latest()->get();
        return view('frontend.Gallery.gallery', compact('galleries'));
    }
    public function error404()
    {
        return view ('frontend.error.404error');
    }
}
