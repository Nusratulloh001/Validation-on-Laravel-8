@extends('layouts.layout')
@section('head_title', 'Create page')

@section('content')
    <div class="container my-3">
        <h1 class="text-center fw-bold my-4">Edit post</h1>
        <div class="row my-4">
            <div class="col-md-12">
                <a href="/tests" class="btn btn-success">Go back</a>
                <a href="/tests/create" class="btn btn-success">Create content</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="/tests/{{ $content->id }}" method="POST">
                    @csrf
                    @method('PUT')

                     @error('text')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    Text <input type="text" name="text" class="form-control" value="{{ $content->text }}"><br>

                    @error('num')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    Num <input type="number" name="num" class="form-control" value="{{ $content->num }}"><br>
                    <button class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection