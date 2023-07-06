<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('posts', [
    'posts' => Post::get()
    // 'posts' => Post::latest()->with('category', 'author')->get()
    //Mengambil yang terbaru dan mengambil relasi category dan author
    //pakai 'with' karena lebih efisien
  ]);
});

Route::get('posts/{post:slug}', function (Post $post) {
  return view('post', [
    'post' => $post
  ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
  return view('posts', [
    'posts' => $category->posts
  ]);
});

Route::get('author/{user:username}', function (User $user) {
  return view('posts', [
    'posts' => $user->posts
  ]);
});
