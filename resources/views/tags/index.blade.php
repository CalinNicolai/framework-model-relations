@extends('layouts.app')

@section('title', 'Tags')

@section('content')
    <ul class="flex flex-col gap-3">
        @foreach ($tags as $tags)
            <li class="border border-gray-500">
                <a class="flex justify-between" href="{{ route('tags.show', $tags->id) }}">
                    <p class="m-2">{{ $tags->title }} (News: {{ $tags->news_count }})</p>
                </a>
            </li>
        @endforeach
    </ul>
@endsection
