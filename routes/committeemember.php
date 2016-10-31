<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('committeemember')->user();

    //dd($users);

    return view('committeemember.home');
})->name('home');

