@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>
    @if (session()->has('success'))
        <div class="row">
            <div class="col-md-8">
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    @endif
    <a href="/dashboard/posts/create" class="btn btn-primary">Create New Post</a>
    <hr>
    <div class="row">
        <div class="col-md-9">
            <div class="table-responsive small">

                <table class="table table-striped table-sm table-bordered">
                    <thead>
                        <tr class="table-primary ">
                            <th scope="col"></th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>
                                    <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-outline-success"><i class="bi bi-eye-fill"></i></a>
                                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-outline-warning"><i class="bi bi-pencil-fill"></i></a>
                                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-outline-danger"
                                            onclick="return confirm('Are you sure to delete this post?')"><i
                                                class="bi bi-trash-fill"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
