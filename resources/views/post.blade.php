@extends ("layouts.main")

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <article class="mt-4 mb-2">
                    <h3>{{ $post->title }}</h3>

                    {{-- Kalau kita menggunakan {{  }} itu artinya kita sama saja menggunakan php echo, menjalankan htmlspesialchars --}}
                    {{-- Jika kita ingin demikian, kita gunakan {!!  !!} pastikan tidak melakukan escaping, pastikan terhindar dari script yang aneh --}}

                    <p>By : <a class="text-decoration-none"
                            href="/posts?user={{ $post->user->username }}">{{ $post->user->name }}</a> about <a
                            class="text-decoration-none"
                            href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>

                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top mt-3" alt="gambar" />
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                            class="card-img-top mt-3" alt="gambar" />
                    @endif

                    {!! $post->body !!}
                </article>
                <a class="btn btn-warning" href="/posts">Back</a>
            </div>
        </div>
    </div>
@endsection
