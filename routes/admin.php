<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Admin Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Authentication Admin Route ::
Route::group(['namespace' => 'Dashboard', 'prefix' => 'dashboard', 'middleware' => 'auth:admin'], function () {
    Route::get('/', 'DashboardController@index')->name('admin.dashboard'); // the first page admin visits if authenticated
    Route::get('logout', 'LoginController@logout')->name('admin.logout'); // Logout
    /********************************* Start Admins Pages Routes ************************************/
    Route::group(['prefix' => 'admins'], function () {
        Route::get('/', 'AdminController@index')->name('admin.admins');
        Route::get('create', 'AdminController@create')->name('admin.create');
        Route::post('create', 'AdminController@store')->name('admin.store');
    });
    /********************************* End Admins Pages Routes ************************************/
});

// Non_Authentication Admin Route ::
Route::group(['namespace' => 'Dashboard', 'prefix' => 'dashboard', 'middleware' => 'guest:admin'], function () {
    Route::get('login', 'LoginController@login')->name('admin.login');
    Route::post('login', 'LoginController@doLogin')->name('admin.post.login');
    Route::get('forgetPassword', 'LoginController@forgetPassword')->name('admin.forgetPassword');
    Route::post('forgetPassword', 'LoginController@postForgetPassword')->name('admin.postforgetPassword');
    Route::get('forgetPassword/{token}', 'LoginController@resetPassword')->name('admin.resetPassword');
    Route::post('forgetPassword/{token}', 'LoginController@postResetPassword')->name('admin.postresetPassword');
});

