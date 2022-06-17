<?php

use App\Models\User;
use App\Models\Post;
use \App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



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
    return view('home',[
        "tittle" =>"Home",
        "active" => "home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" =>"About",
        "active" => "about",
        "name" => "Ridwan Satria Wicaksana",
        "email" => "ridwansatria288@gmail.com",
        "image" => "foto.jpeg",
    ]);
});


Route::get('/blog', [PostController::class, 'index']);

//halaman single routes
Route::get('posts/{post:slug}', [PostController::class, 'show']);


Route::get('categories', function(){
    return view('categories',[
        'tittle'=>'Post Categories',
        "active" => "categories",
        'categories'=>Category::all()
    ]);
});

Route::get('categories/{category:slug}', function(Category $category){
    return view('posts',[
        'tittle'=>"Post by Category : $category->name",
        "active" => "categories",
        'posts'=>$category->posts->load('category','author'),

    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts',[
        'tittle'=>"Post by Author : $author->name",
        "active" => "posts",
        'posts'=>$author->posts->load('category','author'),
    ]);
});


