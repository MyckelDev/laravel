<?php
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


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