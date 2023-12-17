@extends('layouts.main')

@section('container')
    <h1 class="m-2 text-center">Halaman Blog</h1>
    @foreach ($posts as $item)
        <article>
            <h2>
                <a href="/posts/{{ $item->slug }}">
                    {{ $item->title }}
                </a>
            </h2>
            <p>{{ $item->excerpt }}</p>
        </article>
    @endforeach
@endsection
