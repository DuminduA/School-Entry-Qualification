<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


//Applicant Login
Route::get('applicant/login', 'ApplicantAuth\LoginController@showLoginForm');
Route::post('applicant/login', 'ApplicantAuth\LoginController@login');
Route::post('applicant/logout', 'ApplicantAuth\LoginController@logout');

//Applicant Register
Route::get('applicant/register', 'ApplicantAuth\RegisterController@showRegistrationForm');
Route::post('applicant/register', 'ApplicantAuth\RegisterController@register');

//Applicant Passwords
Route::post('applicant/password/email', 'ApplicantAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('applicant/password/reset', 'ApplicantAuth\ResetPasswordController@reset');
Route::get('applicant/password/reset', 'ApplicantAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('applicant/password/reset/{token}', 'ApplicantAuth\ResetPasswordController@showResetForm');


//Moestaff Login
Route::get('moestaff/login', 'MoestaffAuth\LoginController@showLoginForm');
Route::post('moestaff/login', 'MoestaffAuth\LoginController@login');
Route::post('moestaff/logout', 'MoestaffAuth\LoginController@logout');

//Moestaff Register
Route::get('moestaff/register', 'MoestaffAuth\RegisterController@showRegistrationForm');
Route::post('moestaff/register', 'MoestaffAuth\RegisterController@register');

//Moestaff Passwords
Route::post('moestaff/password/email', 'MoestaffAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('moestaff/password/reset', 'MoestaffAuth\ResetPasswordController@reset');
Route::get('moestaff/password/reset', 'MoestaffAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('moestaff/password/reset/{token}', 'MoestaffAuth\ResetPasswordController@showResetForm');


//Committeemember Login
Route::get('committeemember/login', 'CommitteememberAuth\LoginController@showLoginForm');
Route::post('committeemember/login', 'CommitteememberAuth\LoginController@login');
Route::post('committeemember/logout', 'CommitteememberAuth\LoginController@logout');

//Committeemember Register
Route::get('committeemember/register', 'CommitteememberAuth\RegisterController@showRegistrationForm');
Route::post('committeemember/register', 'CommitteememberAuth\RegisterController@register');

//Committeemember Passwords
Route::post('committeemember/password/email', 'CommitteememberAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('committeemember/password/reset', 'CommitteememberAuth\ResetPasswordController@reset');
Route::get('committeemember/password/reset', 'CommitteememberAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('committeemember/password/reset/{token}', 'CommitteememberAuth\ResetPasswordController@showResetForm');

Route::get('dashboard', function(){
    return view ('applicantDashboard');
});

Route::get('application/', function(){
    return view ('application\application1');
})->name('application');