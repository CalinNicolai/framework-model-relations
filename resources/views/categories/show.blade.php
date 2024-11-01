@extends('layouts.app')

@section('title', 'news')

@section('content')
    <div class="text-right">Total Count: {{ $count }}</div>
    <ul class="flex flex-col gap-3">
        @foreach ($news as $newsItem)
            <li class="border border-gray-500">
                <a href="{{ route('news.show', $newsItem->id) }}">{{ $newsItem->title }}</a>
                <form action="{{ route('news.destroy', $newsItem->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
