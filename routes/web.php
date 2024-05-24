<?php

use App\Http\Controllers\Front\ContactUsController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'Front.welcome')->name('home');
Route::view('/about-us', 'Front.AboutUs.about-us')->name('about_us');
Route::view('/digital-marketing', 'Front.DigitalMarketting.digital-marketting')->name('digital_marketting');
Route::view('/lead-generation', 'Front.DigitalMarketting.lead-geneartion')->name('lead-generation');
Route::view('/email-marketing', 'Front.DigitalMarketting.email-marketing')->name('email-marketing');
Route::view('/social-media-marketing', 'Front.DigitalMarketting.social-media-marketing')->name('social-media-marketing');
Route::view('/appointment-settings', 'Front.DigitalMarketting.appointment-setting')->name('appointment-settings');
Route::view('/it-solutions', 'Front.ItSolution.it-solutions')->name('it_solutions');
Route::view('/case-studies', 'Front.CaseStudies.case-studies')->name('case_studies');
Route::view('/our-team', 'Front.Team.team')->name('our_team');
Route::view('/blog', 'Front.Blog.blog')->name('blog');
Route::view('/contact', 'Front.Contact.contact')->name('contact');
Route::view('/privacy-policy', 'Front.PrivacyPolicy.privacy-policy')->name('privacy_policy');
Route::post('contact-us', ContactUsController::class)->name('contact_us');
