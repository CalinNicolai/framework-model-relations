@extends('layouts.app')

@section('title', $tag->title)

@section('content')
    <div class="text-right">Total Count: {{ $count }}</div>
    <ul class="flex flex-col gap-3">
        @foreach ($news as $newsItem)
            <li class="border border-gray-500">
                <a class="flex justify-between" href="{{ route('news.show', $newsItem->id) }}">
                    <p class="m-2">{{ $newsItem->title }}</p>
                    <form class="m-2 border-2 p-2 rounded border-red-400 bg-red-300" action="{{ route('news.destroy', $newsItem->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </a>
            </li>
        @endforeach
    </ul>
@endsection
