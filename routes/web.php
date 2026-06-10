<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/diagnose', function () {
    return view('diagnose');
});

Route::get('/over-ons', function () {
    return view('over-ons');
});
