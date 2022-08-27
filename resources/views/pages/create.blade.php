@extends('layouts.layout')
@section('head_title', 'Create page')

@section('content')
    <div class="container my-3">
        <h1 class="text-center fw-bold my-4">Create post</h1>
        <div class="row my-4">
            <div class="col-md-12">
                <a href="/tests" class="btn btn-outline-success">Go back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="/tests" method="POST">
                    @csrf
                    @method('POST')

                    @error('text')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    Text <input type="text" name="text" class="form-control" value="{{ old('text') }}"><br>

                    @error('num')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    Num <input type="number" name="num" class="form-control" value="{{ old('num') }}"><br>
                    
                    <button class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection