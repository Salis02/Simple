@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-1">
            <div class="col-lg-10">
                <article class="mt-4 mb-2">
                    <h3>{{ $post->title }}</h3>

                    {{-- Kalau kita menggunakan {{  }} itu artinya kita sama saja menggunakan php echo, menjalankan htmlspesialchars --}}
                    {{-- Jika kita ingin demikian, kita gunakan {!!  !!} pastikan tidak melakukan escaping, pastikan terhindar dari script yang aneh --}}

                    <a class="btn btn-success" href="/dashboard/posts"><i class="bi bi-arrow-left-circle-fill"></i> Back</a>
                    <a class="btn btn-warning" href="/dashboard/posts/{{ $post->slug }}/edit"><i
                            class="bi bi-pencil-fill"></i> Update</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are you sure to delete this post?')"><i
                                class="bi bi-trash-fill"></i> Delete</button>
                    </form>

                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}"
                            class="card-img-top mt-3" alt="gambar" />
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                            class="card-img-top mt-3" alt="gambar" />
                    @endif


                    {!! $post->body !!}
                </article>

            </div>
        </div>
    </div>
@endsection
