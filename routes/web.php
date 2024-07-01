<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

Route::get('blog/{slug}', function ($slug) {
    $posts  = Post::all();
    $post   = Post::find($slug);

    return view('blog-post', ['title' => $post['title'], 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
