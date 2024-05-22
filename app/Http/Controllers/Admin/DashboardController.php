<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Course;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Staff;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $user = User::find(1);
        $staff_count = Staff::count();
        $contact_count = ContactUs::count();
        $service_count = Service::count();
        $course_count = Course::count();
        $testimonial_count = Testimonial::count();
        return view('backend.layouts.index',compact('user','staff_count','contact_count','service_count','course_count','testimonial_count'));
    }
}
