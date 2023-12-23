<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

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

Route::get('/', function () { //nilai default
    return view('home' , [
        "title" => "Home",
    ]);
});
Route::get('/about', function () { //ketika memasukkan ke url /about
    return view('about', [
        "title" => "About",
        "name" => "Salis Nizar Qomaruzaman",
        "email" => "nizarsalis@gmail.com",
        "image" => "sa.jpg"
    ]); //maka akan mengakses view dalam resources dan mengakses about di dalamnya jika ada
});

Route::get('/posts', [PostController::class, "index"]);

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "Post By : $category->name",
        'posts' => $category->posts->load('category', 'user'), //querynya kita sederhanakan
    ]);
});


Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'title' => "Post By : $author->name",
        'posts' => $author->posts->load('category', 'user'),
    ]);
});