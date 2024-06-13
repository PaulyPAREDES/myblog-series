<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'getHome'])->name('home');

Route::get('category/{category}', [CategoryController::class, 'category'])->name('posts.category');


//Agrupar rutas post
Route::controller(PostController::class)->group(function() {
     Route::get('post', 'index')->name('post')->middleware('auth');
     Route::get('post/show/{id}', 'getShow')->name('show');
     Route::get('post/create','getCreate')->name('create')->middleware('auth');
     Route::get('post/edit/{id}', 'getEdit')->name('edit')->middleware('auth');

     Route::post('post','store')->name('post.store')->middleware('auth');
     Route::put('post/{id}','update')->name('post.update')->middleware('auth');

     Route::delete('post/{post}', 'destroy')->name('post.destroy')->middleware('auth');
});

//route privadas
Route::middleware('auth')->group(function () {
    // muevo ruta para que herede mideeleware auth y simplifico ruta
    Route::view('/dashboard','dashboard')->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
