<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\PopUpController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', DashboardController::class)->name('dashboard');
Route::resource('officeSetting', SettingController::class)->only('index', 'store');
Route::resource('about', AboutController::class)->only('index', 'store', 'delete');
Route::resource('contact', ContactUsController::class)->only('index', 'store', 'destroy');
Route::put('contact/{contact}/deleteNotification', [ContactUsController::class, 'deleteNotification'])->name('contact.deleteNotification');
Route::get('readAllNotification', [ContactUsController::class, 'readAllNotification'])->name('contact.readAllNotification');





Route::resource('course', CourseController::class);
Route::put('course/{course}/updateCourseStatus', [CourseController::class, 'updateStatus'])->name('course.updateCourseStatus');
Route::resource('service', ServiceController::class);
Route::put('service/{service}/updateServiceStatus', [ServiceController::class, 'updateStatus'])->name('service.updateServiceStatus');
Route::resource('slider', SliderController::class);
Route::resource('testimonial', TestimonialController::class);
Route::resource('staff', StaffController::class);
Route::put('staff/{staff}/updatestaffStatus', [StaffController::class, 'updateStatus'])->name('staff.updateStaffStatus');
Route::resource('popUp', PopUpController::class);
Route::put('popUp/{popUp}/updatePopUpStatus', [PopUpController::class, 'updateStatus'])->name('popUp.updatePopUpStatus');

Route::resource('student',StudentController::class);
Route::put('student/{student}/updateStudentStatus',[StudentController::class,'updateStatus'])->name('student.updateStudentStatus');

Route::resource('gallery',GalleryController::class);
Route::put('gallery/{gallery}/updateGalleryStatus',[GalleryController::class,'updateStatus'])->name('gallery.updaetGalleryStatus');
