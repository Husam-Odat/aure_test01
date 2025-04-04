<?php

use Webkul\Blog\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/posts', function () {
    // $posts = Post::where('is_published', true)->orderBy('published_at', 'desc')->get();
    $posts = Post::all();
    return view('posts.index', compact('posts'));
})->name('posts.index');
