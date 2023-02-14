<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisteredUserController;


Route::view('/','welcome')->name('home');

Route::view('/contacto','contacto')->name('contact');

Route::resource('blog', PostController::class,[
    'names'=>'posts',
    'parameters' => ['blog' => 'post']
]);

Route::view('/about','about')->name('about')->middleware('auth'); 

Route::get('/login', function(){
        return 'Login page';

})->name('login');

Route::view('/register', 'auth.register')->name('register');
Route::post('/register',[RegisteredUserController::class , 'store']);