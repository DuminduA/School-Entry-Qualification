<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('applicant')->user();

    //dd($users);

    return view('applicant.home');
})->name('home');

