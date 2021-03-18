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
Route::get('/', 'homeController@index');

Route::get('/search', 'homeController@search');

Route::get('trip/details/{id}', 'homeController@tripDetails');

Route::get('/customer', function () {
    return view('main.customer.dashboard');
})->middleware('auth:web');

Route::get('trip/booking/{id}', 'customerController@tripBookings');

Route::get('user/profile', 'customerController@profile');

Route::get('user/all-bookings', 'customerController@getAllBookings');

Route::get('user/change-password', 'customerController@changePasswordPage');

Route::post('user/checkcurrent', 'customerController@checkCurrentPassword');

Route::patch('user/updatePassword', 'customerController@updatePassword');

Route::get('/signup', function () {
    return view('main.customer.sign_up');
});
Route::get('/customer-login', function () {
    return view('main.customer.login');
});

Route::post('/create-account', 'homeController@creatAccount')->name('create-account');

Route::post('customer-login','homeController@userLogin')->name('customer-login');

Route::get('/logout', 'homeController@logout');


//Route::get('searchTrip','homeController@autosuggest');

//....................Admin route starts below.............................

Route::get('/admin', function () {
    return view('admin.index');
})->middleware('auth:admin');

Route::get('/newTrip', 'tripController@newTrip');

Route::get('/login', function () {
    return view('admin.login');
});

Route::post('login', 'AuthController@login')->name('login');

Route::get('/logout', 'AuthController@logout');

Route::get('/admin/profile', function () {
    return view('admin.profile.profile');
})->middleware('auth:admin');

Route::resource('operator', 'operatorController');
//Route::post('store', 'operatorController@store');
Route::get('destroy/{id}', 'operatorController@destroy');

//Route for buses controller below
Route::resource('bus', 'busController');

//Routes for destination controller
//Route::resource('destination', 'destinationController');

//Routes for bus schedule controller
Route::get('schedule', 'tripController@index');

//this route dynamically gets the bus assigned to an operator
Route::get('getBus/{id}', 'tripController@displayBus');


Route::post('storeSchedule', 'tripController@store')->name('storeSchedule');
Route::get('suspended', 'tripController@suspended');

Route::get('trip/suspend/{id}', 'tripController@suspend');

//....................Admin routes ends here...................................