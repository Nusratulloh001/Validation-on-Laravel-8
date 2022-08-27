@extends('layouts.layout')
@section('head_title', 'Bookshop')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center p-4 mt-4 fs-1 fw-bold">
                Full course
            </h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="/tests/create" class="btn btn-success p-3 w-100">Create content</a>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-12">
                <ul class="list-group">
                    @foreach ($contents as $content)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <p class="m-0">{{ $content->text }} || {{$content->num }}</p>
                            <div>
                                <a href="tests/{{ $content->id }}/edit" class="btn btn-success">Edit</a>
                                <a href="tests/{{ $content->id }}" class="btn btn-primary">Show</a>
                                <form action="/tests/{{ $content->id }}" class="d-inline" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection