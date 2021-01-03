<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
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





// Controllers Within The "App\Http\Controllers\Admin" Namespace and routes with '/admin'
Route::group(array('prefix'=>'admin', "as" => "admin.",'namespace'=>'Admin', 'middleware'=>'prevent-back-history'), function () {
  
    Route::any('/login', 'UserController@login')->name('login');
    Route::any('/forget', 'UserController@forgot')->name('forgot_password');
    Route::any('/reset/{token}', 'UserController@reset')->name('reset');

 
    Route::group(['middleware' => ['admin']], function () {
        Route::any('/', function(){
            return redirect()->route('admin.dashboard');
        });
        Route::any('/change-password', 'UserController@change_password')->name('change_password');
        Route::any('/profile', 'UserController@profile')->name('profile');

    	Route::any('/logout', 'UserController@logout')->name('logout');
        Route::any('/dashboard', 'UserController@dashboard')->name('dashboard');
        Route::any('/global-settings', 'UserController@global_settings')->name('global_settings');
        
        /** Email Template Routes Start **/
        Route::group([ "prefix" => "email-templates"], function(){
            Route::get('/', 'EmailTemplateController@index')->name('email_templates');
            Route::any('create', 'EmailTemplateController@create');
            Route::any('edit/{id}', 'EmailTemplateController@edit');
            Route::get('view/{id}', 'EmailTemplateController@view');
            Route::get('delete/{id}', 'EmailTemplateController@delete');
            Route::get('status_update/{id}/{status}', 'EmailTemplateController@status_update');
        });
        /** Email Template Routes End **/

        /** Email Template Routes Start **/
        Route::group([ "prefix" => "pages"], function(){
            Route::get('/', 'StaticPageController@index')->name('pages');
            Route::any('create', 'StaticPageController@create');
            Route::any('edit/{id}', 'StaticPageController@edit');
            Route::get('view/{id}', 'StaticPageController@view');
            Route::get('delete/{id}', 'StaticPageController@delete');
            Route::get('status_update/{id}/{status}', 'StaticPageController@status_update');
        });
        /** Email Template Routes End **/


        /** Specialities Routes Start **/
        Route::group([ "prefix" => "categories"], function(){
            Route::get('/', 'SpecialityController@index')->name('specialities');
            Route::any('create', 'SpecialityController@create');
            Route::any('edit/{id}', 'SpecialityController@edit');
            Route::get('delete/{id}', 'SpecialityController@delete');
            Route::get('status_update/{id}/{status}', 'SpecialityController@status_update');
        });
        /** Specialities Routes End **/

        /** Patient Routes Start **/
       

        Route::get('vendor-subscription', 'CommonController@subscription')->name('vendor_subscription');

        /** Enquiry Routes Start **/
        Route::group([ "prefix" => "inquiry"], function(){
            Route::get('/', 'CommonController@inquiry')->name('enquiry');
            Route::get('view/{id}', 'CommonController@inquiry_view');
        });
        /** Doctor Routes End **/


        /** Freelancer Routes Start **/
        Route::group([ "prefix" => "users/freelancers"], function(){
            Route::get('/', 'FreelancerController@index')->name('freelancers');
            Route::any('create', 'FreelancerController@create');
            Route::any('edit/{id}', 'FreelancerController@edit');
            Route::get('view/{id}', 'FreelancerController@view');
            Route::get('delete/{id}', 'FreelancerController@delete');
            Route::get('status_update/{id}/{status}', 'FreelancerController@status_update');
        });
        /** Producers Routes End **/

        /** Customer Routes Start **/
        Route::group([ "prefix" => "users/customers"], function(){
            Route::get('/', 'CustomerController@index')->name('customers');
            Route::any('create', 'CustomerController@create');
            Route::any('edit/{id}', 'CustomerController@edit');
            Route::get('view/{id}', 'CustomerController@view');
            Route::get('delete/{id}', 'CustomerController@delete');
            Route::get('status_update/{id}/{status}', 'CustomerController@status_update');
        });
        /** Customer Routes End **/

        /** Category Routes Start **/
        Route::group([ "prefix" => "category/categories"], function(){
            Route::get('/', 'CategoryController@index')->name('categories');
            Route::any('create', 'CategoryController@create');
            Route::any('edit/{id}', 'CategoryController@edit');
            Route::get('view/{id}', 'CategoryController@view');
            Route::get('delete/{id}', 'CategoryController@delete');
            Route::get('status_update/{id}/{status}', 'CategoryController@status_update');
        });
        /** Category Routes End **/


         /** Sub-Category Routes Start **/
        Route::group([ "prefix" => "category/sub-categories"], function(){
            Route::get('/', 'SubCategoryController@index')->name('sub_categories');
            Route::any('create', 'SubCategoryController@create');
            Route::any('edit/{id}', 'SubCategoryController@edit');
            Route::get('view/{id}', 'SubCategoryController@view');
            Route::get('delete/{id}', 'SubCategoryController@delete');
            Route::get('status_update/{id}/{status}', 'SubCategoryController@status_update');
        });
        /** Sub-Category Routes End **/

        /** Order Routes Start **/
        Route::group([ "prefix" => "order"], function(){
            Route::get('/today', 'CommonController@today_order')->name('today_order');
            Route::get('/past', 'CommonController@past_order')->name('past_order');
        });
        /** Order Routes End **/

        /** Freelancer Routes Start **/
        Route::group([ "prefix" => "plans"], function(){
            Route::get('/', 'PlanController@index')->name('plan');
            Route::any('create', 'PlanController@create');
            Route::any('edit/{id}', 'PlanController@edit');
            Route::get('view/{id}', 'PlanController@view');
            Route::get('delete/{id}', 'PlanController@delete');
            Route::get('status_update/{id}/{status}', 'PlanController@status_update');
        });
        /** Producers Routes End **/

      

    });

});


