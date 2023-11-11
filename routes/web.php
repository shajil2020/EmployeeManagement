<?php

//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('welcome');
});

//Auth::routes();

Route::namespace('App\Http\Controllers\Auth')->group(function () {
   // Keep the login and logout routes
Route::get('/login', 'LoginController@showLoginForm')->name('login');
Route::post('/login', 'LoginController@login');
Route::post('/logout', 'LoginController@logout')->name('logout');

// Keep the password reset routes
Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('companies', CompanyController::class);

// web.php
Route::resource('employees', EmployeeController::class);




