<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::view('/','welcome')->name('home');
Route::view('/contacto','contacto')->name('contact');
Route::get('/blog', [PostController::class,'index'])->name('posts.index');
route::get('/blog/{post}',[PostController::class , 'show']) ->name('posts.show');
Route::view('/about','about')->name('about'); 