<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::latest()->get(),
    ]);
})->name("public.home");

Route::get('/posts/{post}', function (Post $post) {
    return view("post", [
        "post" => $post
    ]);
})->name("public.post");

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts,
    ]);
})->name("public.category");

Route::get('/author/{user:username}/posts', function (User $user) {
    return view('posts', [
        'posts' => $user->posts,
    ]);
})->name('public.author');
