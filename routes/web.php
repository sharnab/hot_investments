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

Route::prefix('admin')->group(function () {
	Route::get('/', 'HomeController@login')->name('login');
	Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
	Route::resource('/property', 'Admin\PropertyController');
	Route::get('/property/approve/{id}', 'Admin\PropertyController@approve')->name('property.approve');
	Route::resource('/chats', 'Admin\ChatController');
});

// Route::prefix('admin')->middleware(['RoleBuzz', 'auth'])->group(function () {
//     Route::get('/admin', 'Admin\DashboardController@index')->name('admin_dashboard');
//     Route::get('/admin/login', 'Auth\LoginController@login')->name('login');
//     Route::get('/admin/logout', 'Auth\LoginController@logout')->name('logout');
// });

// Route::prefix('seller')->middleware(['RoleBuzz', 'auth'])->group(function () {
    Route::get('/seller', 'Seller\DashboardController@index')->name('seller_dashboard');
    Route::get('/property/create', 'Seller\PropertyController@create')->name('property_create');
    Route::post('/property/store', 'Seller\PropertyController@store')->name('property_store');
	Route::get('/property/edit/{id}', 'Seller\PropertyController@edit')->name('property_edit');
	Route::get('/property/show/{id}', 'Seller\PropertyController@show')->name('property_show');
    Route::post('/property/update', 'Seller\PropertyController@update')->name('update');

	Route::get('/property/getSingleProperty/{id}', 'Seller\PropertyController@getSingleProperty');

	Route::get('/profile/edit/{id}', 'Seller\ProfileController@edit')->name('profile_edit');

	Route::get('/chat', 'Seller\ChatController@index')->name('chat');
	Route::get('/message', 'Seller\MessageController@index')->name('message');
	Route::post('/message', 'Seller\MessageController@store')->name('message.store');
    // Route::get('/seller/login', 'Auth\LoginController@login')->name('login');
    // Route::get('/seller/logout', 'Auth\LoginController@logout')->name('logout');
	// Route::post('/property/imageStorage', 'Seller\PropertyController@imageStorage')->name('image_storage');
// });

// Route::get('/{any}', function () {
//   return view('client.home.index');
// })->where('any', '.*');
Route::get('/', 'HomeController@index');
