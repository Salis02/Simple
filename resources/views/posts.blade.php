@extends('layouts.main')

@section('container')
    <h1 class="m-2 text-center">{{ $title }}</h1>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('user'))
                    <input type="hidden" name="user" value="{{ request('user') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" value="{{ request('search') }}"
                        name="search">
                    <button class="btn btn-warning">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
                <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top" alt="gambar" />
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="gambar" />
            @endif

            <div class="card-body text-center">
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                    <h3 class="card-title">{{ $posts[0]->title }}</h3>
                </a>
                <p> By : <a class="text-decoration-none"
                        href="/posts?user={{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> about <a
                        class="text-decoration-none"
                        href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></p>
                <p class="card-text">
                    {{ $posts[0]->excerpt }}
                </p>
                <a class="text-decoration-none" href="/posts/{{ $posts[0]->slug }}">
                    Read more...
                </a>
                <p class="card-text">
                    <small class="text-muted">{{ $posts[0]->created_at->diffForHumans() }}</small>
                </p>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>


        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <a href="/posts?category={{ $posts[0]->category->slug }}" class="text=decoration-none">
                                <div class="position-absolute px-2 text-white"
                                    style="background-color: rgba(0, 0, 0, 0.6); border-radius:0px 0px 5px 0px">
                                    {{ $post->category->name }}
                                </div>
                            </a>
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top"
                                    alt="gambar" />
                            @else 
                                    <img src="https://source.unsplash.com/500x500?{{ $post->category->name }}" class="card-img-top"
                                        alt="{{ $post->category->name }}" />
                            @endif
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="/posts/{{ $post->slug }}">
                                    <h3 class="card-title">{{ $post->title }}</h3>
                                </a>
                                <p> By : <a class="text-decoration-none"
                                        href="/posts?user={{ $post->user->username }}">{{ $post->user->name }}</a></p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a class="text-decoration-none" href="/posts/{{ $post->slug }}">
                                    Read more...
                                </a>
                                <p class="card-text">
                                    <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">Posts no found</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>

@endsection
