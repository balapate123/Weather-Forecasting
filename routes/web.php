<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/Admin', function () {
    return view('Admin.login');
});

Route::get('Admin/Dashboard', function () {
	if(Session::get('email')){
		return view('Admin.index');
	}else{
		return view('Admin.login');
	}
});

Route::post('Admin/Dashboard','API\LoginController@login');

Route::get('/Admin/logout', function () {
    return view('Admin.logout');
})->name('logout');

Route::get('/Admin/testimonial', function () {
    return view('Admin.testimonial');
})->name('manage-testimonial');

Route::get('/Admin/add-testimonial', function () {
    return view('Admin.add-testimonial');
})->name('add-testimonial');

Route::post('Admin/testimonial','API\TestimonialController@insertTestimonial')->name('add-testimonial');
