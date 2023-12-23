@extends ("layouts.main")

@section('container')
    <article class="mt-4 mb-2">
        <h3>{{ $post->title }}</h3>

        {{-- Kalau kita menggunakan {{  }} itu artinya kita sama saja menggunakan php echo, menjalankan htmlspesialchars --}}
        {{-- Jika kita ingin demikian, kita gunakan {!!  !!} pastikan tidak melakukan escaping, pastikan terhindar dari script yang aneh --}}

        <p>By : <a class="text-decoration-none" href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> about <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        {!! $post->body !!}
    </article>   
    <a class="btn btn-warning" href="/posts">Back</a>
@endsection