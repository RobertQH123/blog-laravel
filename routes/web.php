<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', [HomeController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);

Route::get("/posts/create", [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('/test', function () {
    $post = Post::find(3);

    return $post->is_active ? 'Post is active' : 'Post is not active';
});