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

Route::get('/appointments/index', 'AppointmentController@topmed');
Route::get('/category/index', 'CategoryController@topmedcat');
Route::get('/doctor/index', 'DoctorController@topmeddoc');
Route::get('/doctorlocation/index','DoctorLocationController@topmeddocloc');
Route::get('/location/index', 'LocationController@topmedloc');
Route::get('/medicaltest/index', 'MedicalTestController@topmedtest');
Route::get('/partner/index', 'PartnerController@topmedpart');
Route::get('/post/index', 'PostController@topmedpost');
Route::get('/prize/index', 'PrizeController@topmedpri');
Route::get('/screeninglocation/index', 'ScreeningLocationController@topmedscreen');
Route::get('/slide/index', 'SlideController@topmedslide');
Route::get('/speciality/index', 'SpecialityController@topmedspe');
Route::get('/specialitycategory/index', 'SpecialityCategoryController@topmedspecat');




Route::get('/specialitati', function (){
	return view('specialitati');
});
Route::get('/cercetare', function(){
	return view('cercetare');
});
Route::get('/servicii', function(){
	return view('servicii');
});
Route::get('/spitale', function(){
	return view('spitale');
});
Route::get('/echipamedici', function(){
	return view('echipamedici');
});
Auth::routes();

Route::resource('appointments', 'AppointmentController');
Route::resource('category', 'CategoryController');
Route::resource('doctors', 'DoctorController');
Route::resource('doctorlocation', 'DoctorLocationController');
Route::resource('locations', 'LocationController');
Route::resource('medicaltests', 'MedicalTestController');
Route::resource('partners', 'PartnerController');
Route::resource('posts', 'PostController');
Route::resource('prizes', 'PrizeController');
Route::resource('screeninglocations', 'ScreeningLocationController');
Route::resource('slides', 'SlideController');
Route::resource('specialitycategories', 'SpecialityCategoryController');
Route::resource('specialities', 'SpecialityController');

