<?php

use Illuminate\Support\Facades\Route;

Route::view('/','welcome')->name('home');
Route::view('/contacto','contacto')->name('contact');
Route::view('/blog','blog')->name('blog');
Route::view('/about','about')->name('about'); 