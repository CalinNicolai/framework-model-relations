@extends('layouts.app')

@section('title', "$news->title")

@section('content')
    <img src="{{ $news->thumbnail }}" alt="{{ $news->title }}" class="w-full h-96 object-cover">
    <div class="flex flex-col gap-3">
        <p>{{ $news->content }}</p>
    </div>
    <div>
        <a href="{{ route('news.index') }}" class="text-blue-500 underline">⏪ Back to news</a>
    </div>
@endsection
