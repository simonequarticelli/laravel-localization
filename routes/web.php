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

// Authentication Routes...
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::group(
  [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localize' ]
  ],

function(){

  Route::get('/', function () {
      //App::setLocale('it');
      return view('welcome');
  });

  Auth::routes();

  Route::get(LaravelLocalization::transRoute('routes.home'), 'HomeController@index')->name('home');

  // Authentication Routes...
  Route::get(LaravelLocalization::transRoute('routes.login'), 'Auth\LoginController@showLoginForm')->name('login');
  Route::post(LaravelLocalization::transRoute('routes.login'), 'Auth\LoginController@login');
  Route::post(LaravelLocalization::transRoute('routes.logout'), 'Auth\LoginController@logout')->name('logout');

  // Registration Routes...
  Route::get(LaravelLocalization::transRoute('routes.register'), 'Auth\RegisterController@showRegistrationForm')->name('register');
  Route::post(LaravelLocalization::transRoute('routes.register'), 'Auth\RegisterController@register');

  // Password Reset Routes...
  Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
  Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
  Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
  Route::post('password/reset', 'Auth\ResetPasswordController@reset');


















});
