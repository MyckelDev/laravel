<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;


Route::view('/','welcome')->name('home');

Route::view('/contacto','contacto')->name('contact');

Route::resource('blog', PostController::class,[
    'names'=>'posts',
    'parameters' => ['blog' => 'post']
]);

Route::view('/about','about')->name('about')->middleware('auth'); 

Route::view('/login', 'auth.login')->name('login');

Route::post('/login',[AuthenticatedSessionController::class,'store']);

Route::post('/logout',[AuthenticatedSessionController::class,'destroy'])->name=('logout');

Route::view('/register', 'auth.register')->name('register');

Route::post('/register',[RegisteredUserController::class , 'store']);