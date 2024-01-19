<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $title = '';

        // if (request('category')) {
        //     $category = Category::firstWhere('slug', request('category'));
        //     $title = ' in ' . $category->name;
        // }

        // if (request('user')) {
        //     $user = User::firstWhere('username', request('user'));
        //     $title = ' by ' . $user->name;
        // }

        // Sekarang, $title akan berisi informasi dari kedua kondisi
        // Jika keduanya terpenuhi, maka $title akan memiliki format 'in CategoryName in UserName'


        //
        return view('posts', [
            "title" => "All Post",
            "active" => "posts",
            // "posts" => Post::all() //menampilkan semua post di database
            //kita menghindari N+1 problem dengan menggunakan eager loading drpd lazy loade
            // 'posts' => Post::latest()->filter(request(['search', 'category', 'user']))->get() 
            //dibawah kita terapkan pagination
            'posts' => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString()
            //withQueryString untuk mencegah pagination mereset posts
        ]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view("post", [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
