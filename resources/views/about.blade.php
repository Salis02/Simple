@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ $name }}</h1>
            <h3>{{ $email }}</h3>
            <img src="img/{{ $image }}" alt="{{ $name }}">
        </div>
    </div>
@endsection
