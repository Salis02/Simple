@extends('layouts.main')

@section('container')
    <h1 class="m-2 text-center">{{ $title }}</h1>
    @foreach ($posts as $item)
        <article class="mb-4 border-bottom">
            <h2>
                <a class="text-decoration-none" href="/posts/{{ $item->slug }}">
                    {{ $item->title }}
                </a>
            </h2>
            <p> By : <a class="text-decoration-none" href="/authors/{{ $item->user->username }}">{{ $item->user->name }}</a> about <a class="text-decoration-none" href="/categories/{{ $item->category->slug }}">{{ $item->category->name }}</a></p>
            <p>{{ $item->excerpt }}</p>
            <a class="text-decoration-none" href="/posts/{{ $item->slug }}">
                Read more...
            </a>
        </article>
    @endforeach
@endsection
