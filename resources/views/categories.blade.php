@extends('layouts.main')

@section('container')
    <h1 class="m-2 text-center">Halaman Blog</h1>

    <h3>Post Categories</h3>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img-top">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h3 class="card-title text-center flex-fill p-4 fs-3" style="background-color:rgba(0, 0, 0, 0.5)">
                                    {{ $category->name }}</h3>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
