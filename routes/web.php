<?php

use Illuminate\Support\Facades\Route;


$posts = [
    ['title' => 'First post'  ],
    ['title' => 'Second post'  ],
    ['title' => 'Third post'  ],
    ['title' => 'Fourth post'  ],
];

Route::view('/','welcome')->name('home');
Route::view('/contacto','contacto')->name('contact');
Route::view('/blog','blog',['posts' => $posts])->name('blog');
Route::view('/about','about')->name('about'); 