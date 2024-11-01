@extends('layouts.app')

@section('title', 'news')

@section('content')
    <div class="text-right">Categories</div>
    <ul class="flex flex-col gap-3">
        @foreach ($categories as $category)
            <li class="border border-gray-500">
                <a href="{{ route('category.show', $category->id) }}">{{ $category->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
