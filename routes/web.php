<?php

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
Route::get('/posts', function () {
    return view('posts',[
        "title" => "Posts"
    ]);
});
