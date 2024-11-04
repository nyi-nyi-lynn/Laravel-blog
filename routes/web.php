<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/home',function(){
    return view('home');
})->name('home');

// Route::get('/posts',[PostController::class, 'index'])->name('posts.index');
// Route::get('/posts/create',[PostController::class, 'create'])->name('posts.create');
// Route::post('/posts',[PostController::class, 'store'])->name('posts.store');
// Route::get('/posts/{post}',[PostController::class, 'show'])->name('posts.show');
// Route::get('/posts/{post}/edit',[PostController::class, 'edit'])->name('posts.edit');
// Route::put('/posts/{post}',[PostController::class, 'update'])->name('posts.update');
// Route::delete('/posts/{post}',[PostController::class, 'destroy'])->name('posts.destroy');
Route::resource('posts',PostController::class);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
