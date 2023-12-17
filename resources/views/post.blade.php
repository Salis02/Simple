@extends ("layouts.main")

@section('container')
    <article>
        <h1>{{ $post->slug }}</h1>
        {{-- Kalau kita menggunakan {{  }} itu artinya kita sama saja menggunakan php echo, menjalankan htmlspesialchars --}}
        {{-- Jika kita ingin demikian, kita gunakan {!!  !!} pastikan tidak melakukan escaping, pastikan terhindar dari script yang aneh --}}
        {!! $post->body !!}
    </article>   
    <a class="btn btn-warning" href="/posts">Back</a>
@endsection