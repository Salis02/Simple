@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>
    <div class="col-lg-8">
        {{-- Attribute enctype digunakan untuk menangani jika ada request berupa file --}}
        <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    aria-describedby="emailHelp" name="title" value="{{ old('title') }}" required autofocus>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                    aria-describedby="emailHelp" name="slug" value="{{ old('slug') }}" oninput="removeSpaces(this)"
                    required>
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label @error('image') is-invalid @enderror">Post's Image</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>



    <script>
        // Fungsi JavaScript untuk menghapus spasi
        function removeSpaces(input) {
            input.value = input.value.replace(/\s/g, '-'); // Mengganti semua spasi dengan string kosong
        }

        //Untuk menghilangkan fungsi upload file
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })




        // Script gagal untuk membuat slug otomatis dari title
        // const title = document.querySelector('#title');
        // const slug = document.querySelector('#slug');

        // title.addEventListener('change', function () {
        //     fetch('/dashboard/posts/checkSlug?title=' + title.value)
        //     .then (response => response.json())
        //     .then(data => slug.value = data.slug)
        // })
    </script>
@endsection
