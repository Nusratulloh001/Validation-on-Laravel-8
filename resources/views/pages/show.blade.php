@extends('layouts.layout')
@section('head_title', 'Bookshop')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center p-4 mt-4 fs-1 fw-bold">
                Show post
            </h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="/tests" class="btn btn-success">Go back</a>
                <a href="/tests/create" class="btn btn-success">Create content</a>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <p class="m-0">{{ $content->text }} || {{$content->num }}</p>
                        <div>
                            <a href="tests/{{ $content->id }}/edit" class="btn btn-success">Edit</a>
                            <form action="/tests/{{ $content->id }}" class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection