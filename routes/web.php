<?php

use App\Http\Controllers\DashboardPostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
        'active' => 'home'
    ]);
});
Route::get('/about', function () { //ketika memasukkan ke url /about
    return view('about', [
        "title" => "About",
        'active' => 'about',
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
        'active' => 'categories',
        'categories' => Category::all()
    ]); 
});

//Halaman login hanya utk user yang belum terotentifikasi
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']); //store biasanya utk menyimpan

//Halaman dashboard hanya utk user yang sudah terotentifikasi
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
// Route::get('/dashboard/posts/checkSlug' , [DashboardPostController::class, 'checkSlug'])->middleware('auth');










































// Route::get('categories/{category:slug}', function(Category $category){
//     return view('posts', [
//         'title' => "Post By : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'user'), //querynya kita sederhanakan
//     ]);
// });


// Route::get('/user/{user:username}', function(User $user){
//     return view('posts', [
//         'title' => "Post By : $user->name",
//         'active' => 'posts' ,
//         'posts' => $user->posts->load('category', 'user'),
//     ]);
// });