@extends('layouts.app')

@section('title', "$news->title")

@section('content')
    <img src="{{ $news->thumbnail }}" alt="{{ $news->title }}" class="w-full h-96 object-cover">
    <div class="flex m-3 flex-wrap space-x-2">
        @foreach($tags as $tag)
            <a href="{{ route('tags.show', $tag->id) }}"
               class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm hover:bg-blue-600 transition duration-300">
                {{ $tag->title }}
            </a>
        @endforeach
    </div>
    <div class="flex flex-col gap-3">
        <p>{{ $news->content }}</p>
    </div>
    <div>
        <a href="{{ route('news.index') }}" class="text-blue-500 underline">⏪ Back to news</a>
    </div>
@endsection
