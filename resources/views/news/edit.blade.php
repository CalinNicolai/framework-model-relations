@extends('layouts.app')

@section('title', 'Edit News')

@section('content')
    <div class="container">
        <form action="{{ route('news.update', $news->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control border border-black" value="{{ $news->title }}">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control border border-black" rows="5">{{ $news->content }}</textarea>
            </div>
            <div>
                <input type="checkbox" @checked($news->published) />
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
