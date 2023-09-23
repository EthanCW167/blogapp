<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Route;

/*
    GET - Request a resource
    POST - Create a new resource
    PUT - Update a resource - every value
    PATCH - Modify a resource
    DELETE - delete a resource
    OPTIONS - Ask the server which verbs are allowed
*/

Route::prefix('/blog')->group(function () {
    //GET
    Route::get('/', [PostsController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [PostsController::class, 'show'])->name('blog.show');

    //POST
    Route::get('/create', [PostsController::class, 'create'])->name('blog.create');
    Route::POST('/', [PostsController::class, 'store'])->name('blog.store');

    //PUT or PATCH
    Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('blog.edit');
    Route::patch('/{id}', [PostsController::class, 'update'])->name('blog.update');

    //DELETE
    Route::delete('/{id}', [PostsController::class, 'destroy'])->name('blog.destroy');
});

//Route::resource('blog', PostsController::class);

// Home Route
Route::get('/', HomeController::class);

// Multiple HTTP verbs
//Route::match(['GET','POST'], '/blog', [PostsController::class, 'index']);
//Route::any('/blog', [PostsController::class, 'index']);

// Return View
//Route::view('/blog', 'blog.index', ['name' => 'Ethan']);

//Fallback Route
Route::fallback(FallbackController::class);