Route::get('/', function(){
    return view('front.index');
})->name('index');


Route::get('/about', function(){
    return view('front.about');
});

Route::get('/blog-details', function(){
    return view('front.blog_details');
});

Route::get('/blogs', function(){
    return view('front.blogs');
});

Route::get('/browse_company', function(){
    return view('front.browse_company');
});

Route::get('/browse_jobs', function(){
    return view('front.browse_jobs');
});


Route::get('/checkout', function(){
    return view('front.checkout');
});

Route::get('/forget_pass', function(){
    return view('front.forget_pass');
});

Route::get('/browse_freelancers', function(){
    return view('front.browse_freelancers');
});



// Controllers Within The "App\Http\Controllers\Customer" Namespace and routes with '/customer'
Route::group(array('namespace'=>'Front', 'middleware'=>'prevent-back-history'), function () {
  
    Route::any('/login', 'AuthController@login')->name('login');
    Route::any('/register', 'AuthController@register')->name('register');
    Route::any('/forget', 'AuthController@forgot')->name('forget');
    Route::any('/reset/{token}', 'AuthController@reset')->name('reset');
    Route::any('/logout', 'AuthController@logout')->name('logout');

    Route::any('/update-profile', 'AuthController@update_profile')->name('update_profile');
    Route::any('/preference', 'AuthController@preference')->name('preference');
    Route::any('/portfolio', 'AuthController@portfolio')->name('portfolio');
    Route::any('/get-child-category', 'AuthController@get_child_category')->name('get_child_category');

    Route::group(['middleware' => ['profile']], function () {

        
        Route::any('/update-image', 'AuthController@update_image')->name('update_image');

        //Customer route Start here
        Route::any('/customer-profile', 'CustomerController@profile')->name('customer_profile');
        Route::post('/chang_password', 'CustomerController@change_password')->name('customer_change_password');

        //Freelancer route Start here        
        Route::any('/freelancer-profile', 'FreelanceController@profile')->name('freelance_profile');
        Route::post('/change_password', 'FreelanceController@change_password')->name('change_password');
        Route::post('/update-account', 'FreelanceController@update_account')->name('update_account');
        Route::any('/update-info', 'FreelanceController@update_info')->name('update_info');
        Route::any('/freelancer-portfolio', 'FreelanceController@freelancer_portfolio')->name('freelancer_portfolio');
        Route::post('/delete-portfolio', 'FreelanceController@delete_portfolio')->name('delete_portfolio');
        Route::post('/update_service', 'FreelanceController@update_service')->name('update_service');

        Route::get('/store-front', 'FreelanceController@store_front')->name('store_front');
        Route::any('/store-front/create', 'FreelanceController@store_create')->name('store_create');

    });

});