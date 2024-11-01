@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <ul class="flex flex-col gap-3">
        @foreach ($categories as $category)
            <li class="border border-gray-500">
                <a class="flex justify-between" href="{{ route('categories.show', $category->id) }}">
                    <p class="m-2">{{ $category->name }} (News: {{ $category->news_count }})</p>
                </a>
            </li>
        @endforeach
    </ul>
@endsection
