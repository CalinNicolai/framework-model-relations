@extends('layouts.app')

@section('title', 'Create News')
   
@section('content')
    <div class="container">
        <form action="{{ route('news.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control border border-black"
                value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control border border-black" rows="5">value="{{ old('content') }}"</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection