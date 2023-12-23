@extends('layouts.main')

@section('container')
    <h1 class="m-2 text-center">Halaman Blog</h1>

    <h3>Post Categories</h3>

    @foreach ($categories as $category)
        
            <h2>
                <a class="text-decoration-none" href="/categories/{{ $category->slug }}">
                    {{ $category->name }}
                </a>
    @endforeach
@endsection
