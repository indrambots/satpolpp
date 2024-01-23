<?php
use Illuminate\Support\Facades\Route;
Route::get('google', 'LoginController@redirectToGoogle')->name('google.login');
Route::get('google/callback', 'LoginController@handleGoogleCallback')->name('google.callback');
