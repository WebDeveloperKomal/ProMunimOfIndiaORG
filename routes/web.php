<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\Frontend;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/admin', [UserAuth::class,'index']);

Route::post('/admin/login', [UserAuth::class,'login']);
Route::get('/admin/dashboard', [UserAuth::class,'dashboard']);
Route::get('/admin/logout', function(){
    if(session()->has('email'))
    {
        session()->pull('email');
    }
    return redirect('admin');
});
Route::get('/admin/slider', [Admin::class,'slider']);
Route::get('/admin/add_slider', [Admin::class,'add_slider']);
Route::post('/admin/add_slider', [Admin::class,'save_slider']);
Route::get('/admin/delete/{id}/{table}', [Admin::class,'delete']);
Route::post('/admin/imageUpload', [Admin::class,'fileUpload']);
Route::get('/admin/blogs', [Admin::class,'blogs']);
Route::get('/admin/add_blogs', [Admin::class,'add_blogs']);
Route::get('/admin/add_blogs/{id}', [Admin::class,'add_blogs']);
Route::post('/admin/save_blogs', [Admin::class,'save_blogs']);
Route::get('/admin/pages', [Admin::class,'pages']);
Route::get('/admin/add_pages', [Admin::class,'add_pages']);
Route::get('/admin/add_pages/{id}', [Admin::class,'add_pages']);
Route::post('/admin/save_pages', [Admin::class,'save_pages']);
Route::get('/admin/services', [Admin::class,'services']);
Route::post('/admin/save_services', [Admin::class,'save_services']);
Route::get('/admin/category', [Admin::class,'category']);
Route::post('/admin/save_category', [Admin::class,'save_category']);
Route::get('/admin/gallery', [Admin::class,'gallery']);
Route::post('/admin/save_gallery', [Admin::class,'upload_gallery']);
Route::get('/admin/clients', [Admin::class,'clients']);
Route::post('/admin/save_clients', [Admin::class,'upload_clients']);
Route::get('/admin/testimonials', [Admin::class,'testimonials']);
Route::post('/admin/save_testimonials', [Admin::class,'save_testimonials']);
Route::get('/admin/portfolio', [Admin::class,'portfolio']);
Route::post('/admin/save_portfolio', [Admin::class,'save_portfolio']);
Route::get('/admin/team', [Admin::class,'team']);
Route::post('/admin/save_team', [Admin::class,'save_team']);
Route::get('/admin/contact_settings', [Admin::class,'contact_settings']);
Route::post('/admin/save_contact', [Admin::class,'save_contact']);
Route::post('/admin/change_password', [Admin::class,'change_password']);
Route::get('/admin/enquiry', [Admin::class,'enquiry']);
Route::get('/admin/careers', [Admin::class,'careers']);

// Route::get('/admin/edit_blogs/{id}', [Admin::class,'edit_blogs']);

Route::get('/', [Frontend::class,'index']);
Route::get('/about', [Frontend::class,'about']);
Route::get('/accountancy', [Frontend::class,'accountancy']);
Route::get('/your-first-visit', [Frontend::class,'your_first_visit']);
Route::get('/additional-services', [Frontend::class,'additional_services']);
Route::get('/apply', [Frontend::class,'apply']);
Route::get('/business-financial-planning', [Frontend::class,'business_financial_planning']);
Route::get('/capital-management', [Frontend::class,'capital_management']);
Route::get('/career', [Frontend::class,'career']);
Route::get('/contact', [Frontend::class,'contact']);
Route::get('/discount', [Frontend::class,'discount']);
Route::get('/membership-plan', [Frontend::class,'membership_plan']);
Route::get('/candidate_list', [Frontend::class,'candidate_list']);
Route::get('/candidate_form', [Frontend::class,'candidate_form']);

Route::get('/mr-vikramraj-acharya', [Frontend::class,'vikram']);
Route::get('/nach', [Frontend::class,'nach']);
Route::get('/our-office', [Frontend::class,'office']);
Route::get('/our-team', [Frontend::class,'team']);
Route::get('/patient-portal', [Frontend::class,'patient_portal']);
Route::get('/payment', [Frontend::class,'payment']);
Route::get('/price', [Frontend::class,'price']);
Route::get('/login', [Frontend::class,'login']);
Route::get('/otp', [Frontend::class,'otp']);

Route::get('/referring-dentist', [Frontend::class,'referring_dentist']);
Route::get('/service-details', [Frontend::class,'service_details']);
Route::get('/services', [Frontend::class,'services']);
Route::get('/testimonials', [Frontend::class,'testimonials']);
Route::get('/tax-compliance', [Frontend::class,'tax_compliance']);
Route::get('/videos', [Frontend::class,'videos']);

Route::get('/web-portal', [Frontend::class,'web_portal']);
Route::get('/signup', [Frontend::class,'signup']);
Route::post('/signup', [UserAuth::class,'signup_front']);
Route::get('/verify', [Frontend::class,'verify']);
Route::post('/verify', [UserAuth::class,'verification']);
Route::get('/welcome', [Frontend::class,'welcome']);
Route::get('/business_setup', [Frontend::class,'business_setup']);
Route::post('/business-details', [Frontend::class,'update_business']);
Route::get('/business-details', [Frontend::class,'update_business']);
Route::post('/update', [Frontend::class,'update']);
Route::post('/accept_disclaimer', [Frontend::class,'accept_disclaimer']);
Route::post('/update_pan', [Frontend::class,'update_pan']);
Route::post('/update_pan_card_details', [Frontend::class,'update_pan_card_details']);
Route::post('/upload_pan_image', [Frontend::class,'upload_pan_image']);
Route::post('/update_personal_info', [Frontend::class,'update_personal_info']);
Route::post('/update_account_info', [Frontend::class,'update_account_info']);
Route::get('/resume_application', [Frontend::class,'resume_application']);
Route::post('/mobile_verify', [UserAuth::class,'mobile_verify']);
Route::post('/update_signature', [Frontend::class,'update_signature']);

// Route::get('/interview', [Frontend::class,'interview']);
// Route::post('/insert_data', [Frontend::class,'insert_data'])->name('insert_data');
// Route::post('/get_data', [Frontend::class,'get_data'])->name('get_data');
// Route::post('/delete_data', [Frontend::class,'delete_data'])->name('delete_data');

// Route::get('/{slug}', [Frontend::class,'index']);
Route::get('/products/{slug}', [Frontend::class,'products']);
Route::get('/blogs/{slug}', [Frontend::class,'blogs']);
Route::get('/press-release/{slug}', [Frontend::class,'press_release']);
Route::post('/careers', [Frontend::class,'careers']);
Route::post('/enquiry', [Frontend::class,'enquiry']);

