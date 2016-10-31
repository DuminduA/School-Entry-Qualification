<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('moestaff')->user();

    //dd($users);

    return view('moestaff.home');
})->name('home');

